<?php
class DB{  //类名是全局变量，所以DB::$db可以访问静态属性，DB::方法（）就可调用数据库方法
//
	public static $db;     //数据库类的实例，在所有地方可以使用DB::$db来访问。

	public static function init($dbtype,$config){
		self::$db = new $dbtype($config);     //创建一个$dbty类型的数据库
		//self::$db->connect($config);   //连接数据库
	}

	public static function query($sql){
		return self::$db->query($sql);
	}

	public static function fetchOne($sql){
		$query = self::$db->query($sql);
		return self::$db->fetchOne($query);
	}

	public static function fetchAll($sql){
		$query = self::$db->query($sql);
		return self::$db->fetchAll($query);
	}

	public static function fetchResult($sql,$row=0,$filed){
		$query = self::$db->query($sql);
		return self::$db->fetchResult($query);
	}

	public static function getTotal($table){
		return self::$db->getTotal($table);
	}

	public static function insert($table,$array){
		return self::$db->insert($table,$array);
	}

	public static function update($table,$array,$where){
		return self::$db->update($table,$array,$where);
	}

	public static function delete($table,$where){
		return self::$db->delete($table,$where);
	}

}

?>