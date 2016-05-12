<?php
class VIEW{

	public static $view;

	public static function init($viewtype,$config){
		self::$view = new $viewtype;
		//初始化配置视图引擎：如下
		/*
		$smarty->left_delimiter = $config["left_delimiter"];
		$smarty->right_delimiter = $config["right_delimiter"];
		$smarty->template_dir = $config["template_dir"];
		$smarty->compile_dir = $config["compile_dir"];
		$smarty->cahce_dir = $config["cache_dir"];
		 */
		foreach ($config as $key => $value) {
			self::$view->$key=$value;
		}
	}

	public static function assign($date){  //向模板注册的变量保存在数组中一次传入。
		foreach ($date as $key => $value) {
			self::$view->assign($key,$value);
		}
	}

	public static function display($template){
		self::$view->display($template);
	}


}

?>