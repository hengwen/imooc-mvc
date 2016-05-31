<?php
	class indexModel{
		//定义表名
		public $_table = 'imooc_user';
		public $mes = "";
		//通过普通用户名从数据库中提取信息
		public function fetchOne_by_username($username){
			$sql = "select id,username,password from ".$this->_table.' where username="'.$username.'"';
			return DB::fetchOne($sql);
		}
		/**
		 * 检查注册的用户名是否已经存在
		 */
		public function checkUser($username){
			$sql = "select id from imooc_user where username ='$username'";
			$result = DB::fetchOne($sql);
			return $result;
		}
		/**
		 * 用户注册，向数组库中插入数据
		 */
		public function register($userInfo){
			$userInfo['password'] = md5($userInfo['password']);
			unset($userInfo['password1']);
			$result = DB::insert('imooc_user',$userInfo);
			return $result;
		}

		/**
		 * 用户注册
		 */
		public function checkRegister($userInfo){
			$userInfo['regTime'] = date("Y-m-d",time());
			$res = $this->checkUser($userInfo['username']);
			if ($res) {
				$this->mes = "用户已经存在!";
				return false;
			}else{
				if ($userInfo['password'] == $userInfo['password1']) {
					if ($this->register($userInfo)) {
						$this->mes = "注册成功";
						return true;
					}else{
						return false;
					}
				}else{
					$this->mes = "密码不同,请重新输入!";
					return false;
				}
			}
		}
		/**
		 * 根据用户名称获得用户id
		 */
		public function getUserId($username){
			$sql = "select id from imooc_user where username = '".$username."'";
			$result = DB::fetchOne($sql);
			return $result;
		}
		/**
		 * 生成订单
		 */
		public function indent($post){
			$arr1['indentTime'] = date("Y-m-d",time());
			$arr1['uId'] = $post['uId'];
			$arr1['indentMon'] = $post['totle'];
			$arr1['active'] = 1;
			$result = DB::insert('imooc_indent',$arr1);
			if ($result) {
				$arr2['indentId'] = $result;
				$arr2['pId'] = $post['pId'];
				$arr2['count'] = $post['num'];
				$res = DB::insert('imooc_indent_pro',$arr2);
				if ($res) {
					return true;
				}else{
					$where = "id=".$result;
					DB::delete('imooc_indent',$where);
					return false;
				}
			}else{
				return false;
			}
			

		}



	}



?>