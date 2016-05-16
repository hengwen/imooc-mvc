<?php
	class indexController{
		private $auth;   //保存当前用户
		private $url;   //保存当前相对网址
		public function __construct(){
			if((isset($_SESSION['auth']))){
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:"";
			}
		}
		//用户登入
		public function login(){
			if($_POST){
				$this->checklogin();
			}else{
				VIEW::display('show/login.html');
			}
		}
		/**
		 * 获得绝对网址
		 */
		// public function getUrl(){
		// 	$this->url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
		// }
		/**
		 * 如果登入成功则提示登录成功，并跳转到首页
		 */
		public function checklogin(){
			$authobj = M('auth');
			if($authobj->loginsubmit('index')){
				$this->showmessage($authobj->mes,"admin.php");
			}else{
				$this->showmessage($authobj->mes,"admin.php");
			}
		}

		/**
		 * 登出操作,并跳转到首页
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
			$this->showmessage("退出成功！","admin.php");
			
		}
		/**
		 * 显示用户注册页面
		 */
		public function registerForm(){
			VIEW::display('show/register.html');
		}
		/**
		 * 用户注册
		 */
		public function register(){
			$index = M('index');
			$userInfo = $_POST;
			$res = $index->checkRegister($userInfo);
			if ($res) {
				$this->showmessage($index->mes,"admin.php?controller=index&method=login");
			}else{
				$this->showmessage($index->mes,"admin.php?controller=index&method=registerForm");
			}
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
		
		/**
		 * 首页展示
		 */
		public function index(){
			//$this->getUrl();
			$limit = " limit 0,4";
			$show = M('show');
			//获得所有分类 (二维数组)
			$cates = $show->getCates(); 
			//获得每个分类下的商品[分类号][商品数组]   (三维数组)
			$proArr = $show->getProInfo($limit,$cates);   
			//获得前四个商品的图片路径 （三维数组)
			$albumPaths = $show->getProImage($proArr);
			VIEW::assign(array('cates'=>$cates,'auth'=>$this->auth));
			VIEW::assign(array('proArr'=>$proArr));
			VIEW::assign(array('albumPaths'=>$albumPaths));
			VIEW::display('show/index.html');
		}
		/**
		 * 商品详情页展示
		 */
		public function detail(){
			// $this->getUrl();
			// var_dump($this->url);
			$id = $_GET['id'];
			$show = M('show');
			$proInfo = $show->getDetailProInfo($id);
			$proOneImageName = $show->getDetailProImageOne($id);
			$proImage = $show->getDetailProImage($id);
			VIEW::assign($proInfo);
			VIEW::assign(array('proImage'=>$proImage,'bigPath'=>$proOneImageName,'auth'=>$this->auth));
			VIEW::display('show/detail.html');
		}





	}