<?php
	class indexController{

		public function __construct(){
			if((isset($_SESSION['auth']))){
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:"";
			}
		}

		//获得商品数据，包括商品分类，商品信息，商品图片路径
		public function getPro($limit){
			$show = M('show');
			//获得所有分类 (二维数组)
			$cates = $show->getCates(); 
			//获得每个分类下的商品[分类号][商品数组]   (三维数组)
			$proArr = $show->getProInfo($limit,$cates);   
			//获得前四个商品的图片路径 （三维数组)
			$albumPaths = $show->getProImage($proArr);
			VIEW::assign(array('cates'=>$cates));
			VIEW::assign(array('proArr'=>$proArr));
			VIEW::assign(array('albumPaths'=>$albumPaths));
		}
		/**
		 * 首页展示
		 */
		public function index(){
			$limit = " limit 0,4";
			$this->getPro($limit);
			VIEW::display('show/index.html');
		}
		/**
		 * 商品详情页展示
		 */
		public function detail(){
			$id = $_GET['id'];
			$show = M('show');
			$proInfo = $show->getDetailProInfo($id);
			$proOneImageName = $show->getDetailProImageOne($id);
			$proImage = $show->getDetailProImage($id);
			VIEW::assign($proInfo);
			VIEW::assign(array('proImage'=>$proImage,'bigPath'=>$proOneImageName));
			VIEW::display('show/detail.html');
		}





	}