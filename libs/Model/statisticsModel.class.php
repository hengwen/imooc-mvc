<?php
 class statisticsModel{

 	private $where;
 	private $order = null;

 	public function __construct(){
 		$cId = (!isset($_GET['cId'])||$_GET['cId']=="") ? null : " and p.cId=".$_GET['cId'];
 		$time = $this->getTime();
 		$this->order = (!isset($_GET['sort'])||$_GET['sort']=="") ? null : " order by ".$_GET['sort'];
 		$this->where = $time.$cId;
 	}
 	/**
	 * 获得要显示的数据的总条数
	 */
	public function getTotalNum(){
		$sql = "select count(*) num from (select pId from imooc_indent_pro group by pId) AS tab";
		$total = DB::fetchOne($sql);
		return $total['num'];
	}
 	/**
 	 * 获得商品统计数据
 	 */
 	public function getStatistics($type,$start=null,$size=null){
 			if ($type == 1 ) {
	 			$result = $this->getStatisticsByPro($start,$size);
	 			if (!$result) {
	 				$result['not'] = null;
	 			}
	 			return $result;
	 		}elseif($type == 2){
	 			$result = $this->getStatisticsByUser($start,$size);
	 			if (!$result) {
	 				$result['not'] = null;
	 			}
	 			return $result;
	 		}
 	}
 	/**
 	 * 获得总统计数据
 	 */
 	public function getInfoTotalSta(){
 		$result1 = $this->getTotalMoney();
 		$result2 = $this->getTotalCount();
 		$result3 = $this->getUser();
 		$result4 = $this->getTotalMake();
 		$result5 = $this->getPro();
 		$result = array_merge($result1,$result2);
 		$result = array_merge($result,$result3);
 		$result = array_merge($result,$result4);
 		$result = array_merge($result,$result5);
 		return $result;
 	}
 	/**
 	 * 获得销售总金额
 	 */
 	private function getTotalMoney(){
 		$sql = "select sum(i.indentMon) total from imooc_indent i where i.active = 1".$this->where;
 		$result = DB::fetchOne($sql);
 		if(!$result){
 			$result['total']="0.00";
 		}
 		return $result;
 	}
 	/**
 	 * 销售毛利
 	 */
 	private function getTotalMake(){
 		$sql = "select (p.iPrice-p.pCost) money,sum(ip.count) count from (imooc_indent_pro ip left join imooc_pro p on ip.pId = p.id) left join imooc_indent i on ip.indentId=i.id where i.active=1".$this->where."  group by ip.pId";
 		$result = DB::fetchAll($sql);
 		$res = 0;
 		if ($result) {
 			foreach ($result as $pro) {
	 			$res =$res + $pro['money']*$pro['count'];
	 		}
	 		$re = array('makeMon'=>$res);
 		}else{
			$re = array('makeMon'=>"0.00");	
 		}
 		return $re;
 	}
 	/**
 	 * 获得销售总笔数
 	 */
 	private function getTotalCount(){
 		$sql = "select sum(i.active) totalCount from imooc_indent i where i.active = 1".$this->where;
 		$result = DB::fetchOne($sql);
 		if(!$result){
 			$result = array('totalCount'=>"0");
 		}
 		return $result;
 		
 	}
 	
 	/**
 	 * 消费额最高用户
 	 */
 	private function getUser(){
 		$sql = "select sum(i.indentMon) money,u.username from imooc_indent i left join imooc_user u on i.uId=u.id  where active=1".$this->where."  group by uId order by money desc";
 		$result = DB::fetchAll($sql);
 		if ($result) {
 			$res = $result[0];
 			return $res;
 		}else{
 			return $res = array('username'=>null);
 		}
 		
 	}
 	/**
 	 * 获得销量最高的商品名称
 	 */
 	private function getPro(){
 		$sql = "select p.pName,sum(ip.count) total from (imooc_indent_pro ip left join imooc_indent i on i.id=ip.indentId) left join imooc_pro p on p.id = ip.pId where i.active=1".$this->where." group by ip.pId order by total desc";
 		$result = DB::fetchAll($sql);
 		if ($result) {
 			$res = $result[0]['pName'];
 			$res = array('pName' => $res); 
 		}else{
 			$res = array('pName'=>null);
 		}
 		return $res;
 	}
 	/**
 	 * 按商品排列
 	 */
 	private function getStatisticsByPro($start,$size){
 		$limit = ($size==null) ? null : " limit ".$start.",".$size;
 		$sql = "select sum(p.iPrice) money,sum(ip.count) count, ip.indentId,ip.pId,p.pName,p.iPrice,p.pCost from (imooc_indent_pro ip left join imooc_pro p on ip.pId = p.id) left join imooc_indent i on ip.indentId=i.id where i.active=1".$this->where."  group by ip.pId ".$this->order.$limit;
 		//print_r($sql);
 		$result = DB::fetchAll($sql);
 		return $result;
 	}
 	/**
 	 * 按客户排列显示
 	 */
 	private function getStatisticsByUser($start,$size){
 		$limit = ($start==null) ? null : " limit ".$start.",".$size;
 		$sql = "select sum(i.indentMon) money,sum(i.active) count, i.id,i.uId,u.username from imooc_indent i left join imooc_user u on i.uId=u.id where i.active=1".$this->where." group by i.uId".$this->order.$limit;
 		$result = DB::fetchAll($sql);
 		return $result;
 	}
 /**
  * 根据后台统计表中的时间构造time属性
  */
 	private function getTime(){
 		if (isset($_GET['time'])) {
 			switch ($_GET['time']) {
 				case 'all':
 					$time = null;
 					break;
 				case 'today':
 					$time = " and to_days(i.indentTime) = to_days(now())";
 					break;
 				case 'yesterday':
 					$time = " and to_days(i.indentTime) = to_days(now())-1";
 					break;
 				case 'thisweek':
 					$time = " and yearweek(i.indentTime) = yearweek(now())";
 					break;
 				case 'lastweek':
 					$time = " and yearweek(i.indentTime) = yearweek(now())-1";
 					break;
 				case 'thismonth':
 					$time = " and date_format(i.indentTime,'%Y-%m') = date_format(now(),'%Y-%m')";
 					break;
 				case 'lastmonth':
 					$time = " and date_format(i.indentTime,'%Y-%m') = date_format(now(),'%Y-%m')-1";
 			}
 			return $time;
 		}
 	}
 }


?>