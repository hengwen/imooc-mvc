<?php
class uploadModel{
	protected $maxSize;
	protected $fileName;
	protected $imgFlag;
	protected $allowMime;
	protected $allowExt;
	protected $uploadPath;
	protected $error;
	protected $ext;
	protected $destination;
	protected $uniName;
	protected $fileInfo;
	
	public function __construct($maxSize=8388608,$imgFlag=true,$allowMime=array('image/jpeg','image/jpg','image/png','image/gif'),$allowExt=array('jpeg','jpg','png','gif'),$uploadPath='uploads/proImg'){
		$this->maxSize = $maxSize;  //上传的最大值
		// $this->fileName = $fileName;  //上传的文件名
		$this->imgFlag = $imgFlag;    //是否检查扩展名
		$this->allowMime = $allowMime;  //允许的文件类型
		$this->allowExt = $allowExt;   //允许的扩展名
		$this->uploadPath = $uploadPath;  //存放路径
		// $this->fileInfo = $_FILES[$this->fileName];  //上传的文件信息
	}
	/**
	 * 检查上传是否发生错误
	 * @return boolean $this->error
	 */
	protected function checkError(){
		
		if ($this->fileInfo['error']>0) {
			switch ($this->fileInfo['error']) {
				case 1:
					$this->error = $this->fileInfo['name'].'大小超过php配置文件的upload_max_filesize值';
					break;
				case 2:
					$this->error = $this->fileInfo['name'].'大小超过表单限制的最大值';
					break;
				case 3:
					$this->error = '部分文件上传';
					break;
				case 4: 
					$this->error = '没有上传的文件';
					break;
				case 6:
					$this->error = '不存在临时目录';
					break;
				case 7:
					$this->error = '文件不可写';
					break;
				case 8:
					$this->error = '由于php的扩展程序中断文件上传';
					break;	
			}
			return false;
		}else{
			return true;
		}
	}
	/**
	 * 检查文件大小是否超过最大值
	 * @return boolean 
	 */
	protected function checkSize(){
		if($this->fileInfo['size'] > $this->maxSize){
			$this->error = '文件过大';
			return false;
		}else{
			return true;
		}
	}
	/**
	 * 检查上传文件的扩展名是否在允许的数组中
	 * @return boolean 
	 */
	protected function checkExt(){
		$this->ext = strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
		if (!in_array($this->ext,$this->allowExt)) {
			$this->error = $this->fileInfo['name'].'是非法文件';
			return false;
		}else{
			return true;
		}
	}
	/**
	 * 检查上传文件的类型
	 * @return boolean 
	 */
	protected function checkMime(){
		if (!in_array($this->fileInfo['type'],$this->allowMime)) {
			$this->error = $this->fileInfo['name'].'是非法文件类型';
			return false;
		}else{
			return true;
		}
	}
	/**
	 * 检查上传文件是否是真的图像
	 * @return boolean 
	 */
	protected function checkTrueImg(){
		if ($this->imgFlag) {
			if (!@getimagesize($this->fileInfo['tmp_name'])) {
				$this->error = $this->fileInfo['name'].'不是图像文件';
				return false;
			}else{
				return true;
			}
		}
	}
	/**
	 * 检查上传的文件是否是通过http post上传的
	 * @return boolean 
	 */
	protected function checkHTTPPost(){
		if (!is_uploaded_file($this->fileInfo['tmp_name'])) {
			$this->error = $this->fileInfo['name'].'不是通过http post 上传的文件';
			return false;
		}else{
			return true;
		}
	}
	protected function showError(){
		return $this->error;

	}
	/**
	 * 检查是否有存放的目录，若没有则创建
	 * @return [type] [description]
	 */
	protected function checkUploadPath(){
		if(!file_exists($this->uploadPath)){
			mkdir($this->uploadPath,0777,true);
		}
	}
	/**
	 * 得到一个唯一字符串
	 * @return [type] [description]
	 */
	protected function getUniName(){
		return md5(uniqid(microtime(true),true));
	}
/**
 * 上传文件
 * @return [type] [description]
 */
	public function uploadFile($fileInfo){
		$this->fileInfo = $fileInfo;
		if ($this->checkError()&&$this->checkSize()&&$this->checkExt()&&$this->checkMime()&&$this->checkTrueImg()&&$this->checkHTTPPost()) {
			$this->checkUploadPath();
			$this->uniName = $this->getUniName();
			$this->destination = $this->uploadPath.'/'.$this->uniName.'.'.$this->ext;
			//var_dump($this->destination);
			if (@move_uploaded_file($this->fileInfo['tmp_name'],$this->destination)) {
				return $this->destination;
			}else{
				$this->error = '文件移动失败';
				$error = $this->showError();
				return $error;
			}
		}else{
			$error = $this->showError();
			return $error;
		}
	}
}