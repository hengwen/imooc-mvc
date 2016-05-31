<?php
	class path{
		public static $tab = null;  //url参数，用来确定是哪个表
		public static $table = null;  //存放表名称
		public static $addPath = null;  //添加表单模板名称
		public static $listPath = null; //后台列表模板名称
		public static $editPath = null; //后台编辑模板名称
		public static $model = null;   //控制器调用模块模型名称
		public static $p = null;     //显示列表的页数参数
		public static $keywords = null; //url参数，val值
		public static $where = null;   //后台商品模糊查询参数 
		public static $ord = null;   //后台商品排序参数
		public static $type = 1;
		public function __construct(){
			self::getTab();
			self::getPath();
			self::getP();
			self::getVal();
			self::getOrder();
			self::getType();
		}
		/**
		 * 过滤url中的tab参数，若合法则获得tab，否则跳转的首页。
		 */
		public static function getTab(){
			if (isset($_GET['tab'])) {
					if($_GET['tab']=filter_input(INPUT_GET, 'tab',FILTER_VALIDATE_INT)){
						self::$tab = $_GET['tab'];
					}else{
						header('location:admin.php?controller=admin&method=index');
					}
			}
		}
		/**
		 * 过滤url中的p参数，若合法则获得p，否则跳转的首页。
		 */
		public static function getP(){
			if(isset($_GET['p'])){
				if($_GET['p']=filter_input(INPUT_GET, 'p',FILTER_VALIDATE_INT)){
					self::$p = $_GET['p'];
				}else{
					header('location:admin.php?controller=admin&method=index');
				}
			}
		}
		/**
		 * 过滤后台商品模糊查询的val参数，若合法则获得val；否则跳转的首页。
		 */
		public static function getVal(){
			if(isset($_GET['val'])){
				if($_GET['val']=filter_input(INPUT_GET, 'val',FILTER_SANITIZE_STRING)){
					self::$keywords = $_GET['val'];
				}else{
					print_r("val");
					header('location:admin.php?controller=admin&method=index');
				}
			}
		}
		/**
		 * 过滤后台商品排序的order参数，若合法则获得order；否则跳转的首页。
		 */
		public static function getOrder(){
			if(isset($_GET['order'])){
				if($_GET['order']=filter_input(INPUT_GET, 'order',FILTER_SANITIZE_STRING)){
					self::$ord = $_GET['order'];
				}else{
					header('location:admin.php?controller=admin&method=index');
				}
			}
		}
		public static function getType(){
			if(isset($_GET['type'])){
				if($_GET['type']=filter_input(INPUT_GET, 'type',FILTER_VALIDATE_INT)){
					self::$type = $_GET['type'];
				}else{
					header('location:admin.php?controller=admin&method=index');
				}
			}
		}
		/**
		 * 获得后台导航点击后显示的列表或添加表单路径和数据库表名称
		 */
		public static function getPath(){
			if (self::$tab == 1) {
					self::$table = 'imooc_pro';
					self::$listPath = 'proList.html';
					self::$addPath = 'proAddForm.html';
					self::$editPath = 'proEditForm.html';
				}elseif(self::$tab == 2){
					self::$table = 'imooc_cate';
					self::$listPath = 'cateList.html';
					self::$addPath = 'cateAddForm.html';
					self::$editPath = 'cateEditForm.html';
				}elseif(self::$tab == 3){
					self::$table = 'imooc_user';
					self::$listPath = 'userList.html';
					self::$addPath = 'userAddForm.html';
					self::$editPath = 'userEditForm.html';
				}elseif(self::$tab == 4){
					self::$table = 'imooc_admin';
					self::$listPath = 'adminList.html';
					self::$addPath = 'adminAddForm.html';
					self::$editPath = 'adminEditForm.html';
				}elseif(self::$tab == 5){
					self::$table = 'imooc_album';
					self::$listPath = 'imageList.html';
					self::$addPath = 'imageAddForm.html';
					//self::$editPath = 'adminEditForm.html';
				}elseif(self::$tab == 6){
					self::$table = "imooc_indent";
					self::$listPath = "orderList.html";
					self::$editPath = "orderEditForm.html";
				}elseif(self::$tab == 7){
					self::$listPath = "statisticsList.html";
				}
		}

}
?>