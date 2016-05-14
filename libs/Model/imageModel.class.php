<?php
	class imageModel{

		private $info;   //图片的信息
		private $type;	// 图片的类型
		private $image;  //缓存中的图片，以及目标文件
		private $width;  //生成缩略图的图片宽度
		private $filename;   //生成缩略图的文件名
		private $cramping;  //生成的缩略图
		public function construct($src){
			$name = explode("/", $src);
			$this->filename = end($name);
			$img = getimagesize($src);
			$this->info = array(
				'width'=>$img[0],
				'height'=>$img[1],
				'type'=>$img[2],
				'mime'=>$img['mime']
				);
			$this->type = image_type_to_extension($this->info['type'],false);
			$fun = "imagecreatefrom".$this->type;
			$this->image = $fun($src);
		}
		/**
		 * 生成指定大小的缩略图
		 * @param  int $width  
		 * @param  int $height 
		 */
		public function cramping($width,$height){
			$this->width = $width;
			$cramping = imagecreatetruecolor($width, $height);
			imagecopyresampled($cramping, $this->image, 0, 0, 0, 0, $width, $height, $this->info['width'], $this->info['height']);
			//imagedestroy($this->image);
			$this->cramping = $cramping;
			$this->save();
			$this->destory($this->cramping);
		}
		/**
		 * 文字水印
		 * @param  string $fontfile 字体路径
		 * @param  int $fontsize 水印字体大小
		 * @param  int $angle    字体显示角度
		 * @param  string $content  水印内容
		 * @param  array $color    水印字的rgb值数组
		 * @param  int $alpha    水印字的透明度
		 * @param  array $location 水印字在图片上的位置
		 */
		public function fontMark($fontfile,$fontsize,$angle,$content,$color,$alpha,$location){
			//获得水印字的颜色
			$fontcolor = imagecolorallocatealpha($this->image, $color['r'], $color['g'], $color['b'], $alpha);
			imagettftext($this->image, $fontsize, $angle, $location['x'], $location['y'], $fontcolor, $fontfile, $content);

		}
		/**
		 * 图片水印
		 * @param  string $source   水印图片路径
		 * @param  array $location 水印在目标图片的位置
		 * @param  int $alpha    水印透明度
		 */
		public function imageMark($source,$location,$alpha){
			$info = getimagesize($source);
			$type = image_type_to_extension($info[2],false);
			$fun = "imagecreatefrom".$type;
			$water = $fun($source);
			imagecopymerge($this->image, $water, $location['x'], $location['y'], 0, 0, $info[0], $info[1], $alpha);
			imagedestroy($water);
		}
		/**
		 * 在浏览器中显示图片
		 */
		public function showBrowser(){
			header("Content-type:".$this->type);
			$func = "image".$this->type;
			$func($this->image);
		}
		/**
		 * 保存图片
		 */
		public function save(){
			$func = "image".$this->type;
			$path = "uploads/proImg/images".$this->width;
			if(!file_exists($path)){
				mkdir($path,0777,true);
			}
			$func($this->cramping,"uploads/proImg/images".$this->width."/".$this->filename);
		}
		/**
		 * 销毁指定图片图片资源
		 */
		public function destory($image){
			imagedestroy($image);
		}

		public function destoryImage(){
			imagedestroy($this->image);
		}


	}

?>