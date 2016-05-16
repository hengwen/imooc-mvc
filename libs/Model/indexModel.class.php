<?php
	class indexModel{
		//定义表名
		public $_table = 'imooc_user';
		//通过普通用户名从数据库中提取信息
		public function fetchOne_by_username($username){
			$sql = "select id,username,password from ".$this->_table.' where username="'.$username.'"';
			return DB::fetchOne($sql);
		}



	}



?>