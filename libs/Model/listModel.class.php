<?php
class listModel{
	//显示的表名
	private $table;
	
	//每页条数
	private $page_size;
	//当前页
	private $page;
	//每页显示的起始条数
	private $start;
	//获取数据总条数
	private $total;
	//总页数
	private $page_total;
	//导航条显示的页码个数
	private $show_page;
	//导航页码偏移量
	private $page_offset;
	//导航页码起始页
	private $page_start;
	//导航页码最大值
	private $page_end;
	//导航条
	private $page_banner;
	//单击导航跳转链接地址
	private $url;
	

	public function __construct(){
		//$this->table = $table;
		
		$this->page_banner = "";
		//$this->page = $p;
		$this->page_size =5;
		// $this->start = ($this->page-1)*$this->page_size;
		// $this->total = DB::getTotal($this->table);
		// $this->page_total = ceil($this->total/$this->page_size);
		$this->show_page = 5;
		$this->page_offset = ($this->show_page-1)/2;
		$this->page_start = 1;
		// $this->page_end = $this->page_total;
		
	}
	/**
	 * 按分页显示数据
	 */
	public function getList($table,$p,$where=null){
			//得到每页要显示的数据
			$this->table = $table;
			$this->page = $p;
			$this->start = ($this->page-1)*$this->page_size;
			$sql = "select * from ".$table.$where." LIMIT ".$this->start.",".$this->page_size;
			$result = DB::fetchAll($sql);
			return $result;
		}
	/**
	 * 获得商品列表
	 */
	public function getProList($table,$p,$where=null,$order=null){
		$this->where = $where;
		$this->order = $order;
		$this->table = $table;
		$this->page = $p;
		$this->start = ($this->page-1)*$this->page_size;
		$sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from imooc_pro p join imooc_cate c on p.cId = c.id".$where.$order." LIMIT ".$this->start.",".$this->page_size;
		$result = DB::fetchAll($sql);
		return $result;
	}
	/**
	 * 构建一个三维数组，[id][i][albumPath]保存商品id以及对应的图片路径数组
	 */
	public function getProImage(){
		$sql1 = "select id from imooc_pro";
		$id = DB::fetchAll($sql1);
		foreach ($id as $value) {
			$sql2 = "select albumPath from imooc_album where pId=".$value['id'];
			$album = DB::fetchAll($sql2);
			$arr[$value['id']] = $album;
		}
		return $arr;
	}

	/**
	 * 获得图片以及商品信息，构建一个三维数组[商品id][商品名称][图片名称数组（可能多张图片）]
	 */
	public function getImageList($table,$p){
		$this->table = $table;
		$this->page = $p;
		$this->start = ($this->page-1)*$this->page_size;

		$sql1 = "select id,pName from imooc_pro order by id LIMIT ".$this->start.",".$this->page_size;;
		$products = DB::fetchAll($sql1);
		foreach ($products as $product) {
			$sql2 = "select albumPath from imooc_album where pId='".$product['id']."'";
			$paths[$product['id']][$product['pName']] = DB::fetchAll($sql2);
		}
		// print_r($paths);
		// exit;
		return $paths;
	}
		/**
		 * 页码导航条
		 */
		public function page($val=null,$order=null){

			$this->total = DB::getTotal($this->table);
			$this->page_total = ceil($this->total/$this->page_size);
			$this->page_end = $this->page_total;
			$this->url = $_SERVER['PHP_SELF']."?controller=admin&method=showList&tab=".$_GET['tab']."&val=".$val."&order=".$order."&p=";
			/**
			 * 如果当前页为第一页，则首页和上一页不能点击
			 */
			if ($this->page>1) {
				$this->page_banner.= "<a href='".$this->url."1"."'>首页</a>";
				$this->page_banner.= "<a href='".$this->url.($this->page-1)."'>上一页</a>";
			}else{
				$this->page_banner.= "<a class='forbid'>首页</a>";
				$this->page_banner.= "<a class='forbid'>上一页</a>";
			}
			/**
			 * 如果总页数大于导航条显示的页码个数则
			 */
			if ($this->page_total > $this->show_page) {
				//如果当前页大于偏移量加1（即大于3）则在上一页后显示省略号
				if ($this->page > $this->page_offset+1) {
					$this->page_banner.="...";
				}
				/**
				 * 如果当前页大于偏移量,
				 */
				if ($this->page > $this->page_offset) {
					//导航条起始页为当前页前去偏移量
					$this->page_start = $this->page - $this->page_offset;
					//如果总页数大于当前页加上偏移量则导航条尾页为当前页加上偏移量，否则为总页数
					$this->page_end = $this->page_total > $this->page+$this->page_offset ? $this->page+$this->page_offset : $this->page_total;
				}else{  //如果当前页小于偏移量
					//导航条起始页为1
					$this->page_start = 1; 
					//如果总页数大于导航条显示的页码数，则导航条尾页为导航条显示的页码数，否则为总页数
					$this->page_end = $this->page_total > $this->show_page ? $this->show_page : $this->page_total;
				}
				/**
				 * 如果当前页加上偏移量大于总页数，则导航条起始页为当前页减去偏移量后再减去（当前页加上偏移量减去总页数）
				 */
				if ($this->page + $this->page_offset > $this->page_total) {
					$this->page_start = $this->page - ($this->page + $this->page_offset - $this->page_total + $this->page_offset);
				}
			}
			//显示输出导航条页码
			for($i=$this->page_start;$i<=$this->page_end;$i++){
				$this->page_banner.="<a href='".$this->url.$i."'>".$i."</a>";
			}
			/**
			 * 如果总页数大于导航条显示的页码数并且总页数大于当前页加上偏移量则在下一页前显示省略号
			 */
			if ($this->page_total > $this->show_page && $this->page_total > $this->page + $this->page_offset) {
				$this->page_banner.="...";
			}
			/**
			 * 如果当前页等于总页数，不能点击下一页和尾页
			 */
			if($this->page < $this->page_total){
				$this->page_banner.="<a href='".$this->url.($this->page+1)."'>下一页</a>";
				$this->page_banner.= "<a href='".$this->url.$this->page_total."'>尾页</a>";
			}else{
				$this->page_banner.="<a class='forbid'>下一页</a>";
				$this->page_banner.= "<a class='forbid'>尾页</a>";
			}
			//表单提交的地址
			$action = $_SERVER['PHP_SELF'];
			//显示总页数
			$this->page_banner.=" 共 ".$this->page_total." 页 ";
			//显示到第几页表单
			$this->page_banner.="<form action='{$action}' method='get' class='page-form'>";
			//使用hidden  input构造表单提交的地址
			$this->page_banner.="<input type='hidden' name='controller' value='admin'><input type='hidden' name='method' value='showList'><input type='hidden' name='table' value='{$this->table}'>";
			$this->page_banner.=" 到第 <input type='text' size='2' name='p' class='page-num'> 页 ";
			$this->page_banner.="<input type='submit' value='确定' class='page-btn'>";
			$this->page_banner.="</form>";
			return $this->page_banner;
		}
}


?>