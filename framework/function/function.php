<?php
/**
 * 控制器调用函数：引入控制器，将$name的控制器进行实例化，并调用$method方法	
 * @param string $name   控制器名称
 * @param string $method 控制器方法名称
 */
	 
	function C($name,$method){
		$currentdir = dirname(dirname(dirname(__FILE__)));
		require_once($currentdir.'/libs/Controller/'.$name.'Controller.class.php');
		/*
		// eval函数可以将字符串转化成php可执行的语句
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
		*/
	
		// eval函数调用简单，但是不够安全。可以使用一下代码：
		$controller = $name.'Controller';
		$obj = new $controller;
		$obj->$method();
	}

/**
 * 创建模型实例：创建$name的模型实例
 * @param string $name   模型名称
 */
	function M($name){
		$currentdir = dirname(dirname(dirname(__FILE__)));
		require_once($currentdir.'/libs/Model/'.$name.'Model.class.php');
		$model = $name.'Model';
		$obj = new $model;
		return $obj;
	}

/**
 * 创建视图实例：创建$name的视图实例
 * @param string $name 视图名称
 */
	function V($name){
		$currentdir = dirname(dirname(dirname(__FILE__)));
		require_once($currentdir.'/libs/View/'.$name.'View.class.php');
		$view = $name.'View';
		$obj = new $view;
		return $obj;
	}

/**
 * 对非法字符进行转义
 * @param  string $str 需要过滤的字符，如url
 * @return string      过滤后的字符
 */
	function daddslashes($str){
		//addslashes函数对单引号等其他特殊符号进行转义，get_magic_quotes_gpc()则是判断当前魔法函数的打开转态：会对字符串进行转义。
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}

/**
 * 实例化第三方类
 * @param string $path   路径
 * @param string $name   类名
 * @param array  $params 该类初始化时需要的属性以及属性值：array(属性=>属性值，属性=>属性值。。。。。)
 */
	function ORG($path,$name,$params=array()){
		$currentdir = dirname(dirname(dirname(__FILE__)));
		require_once($current.'/libs/ORG/'.$path.$name.'.class.php');
		$obj = new $name();
		if(!empty($params)){
			foreach ($params as $key => $value) {
				$obj->$key = $value;
			}
		}
		return $obj;
	}








?>