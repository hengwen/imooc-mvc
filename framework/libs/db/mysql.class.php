<?php
class mysql{
	/**
	 * 报错函数
	 * @param  string $error 
	 * @return string        
	 */
	function err($error){
		//die函数有两种作用，一个是输出，另一个是终止，相当于echo和exit。
		die("对不起，您的操作有误，原因是：".$error);
	}

	/**
	 * 连接数据库
	 * @param  string $config $config配置数组：array($dbhost,$dbuser,$dbpwd,$dbname,$dbcharset)
	 * @return bool         连接是否成功
	 */
	function connect($config){
		extract($config);
        $mysqli    = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);  
        if($mysqli->connect_errno) {  
            $mysqli    = false;  
            echo '<h2>'.$mysqli->connect_error.'</h2>';  
            die();  
        } else {  
            $mysqli->set_charset($dbcharset);  
        }  
	}

	/**
	 * 执行sql语句
	 * @param  string $sql 
	 * @return bool      
	 */
	function query($sql){
		if(!($query = mysql_query($sql))){
			$this->err($sql."<br>".mysql_error());
		}else{
			return $query;
		}
	}

	/**
	 * 查找一条
	 * @param  string $query 
	 * @return array        放回一条数组
	 */
	function fetchOne($query){
		$rs = mysql_fetch_array($query);
		return $rs;
	}

	/**
	 * 查找所有数据
	 * @param  string $query 
	 * @return array        返回所有数组
	 */
	function fetchAll($query){
		//mysql_fetch_array将资源转换为数组，一次转换一行
		while($rs = mysql_fetch_array($query,MYSQL_ASSOC)){
			$list[] = $rs;
		}
		//检查是否有list数组
		return isset($list)?$list:"";
	}

	/**
	 * 查找指定行指定字段的值
	 * @param  string  $query 
	 * @param  int $row   
	 * @param  string $field 字段
	 * @return string         
	 */
	function fetchResult($query,$row=0,$filed=0){
		$rs = mysql_result($query, $row,$filed);
		return $rs;
	}

	/**
	 * 获取数据总条数
	 */
	function getTotal($table){
		$sql = "select count(*) from ".$table;
		$result = $this->query($sql);
		$total_num = $this->fetchOne($result);
		return $total_num;
	}


	//insert into table(`a`,`b`,`c`) values('1','2','3')
	/**
	 * 插入数据
	 * @param  string $table 
	 * @param  array $arr   array('a'=>'1','b'=>'2')
	 * @return int        返回插入数据的id
	 */
	function insert($table,$array){
		// $keys = array_keys($arr);  //获得数组的部分或全部键
		// $values = array_values($arr);  //获得数组的键所对应的值
		foreach ($array as $key => $value) {
			$value = mysql_real_escape_string($value);
			$keyArr[] = '`'.$key.'`';
			$valueArr[] = "'".$value."'";
			$keys = implode(",",$keyArr);//将一个一位数组转化为字符串,输出`a`,`b`格式
			$values = implode(",",$valueArr);
			$sql = "insert into ".$table."(".$keys.") values(".$values.")";
			$this->query($sql);
			return mysql_insert_id();
		}
	}

	//update table set username='hengwen' where id = 1
	/**
	 * 更新数据
	 * @param  string $table 
	 * @param  array $array 如：array('a'=>'1')
	 * @param  string $where 如：id=1
	 * @return  bool      
	 */
	function update($table,$array,$where=null){
		foreach ($array as $key => $value) {
			$value = mysql_real_escape_string($value);
			$keyAndValueArr[] = "`".$key."`='".$value."'";
		}
		$keyAndValues = implode(",", $keyAndValueArr);
		$sql = "update ".$table." set ".$keyAndValues." where ".$where;
		$this->query($sql);

	}
	//delete from table where id=1;
	/**
	 * 删除
	 * @param  string $table 
	 * @param  string $where 
	 * @return bool        
	 */
	function delete($table,$where){
		$sql = "delete from ".$table." where ".$where;
		$this->query($sql);
	}


}



?>