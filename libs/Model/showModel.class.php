<?php
class showModel{

	/**
	 * 获得所有分类
	 */
	public function getCates(){
		$sql = "select * from imooc_cate";
		$result = DB::fetchAll($sql);
		return $result;
	}
	/**
	 * 获得分类下的limit个商品
	 */
	public function getPro($cates,$limit){
		foreach ($cates as $cate) {
			$sql = "select * from imooc_pro where cId=".$cate['id'].$limit;
			$result[$cate['id']] = DB::fetchAll($sql);
		}
		return $result;
	}

	/**
	 * 构建一个三维数组，[id][i][albumPath]保存商品id以及对应的图片路径数组
	 */
	public function getProImage($proArr){
		foreach($proArr as $pros) {
			foreach ($pros as $pro) {
				$idArr[] = $pro['id'];
			}
		}
		foreach ($idArr as $value) {
			$sql = "select albumPath from imooc_album where pId=".$value;
			$album = DB::fetchOne($sql);
			$arr[$value] = $album;
		}
		return $arr;
	}





}




?>