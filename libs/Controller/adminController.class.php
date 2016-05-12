<?php
	class adminController{
		protected $auth; //保存当前登录的管理员
	

		public function __construct(){
			//session_start();
			if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
				$this->showmessage("请先登录！","admin.php?controller=admin&method=login");
			}else{
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:"";
			}
		}
		/**
		 * 登入页面
		 */
		public function login(){	
			if ($_POST) {
				//提交登入处理
				//登入处理的业务逻辑放在了admin auth
				//admin同表名的模型：从数据库里提出数据
				//auth模型进行用户的验证
				$this->checklogin();
			}else{
				//显示登入界面
				VIEW::display('admin/login.html');
			}
		}
		/**
		 * 检查是否登录成功
		 * @return string 
		 */
		private function checklogin(){
			$authobj = M('auth');
			if($authobj->loginsubmit()){
				$this->showmessage($authobj->mes,'admin.php?controller=admin&method=index');
			}else{
				$this->showmessage($authobj->mes,'admin.php?controller=admin&method=login');
			}
		}
		/**
		 * 显示后台首页
		 * 
		 */
		public function index(){
			$path = 'main.html';
			$indexInfo = M('admin');
			$system_info = $indexInfo->getinfo();
			VIEW::assign(array('auth'=>$this->auth,'path'=>$path));
			VIEW::assign($system_info);
			VIEW::display('admin/index.html');
		}
		/**
		 * 登出操作
		 * @return string 
		 */
		public function logout(){
			unset($_SESSION['auth']);
			if (isset($_COOKIE[session_name()])) {
				setcookie(session_name(),"",time()-1);
			}
			if (isset($_COOKIE['adminId'])) {
				setcookie('adminId',"",time()-1);
			}
			if (isset($_COOKIE['adminName'])) {
				setcookie('adminName',"",time()-1);
			}
			$this->showmessage("退出成功！","admin.php?controller=admin&method=login");
		}
		/**
		 * 显示返回信息，并进行页面的跳转
		 * @param  string $mes 
		 * @param  string $url 
		 * @return string      提示和跳转页面
		 */
		private function showmessage($mes,$url){
				echo "<script>alert('$mes')</script>";
				echo "<script>window.location.href='$url'</script>";
		}
		
	}

?>