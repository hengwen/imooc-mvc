<?php
	class adminController{
		protected $auth; //保存当前登录的管理员
		protected $listPath;  //保存后台点击左侧导航列表相关选项在右侧显示的页面文件名称
		protected $addPath;    //保存后台点击左侧导航添加相关选项在右侧显示的页面文件名称
		protected $table;  //保存要在后台显示的列表数据库表名
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
		/**
		 * 获得后台导航点击后显示的列表或添加表单路径和数据库表名称
		 */
		public function getTablePath(){
			$tab = $_GET['tab'];
			if ($tab == 1) {
					$this->table = 'imooc_pro';
					$this->listPath = 'proList.html';
					$this->addPath = 'proAddForm.html';
					$this->editPath = 'proEditForm.html';
				}elseif($tab == 2){
					$this->table = 'imooc_cate';
					$this->listPath = 'cateList.html';
					$this->addPath = 'cateAddForm.html';
					$this->editPath = 'cateEditForm.html';
				}elseif($tab == 3){
					$this->table = 'imooc_user';
					$this->listPath = 'userList.html';
					$this->laddPath = 'userAddForm.html';
					$this->editPath = 'userEditForm.html';
				}elseif($tab == 4){
					$this->table = 'imooc_admin';
					$this->listPath = 'adminList.html';
					$this->addPath = 'adminAddForm.html';
					$this->editPath = 'adminEditForm.html';
				}
		}
		/**
		 * 显示添加操作的表单页面
		 */
		public function showAddForm(){
			$this->getTablePath();
			VIEW::assign(array('path'=>$this->addPath,'auth'=>$this->auth));
			VIEW::display('admin/index.html');
		}

	
		/**
		 * 显示列表以及页码
		 */
		public function showList(){
			$p = $_GET['p'];
			$this->getTablePath();
			$list = M('list');
			$result = $list->getList($this->table,$p);
			$page = $list->page();
			if ($result) {
				VIEW::assign(array('result'=>$result,'auth'=>$this->auth,'page'=>$page,'path'=>$this->listPath));
				VIEW::display('admin/index.html');
			}else{
				$this->showmessage("显示列表失败","admin.php?controller=admin&method=index");
			}
		}
		/**
		 * 后台添加操作
		 */
		public function doAdd(){
			$this->getTablePath();
			$adminadd = M('admin');
			$result = $adminadd->adminAdd($this->table);
			if ($result) {
				$this->showmessage("添加成功！","admin.php?controller=admin&method=showList&tab=4&p=1");
			}else{
				$this->showmessage('添加失败！','admin.php?controller=admin&method=showAddForm&tab=4');
			}
		}
		public function editForm(){
			$this->getTablePath();
			$id = $_GET['id'];
			$adminEditShow = M('admin');
			$result = $adminEditShow->adminEditShow($this->table,$id);

			if($result){
				VIEW::assign($result);
				VIEW::assign(array('auth'=>$this->auth,'path'=>$this->editPath));
				VIEW::display('admin/index.html');
			}else{
				$this->showmessage("显示失败","admin.php?controller=admin&method=showList&tab=4&p=1");
			}
			
		}
		/**
		 * 编辑管理员信息
		 */
		public function doEdit(){

			$this->getTablePath();
			$id = $_GET['id'];
			$edit = M('admin');
			if($result= $edit->adminEdit($this->table,$id)){
				$this->showmessage("编辑成功","admin.php?controller=admin&method=showList&tab=4&p=1");
			}else{
				$this->showmessage("编辑失败！","admin.php?controller=admin&method=showList&tab=4&p=1");
				}
			}
	}

?>