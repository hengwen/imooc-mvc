<?php
	class indexController{
		private $auth;   //保存当前用户
		private $url;   //保存
		public function __construct(){
			if((isset($_SESSION['auth']))){
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:"";
			}
			new filter();
		}
		//用户登入
		public function login(){
			if($_POST){
				$this->checklogin();
			}else{
				$url = urlencode($_GET['referer']);
				VIEW::assign(array('referer'=>$url));
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
			$url = $_GET['referer'];
			$authobj = M('auth');
			if($authobj->loginsubmit('index')){
				$this->showmessage($authobj->mes,$url);
			}else{
				$this->showmessage($authobj->mes,"admin.php?controller=index&method=login");
			}
		}

		/**
		 * 登出操作,并跳转到首页
		 * @return string 
		 */
		public function logout(){
			$url = $_GET['referer'];
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
			$this->showmessage("退出成功！",$url);
			
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

		private function changeUrl($url){
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
			$show = M('show');
			$cName = $show->getCateName(filter::$cId); //商品名称数组
			$proInfo = $show->getDetailProInfo(filter::$id);
			$proOneImageName = $show->getDetailProImageOne(filter::$id);
			$proImage = $show->getDetailProImage(filter::$id);
			VIEW::assign($proInfo);
			VIEW::assign($cName);
			VIEW::assign(array('proImage'=>$proImage,'bigPath'=>$proOneImageName,'auth'=>$this->auth));
			VIEW::display('show/detail.html');
		}
		/**
		 * 展示分类页
		 */
		public function sort(){
			VIEW::assign(array('auth'=>$this->auth));
			VIEW::display('show/sort.html');
		}
		/**
		 * 展示筛选页
		 */
		public function filter(){
			VIEW::assign(array('auth'=>$this->auth));
			VIEW::display('show/filter.html');
		}
		/**
		 * 点击立即购买，显示结算页面
		 */
		public function buyNow(){
			$url = urlencode($_GET['referer']);
			if($this->auth == ""){
				$this->showmessage("请先登录！","admin.php?controller=index&method=login&referer=".$url);
			}
			$model = M('index');
			$uId = $model->getUserId($this->auth);
			$show = M('show');
			$proInfo = $show->getDetailProInfo(filter::$id);
			$image = $show->getDetailProImageOne(filter::$id);
			VIEW::assign($proInfo);
			VIEW::assign(array('auth'=>$this->auth,'imgPath'=>$image,'num'=>filter::$num,'uId'=>$uId));
			VIEW::display('show/cleaning.html');
		}
		/**
		 * 提交订单
		 */
		public function indent(){
			$index = M('index');
			$res = $index->indent($_POST);
			if ($res) {
				$this->showmessage("购买成功！","admin.php");
			}else{
				$this->showmessage("购买失败！","admin.php");
			}
		}





	}