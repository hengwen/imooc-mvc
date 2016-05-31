<?php
	class verify{
		private $width = 80;
		private $height = 30;
		private $type = 1;
		private $length = 4;
		private $pixel=null;
		private $line = null;
		private $image;
		private $fontcolor;

		public function __construct($width,$height,$type,$length,$pixel,$line){
			$this->width = $width;   //验证码的宽度
			$this->height = $height;  //验证码的高度
			$this->type = $type;   	//验证码的类型
			$this->length = $length;  //验证码的个数
			$this->pixel = $pixel;   //干扰点
			$this->line = $line;     //干扰直线
		}
		/**
		 * 生成随机字符
		 * @param  int $type   1生成数字类型，2生成字母类型，3生成字母和数字类型(默认为1)
		 * @param  int $length 生成随机字符的长度
		 * @return string          返回$length长度$type类型的字符串
		 */
		private function buildRandomString() {
			if ($this->type == 1) {
				$chars = join ( "", range ( 0, 9 ) );
			} elseif ($this->type == 2) {
				$chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ) ) );
			} elseif ($this->type == 3) {
				$chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ), range ( 0, 9 ) ) );
			}
			if ($this->length > strlen ( $chars )) {
				exit ( "字符串长度不够" );
			}
			// 打乱字符串
			$chars = str_shuffle ( $chars );
			// 截取$length长度
			return substr( $chars, 0, $this->length );
		}
		/**
		 * 生成随机字符方法2
		 * @param  int $length 生成长度
		 * @return string         返回$length长度的字符串，类型为字母和数字
		 */
		private function buildRandomString1($length){
				$charsbox = "abcdefghijkmnpqrstuvwxy3456789";
				//打乱$charsbox
				$chars = str_shuffle($charsbox);
				//截取前$length位
				$chars = substr($chars, 0,$length);
				//使用for每次产生一个$charsbox中的随机字符，链接成$length长度的字符串
				/*
				for ($i=0; $i < $length; $i++) { 
					$chars.= substr($charsbox, rand(0,strlen($charsbox)),1);
				}*/
				return $chars;
		}
		/**
		 * 生成干扰点
		 */
		private function pixel(){
			//如果pixel存在则添加干扰点
			if($this->pixel){ 
				for ($i=0; $i < $this->pixel; $i++) {
					imagesetpixel($this->image, mt_rand(0,$this->width-1), mt_rand(0,$this->height-1), $this->fontcolor);
				}
			}
		}
		/**
		 * 添加干扰直线
		 */
		private function line(){
			//如果line存在则添加干扰直线
			if ($this->line) {
				for ($i=0; $i < $this->line; $i++) { 
					imageline($this->image, mt_rand(0,$this->width-1), mt_rand(0,$this->height-1), mt_rand(0,$this->width-1), mt_rand(0,$this->height-1), $this->fontcolor);
				}
			}
		}
		/**
		 * 制作验证码
		 */
		public function verifyImage(){
			//生成画布
			$this->image = imagecreatetruecolor($this->width, $this->height);
			//设置白色和黑色
			$white = imagecolorallocate($this->image, 255, 255, 255);
			$black = imagecolorallocate($this->image, 0, 0, 0);
			//使用白色填充画布，并留出边框个
			imagefilledrectangle($this->image, 1, 1, $this->width-2, $this->height-2, $white);
			//调用buildRandomString生成随机字符
			$this->chars = $this->buildRandomString($this->type,$this->length);
			//定义字体数组
			$fontfiles = array('SIMYOU.TTF');
			//定义字体颜色
			$this->fontcolor = imagecolorallocate($this->image, rand(120,200), rand(120,200), rand(120,200)); 
			//向画布中写字符
			for ($i=0; $i < $this->length; $i++) { 
				//字体大小
				$size = mt_rand(14,18);
				//字体旋转角度
				$angle = mt_rand(-15,15);
				//$x = 5 + $i*$size;
				//单个验证码横坐标
				$x = $i*$this->width/$this->length + 5;
				//单个验证码纵坐标
				$y = mt_rand(20,26);
				//验证码字体路径
				$path = dirname(dirname(dirname((dirname(__FILE__))))).'/fonts/';
				//随机字体
				$fontfile = $path.$fontfiles[mt_rand(0,count($fontfiles)-1)];
				//验证码颜色
				$color = imagecolorallocate($this->image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
				//截取第$i位的字符
				$text = substr($this->chars, $i,1);
				imagettftext($this->image, $size, $angle, $x, $y, $color, $fontfile, $text);
			}
			//调用生成干扰点和直线函数
			$this->pixel();
			$this->line();
			header("content-type:image/gif");
			imagegif($this->image);
			imagedestroy($this->image);
		}
		
	}
	

?>