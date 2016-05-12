<?php
 class authModel{
 	//当前管理员的信息
 	private $auth = "";
 	public $mes = "";
 	public function loginsubmit(){
 		if(empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['verify'])){
 			return false;
 		}
 		$username = addslashes($_POST['username']);
 		$password = md5(addslashes($_POST['password']));
 		$verify = addslashes($_POST['verify']);
 		@$autoFlag = addslashes($_POST['autoLogin']);
 		$verify1 = $_SESSION['verify'];
 		if ($verify == $verify1) {
 			if($this->auth=$this->checkuser($username,$password)){
 				if ($autoFlag) {
 					setcookie("adminId",$this->auth['id'],time()+7*24*3600);
					setcookie("adminName",$this->auth['username'],time()+7*24*3600);
 				}
	 			$_SESSION['auth'] = $this->auth['username'];
	 			$this->mes = "登录成功!";
	 			return true;
	 		}else{
	 			$this->mes = "用户名或密码错误！";
	 			return false;
	 		}
 		}else{
 			$this->mes = "验证码错误!";
 			return false;
 		}
 	}
 	private function checkuser($username,$password){
 		$adminobj = M('admin');
 		$auth = $adminobj->fetchOne_by_username($username);
 		if((!empty($auth))&&$auth['password']==$password){
 			return $auth;
 		}else{
 			return false;
 		}
 	}


 }


?>