<?php
 class filter{
 	public static $id = null;
 	public static $cId = null;
 	public static $num = null;
 	public function __construct(){
 		self::getId();
 		self::getCate();
 		self::getNum();
 	}
 	//过滤url中的id参数
 	public static function getId(){
 		if(isset($_GET['id'])){
 			if ($_GET['id'] = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT)) {
 				self::$id = $_GET['id'];
 			}else{
 				header("location:admin.php");
 			}
 		}
 	}
 	//过滤url中的cate参数
 	public static function getCate(){
 		if(isset($_GET['cate'])){
 			if (filter_input(INPUT_GET,'cate',FILTER_VALIDATE_INT)&&filter_input(INPUT_GET, 'cate',FILTER_SANITIZE_STRING)) {
 				self::$cId = $_GET['cate'];
 			}else{
 				header("location:admin.php");
 			}
 		}
 	}
 	//过滤url中的num参数
 	public static function getNum(){
 		if(isset($_GET['num'])){
 			if ($_GET['num'] = filter_input(INPUT_GET,'num',FILTER_VALIDATE_INT)) {
 				self::$num = $_GET['num'];
 			}else{
 				header("location:admin.php");
 			}
 		}
 	}


 }


?>