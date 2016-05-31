<?php
	class adminController{
		protected $auth; //保存当前登录的管理员
		public function __construct(){
			if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
				$this->showmessage("请先登录！","admin.php?controller=admin&method=login");
			}else{
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:"";
			}
			new path();  //path类接收tab参数
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
			if($authobj->loginsubmit('admin')){
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
		 * 显示添加操作的表单页面
		 */
		public function showAddForm(){
			VIEW::assign(array('path'=>path::$addPath,'auth'=>$this->auth));
			VIEW::display('admin/index.html');
		}

		/**
		 * 显示列表以及页码
		 */
		public function showList(){
			$list = M('list');
			//如果显示商品列表需要进行商品图片的查找
			if (path::$tab==1) {
				$where = (path::$keywords!==null) ? " where p.pName like '%".path::$keywords."%' " : null;
				//如果有商品的排列，则构建一个order部分
				$order = (path::$ord!==null) ? " order by p.".path::$ord : null;
				$result = $list->getProList(path::$table,path::$p,$where,$order);
				$getProImage = $list->getProImage();  //所有商品图片以及对应的商品id
				$page = $list->page(path::$keywords,path::$ord);
			}elseif(path::$tab==5){
				$result = $list->getImageList("imooc_pro",path::$p); //根据商品的个数分页显示
				$page = $list->page();
			}elseif(path::$tab == 6){
				//如果有订单查询，则构建一个模糊查询语句的where部分
				$where = (path::$keywords!==null) ? " where i.id like '%".path::$keywords."%' " : null;
				//如果有订单的排列，则构建一个order部分
				$order = (path::$ord!==null) ? " order by i.".path::$ord : null;
				$result = $list->getOrderList(path::$table,path::$p,$where,$order);  //获得订单列表
				$page = $list->page(path::$keywords,path::$ord);
			}else{
				$result = $list->getList(path::$table,path::$p);
				$page = $list->page();
			}
			//显示列表
			if ($result) {
				if (@$getProImage) {
					VIEW::assign(array('proImage'=>$getProImage));
				}
				VIEW::assign(array('result'=>$result,'auth'=>$this->auth,'page'=>$page,'path'=>path::$listPath));
				VIEW::display('admin/index.html');
			}else{
				$this->showmessage("显示列表失败","admin.php?controller=admin&method=index");
			}
		}
		/**
		 * 后台添加操作
		 */
		public function doAdd(){
			$adminadd = M('admin');
			$result = $adminadd->adminAdd(path::$table);
			if ($result) {
				$this->showmessage("添加成功！","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
			}else{
				$this->showmessage('添加失败！',"admin.php?controller=admin&method=showAddForm&tab=".path::$tab);
			}
		}
		/**
		 * 后台编辑操作
		 */
		public function editForm(){
			$id = $_GET['id'];
			$adminEditShow = M('admin');
			if (path::$table="imooc_pro") {
				$cate = $adminEditShow->getCates();
			}
			$result = $adminEditShow->adminEditShow(path::$table,$id);
			if($result){
				if ($cate) {
					VIEW::assign(array("cates"=>$cate));
				}
				VIEW::assign($result);
				VIEW::assign(array('auth'=>$this->auth,'path'=>path::$editPath));
				VIEW::display('admin/index.html');
			}else{
				$this->showmessage("显示失败","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
			}
			
		}
		/**
		 * 编辑信息
		 */
		public function doEdit(){
			$id = $_GET['id'];
			$edit = M('admin');
			if($result= $edit->adminEdit(path::$table,$id)){
				$this->showmessage("编辑成功","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
			}else{
				$this->showmessage("编辑失败！","admin.php?controller=admin&method=showList&tab=".$tab."&p=1");
				}
			}
		/**
		 * 删除操作
		 */
		public function doDel(){
			$id = $_GET['id'];
			$del = M('admin');
			//商品的删除操作
			if (path::$table == "imooc_pro") {
				$delImg = $del->delImage($id);
				if ($delImg&&$result= $del->delAdmin(path::$table,$id)) {
					$this->showmessage("删除成功！","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
				}else{
					$this->showmessage("删除失败！","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
				}
			}
			//除了商品之外的删除操作
			if($result= $del->delAdmin(path::$table,$id)){
				$this->showmessage("删除成功！","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
			}else{
				$this->showmessage("删除失败！","admin.php?controller=admin&method=showList&tab=".path::$tab."&p=1");
			}
		}
		/**
		 * 显示添加商品表单
		 */
		public function showProAddForm(){
			$admin = M('admin');
			$cates = $admin->getCates();
			if (!$cates) {
				$this->showmessage("还没有分类项，请先添加分类！","admin.php?controller=admin&method=showAddForm&tab=2");
			}
			VIEW::assign(array('path'=>path::$addPath,'auth'=>$this->auth,'cates'=>$cates));
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
		/**
		 * 编辑商品
		 */
			public function editPro(){

				$id = $_GET['id'];
				$edit = M('admin');
				$res = $edit->proEdit($id,$_FILES);
				if ($res === 1) {  
					$this->showmessage("商品信息修改成功以及图片上传成功！！","admin.php?controller=admin&method=showList&tab=1&p=1");
				}elseif ($res === 2) {
					$this->showmessage("商品基本信息添加失败！","admin.php?controller=admin&method=showProAddForm&tab=1");
				}elseif($res === 3){
					$this->showmessage("商品信息修改成功！！","admin.php?controller=admin&method=showList&tab=1&p=1");
				}else{
					$this->showmessage($res,"admin.php?controller=admin&method=showList&tab=1&p=1");
				}
			}
			/**
			 * 删除分类的同时删除商品以及商品图片
			 */
			public function doDelCate(){
				$id = $_GET['id'];
				$del = M('admin');
				$proIdArr = $del->getAllProId($id);
				if ($proIdArr) { //如果分类下有商品则遍历删除
					foreach ($proIdArr as $proId) {
						$del->delAdmin('imooc_pro',$proId['id']);  //删除商品
						$del->delImage($proId['id']);  //删除商品图片
					}
				}
				//删除分类
				$res3 = $del->delAdmin('imooc_cate',$id);
				if ($res3) {
					$this->showmessage("删除成功!!","admin.php?controller=admin&method=showList&tab=2&p=1");
				}else{
					$this->showmessage("删除失败！！","admin.php?controller=admin&method=showList&tab=2&p=1");
				}
			}
			/**
			 * 商品图片管理添加文字水印
			 */
			public function fontMark(){
				$id = $_GET['id'];
				$model = M('admin');
				$res = $model->fontMark($id);
				if($res){
					$this->showmessage("成功!!","admin.php?controller=admin&method=showList&tab=5&p=1");
				}else{
					$this->showmessage("失败!!","admin.php?controller=admin&method=showList&tab=5&p=1");
				}
			}
			/**
			 * 商品图片管理添加图片水印
			 */
			public function imageMark(){
				$id = $_GET['id'];
				$model = M('admin');
				$res = $model->imageMark($id);
				if($res){
					$this->showmessage("成功!!","admin.php?controller=admin&method=showList&tab=5&p=1");
				}else{
					$this->showmessage("失败!!","admin.php?controller=admin&method=showList&tab=5&p=1");
				}
			}
			/**
			 * 后台统计模块显示
			 */
			public function showStatisticsList(){
				$model = M('statistics');
				$admin = M('admin');
				$cates = $admin->getCates();
				$totalNum = $model->getTotalNum();
				$page = new page('imooc_indent_pro',path::$p,5,$totalNum);
				$totalInfo = $model->getInfoTotalSta();
				$result = $model->getStatistics(path::$type,$page->getStart(),$page->getSize());
				$banner = $page->page("showStatisticsList");
				if ($result&&$cates) {
					VIEW::assign(array('result'=>$result,'cates'=>$cates,'auth'=>$this->auth,'path'=>path::$listPath,'page'=>$banner,'type'=>path::$type));
					VIEW::assign($totalInfo);
					VIEW::display("admin/index.html");
				}
				
			}
			/**
			 * 后台统计模块ajax请求，按时间
			 */
			public function showStatisticsListAjax(){
				$model = M('statistics');
				$result[0] = $model->getInfoTotalSta();
				$resultPro = $model->getStatistics(path::$type);
				$res = array_merge($result,$resultPro);
				echo json_encode($res);
			}
			/**
			 * 后台统计模块ajax请求，统计列表
			 */
			public function showStatisticsListAjaxByRole(){
				$model = M('statistics');
				$result = $model->getStatistics(path::$type);
				echo json_encode($result);
			}
		
	}

?>