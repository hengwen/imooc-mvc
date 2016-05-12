<?php
	class adminModel{
		//定义表名
		public $_table = 'imooc_admin';
		//通过用户名从数据库中提取信息
		public function fetchOne_by_username($username){
			$sql = "select id,username,password from ".$this->_table.' where username="'.$username.'"';
			return DB::fetchOne($sql);
		}
		/**
		 * 获得系统信息
		 * @return array 
		 */
		public function getinfo(){
			$system_info = array('php_os'=>PHP_OS,'apache_version'=>apache_get_version(),'php_version'=>PHP_VERSION,'php_sapi'=>PHP_SAPI);
			return $system_info;
		}
		/**
		 * 添加管理员
		 */
		public function adminAdd($table){
			$admin = $_POST;
			if (array_key_exists('password', $admin)) {
				$admin['password'] = md5($admin['password']);
			}
			if (isset($admin)) {
				$result = DB::insert($table,$admin);
				return $result;
			}else{
				return false;
			}
			
		}

		

	}



?>