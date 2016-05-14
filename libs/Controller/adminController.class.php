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
		public function getTablePath($tab){
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
					$this->addPath = 'userAddForm.html';
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
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			VIEW::assign(array('path'=>$this->addPath,'auth'=>$this->auth));
			VIEW::display('admin/index.html');
		}

	
		/**
		 * 显示列表以及页码
		 */
		public function showList(){
			$p = $_GET['p'];
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$list = M('list');
			if ($tab==1) {
				$result = $list->getProList($this->table,$p);
				$getProImage = $list->getProImage();  //所有商品图片以及对应的商品id
			}else{
				$result = $list->getList($this->table,$p);
			}
			
			$page = $list->page();
			if ($result) {
				if ($getProImage) {
					VIEW::assign(array('proImage'=>$getProImage));
				}
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
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$adminadd = M('admin');
			$result = $adminadd->adminAdd($this->table);
			if ($result) {
				$this->showmessage("添加成功！","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
			}else{
				$this->showmessage('添加失败！',"admin.php?controller=admin&method=showAddForm&tab={$tab}");
			}
		}
		/**
		 * 后台编辑操作
		 */
		public function editForm(){
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$id = $_GET['id'];
			$adminEditShow = M('admin');
			$result = $adminEditShow->adminEditShow($this->table,$id);

			if($result){
				VIEW::assign($result);
				VIEW::assign(array('auth'=>$this->auth,'path'=>$this->editPath));
				VIEW::display('admin/index.html');
			}else{
				$this->showmessage("显示失败","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
			}
			
		}
		/**
		 * 编辑信息
		 */
		public function doEdit(){
			$id = $_GET['id'];
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$edit = M('admin');
			if($result= $edit->adminEdit($this->table,$id)){
				$this->showmessage("编辑成功","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
			}else{
				$this->showmessage("编辑失败！","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
				}
			}

		/**
		 * 删除操作
		 */
		public function doDel(){
			$id = $_GET['id'];
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$del = M('admin');
			if($result= $del->delAdmin($this->table,$id)){
				$this->showmessage("删除成功！","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
			}else{
				$this->showmessage("删除失败！","admin.php?controller=admin&method=showList&tab={$tab}&p=1");
			}
		}
		/**
		 * 显示添加商品表单
		 */
		public function showProAddForm(){
			$tab = $_GET['tab'];
			$this->getTablePath($tab);
			$admin = M('admin');
			$cates = $admin->getCates();

			if (!$cates) {
				$this->showmessage("还没有分类项，请先添加分类！","admin.php?controller=admin&method=index");
			}
			VIEW::assign(array('path'=>$this->addPath,'auth'=>$this->auth,'cates'=>$cates));
			VIEW::display('admin/index.html');
		}
		/**
		 * 添加商品
		 */
		public function addPro(){
			$model = M('admin');
			$res = $model->proAdd($_FILES,$_POST);
			if ($res === 1) {  
				$this->showmessage("商品添加成功！！","admin.php?controller=admin&method=showList&tab=1&p=1");
			}elseif ($res === 2) {
				$this->showmessage("商品基本信息添加失败！","admin.php?controller=admin&method=showProAddForm&tab=1");
			}else{
				$this->showmessage($res,"admin.php?controller=admin&method=showList&tab=1&p=1");
			}
			
			
			
		}

	}

?>