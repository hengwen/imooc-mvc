<?php
	class adminModel{
		//定义表名
		public $_table = 'imooc_admin';
		//通过用户名从数据库中提取信息
		public function fetchOne_by_username($username){
			$sql = "select id,username,password from ".$this->_table.' where username="'.$username.'"';
			return DB::fetchOne($sql);
		}
		/**
		 * 获得系统信息
		 * @return array 
		 */
		public function getinfo(){
			$system_info = array('php_os'=>PHP_OS,'apache_version'=>apache_get_version(),'php_version'=>PHP_VERSION,'php_sapi'=>PHP_SAPI);
			return $system_info;
		}
		/**
		 * 添加管理员
		 */
		public function adminAdd($table){
			$admin = $_POST;
			if (array_key_exists('password', $admin)) {
				$admin['password'] = md5($admin['password']);
			}
			if (isset($admin)) {
				$result = DB::insert($table,$admin);
				return $result;
			}else{
				return false;
			}
			
		}

		/**
		 * 获得需要修改的管理员旧值
		 */
		public function adminEditShow($table,$id){
			$sql = "select * from ".$table." where id=".$id;
			if ($rs = DB::fetchOne($sql)) {
				return $rs;
			}else{
				return false;
			}
		}
		/**
		 * 修改管理员信息
		 */
		public function adminEdit($table,$id){
			$where = '`id`='.$id;
			$arr = $_POST;
			if(array_key_exists('password', $arr)){
				$arr['password'] = md5($arr['password']);
			}
			if(isset($id)&&isset($table)&&isset($where)){
				$res= DB::update($table,$arr,$where);
				return $res;
			}else{
				return false;
			}
		}
		/**
		 * 后台删除操作
		 */
		public function delAdmin($table,$id){
			$where = "`id`=".$id;
			if(isset($id)&&isset($table)){
				$result = DB::delete($table,$where);
				return $result;
			}else{
				return false;
			}
		}
		/**
		 * 获得所有分类
		 */
		public function getCates(){
			$sql = "select * from imooc_cate";
			$result = DB::fetchAll($sql);
			return $result;
		}
		/**
		 * 获得分类下的所有商品id号
		 */
		public function getAllProId($cId){
			$sql = "select id from imooc_pro where cId=".$cId;
			$result = DB::fetchAll($sql);
			return $result;
		}
		/**
		 * 将上传的多文件信息重新归类，一个数组存放一个文件的所有信息
		 */
		public function getFiles($filesInfo){
			$i = 0;
			foreach ($filesInfo as $file) {
				if(is_string($file['name'])){
					$files[$i] = $file;
					$i++; 
				}elseif(is_array($file['name'])){
					foreach ($file['name'] as $key => $value) {
						$files[$i]['name'] = $file['name'][$key];
						$files[$i]['type'] = $file['type'][$key];
						$files[$i]['tmp_name'] = $file['tmp_name'][$key] ;
						$files[$i]['error'] = $file['error'][$key];
						$files[$i]['size'] = $file['size'][$key];
						$i++;
					}
				}
			}
			return $files;
		}
		/**
		 * 上传商品图片
		 * @param  array $filesInfo 图片的基本信息
		 * @return array            图片路径
		 */
		public function doUpload($filesInfo){
			$filesUpload = M('upload');
			$image = M('image');
			$files = $this->getFiles($filesInfo);
			$i=0;
			foreach ($files as $file) {
				$result[] = $filesUpload->uploadFile($file);  //单个文件放回的结果
				if(strstr($result[$i], "uploads")){
					$image->construct($result[$i]);
					$image->cramping(220,220);
					$image->cramping(350,350);
					$image->cramping(50,50);
					$image->destoryImage();  //销毁$result[$i]的图片资源
					$i++;
				}else{
					//遍历已经上传的文件，并将文件删除
					for ($j=0; $j < $i; $j++) { 
						$fileName = $result[$j];
						$subFileName = explode("/", $fileName);
						unlink($fileName);
						unlink($subFileName[0]."/".$subFileName[1]."/"."images220/".$subFileName[2]);
						unlink($subFileName[0]."/".$subFileName[1]."/"."images350/".$subFileName[2]);
						unlink($subFileName[0]."/".$subFileName[1]."/"."images50/".$subFileName[2]);
					}
					return $result[$i];  //返回上传文件错误信息
				}

			}
			return $result;   //返回所有文件的路径
			
		}
		/**
		 * 商品基本信息插入
		 * @param  array $post 表单数据
		 * @return int       插入id号
		 */
		public function doProInsert($post){
			$post['pubTime'] = date("Y-m-d",time());
			$result = DB::insert("imooc_pro",$post);
			return $result;
		}
		/**
		 * 商品图片插入相册
		 * @param  string $table 
		 * @param  array $arr   
		 */
		public function doAblumInsert($table,$arr){
			DB::insert($table,$arr);
		}
		/**
		 * 商品添加操作
		 * @param  array $filesInfo 
		 * @param  array $post      
		 * @return string            
		 */
		public function proAdd($filesInfo,$post){
			$resInsert = $this->doProInsert($post);
			if ($resInsert) {  //如果商品基本信息插入成功则进行图片的上传
				$res = $this->doUpload($filesInfo);
				if (is_array($res)) {
					foreach ($res as $fileUrl) {
						$arr['pId'] = $resInsert;
						$arr['albumPath'] = $fileUrl;
						$this->doAblumInsert("imooc_album",$arr);
					}
					return $allResult = 1;  //代表商品添加成功
				}else{
					return "商品插入成功，图片上传失败，原因：".$res."。请在商品列表中添加图片！";
				}
			}else{
				return $res = 2;  //代表商品插入失败！
			}
			
		}
		
		/**
		 * 编辑商品
		 */
		public function proEdit($id,$filesInfo){
			$resUpdate = $this->adminEdit("imooc_pro",$id);
			if ($resUpdate) {  //如果商品基本信息插入成功则进行图片的上传
				if (!empty($filesInfo)) {
					$res = $this->doUpload($filesInfo);
					if (is_array($res)) {
						foreach ($res as $fileUrl) {
							$arr['pId'] = $id;
							$arr['albumPath'] = $fileUrl;
							$this->doAblumInsert("imooc_album",$arr);
						}
						return $allResult = 1;  //代表商品信息修改以及图片都上传成功
					}else{
						return "商品插入成功，图片上传失败，原因：".$res;
					}
				}
				return $proInfo = 3; //代表商品信息修改成功，但没有上传新图片
			}else{
				return $res = 2;  //代表商品插入失败！
			}
		}
		/**
		 * 根基商品id号删除图片
		 * @param  int $id 商品id
		 */
		public function delImage($id){
			$sql = "select albumPath from imooc_album where pId=".$id;
			$res = DB::fetchAll($sql);
			foreach ($res as $imageUrl) {
				$imageNameArr = explode("/", $imageUrl['albumPath']);
				$imageName = end($imageNameArr);
				
				if(file_exists("uploads/proImg/".$imageName)){
					unlink("uploads/proImg/".$imageName);
				}
				if(file_exists("uploads/proImg/images220/".$imageName)){
					unlink("uploads/proImg/images220/".$imageName);
				}
				if(file_exists("uploads/proImg/images350/".$imageName)){
					unlink("uploads/proImg/images350/".$imageName);
				}
				if(file_exists("uploads/proImg/images50/".$imageName)){
					unlink("uploads/proImg/images50/".$imageName);
				}
			}

			return true;
		}





}

?>