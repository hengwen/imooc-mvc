<?php

	/**
	 * 生成随机字符
	 * @param  int $type   1生成数字类型，2生成字母类型，3生成字母和数字类型(默认为1)
	 * @param  int $length 生成随机字符的长度
	 * @return string          返回$length长度$type类型的字符串
	 */
	function buildRandomString($type=1, $length=4) {
		if ($type == 1) {
			$chars = join ( "", range ( 0, 9 ) );
		} elseif ($type == 2) {
			$chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ) ) );
		} elseif ($type == 3) {
			$chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ), range ( 0, 9 ) ) );
		}
		if ($length > strlen ( $chars )) {
			exit ( "字符串长度不够" );
		}
		// 打乱字符串
		$chars = str_shuffle ( $chars );
		// 截取$length长度
		return substr( $chars, 0, $length );
	}


	/**
	 * 生成随机字符方法2
	 * @param  int $length 生成长度
	 * @return string         返回$length长度的字符串，类型为字母和数字
	 */
	function buildRandomString1($length){
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
	 * 制作验证码
	 * @param  int $type         
	 * @param  int $length       
	 * @param  int $pixel        
	 * @param  int $line         
	 * @param  string  $session_name 
	 * @return [type]                [description]
	 */
	function verifyImage($type=1,$length=4,$pixel=10,$line=5,$session_name = 'vertify'){

		
		//画布宽度和高度
		$width = 80;
		$height = 30;
		//生成画布
		$image = imagecreatetruecolor($width, $height);
		//设置白色和黑色
		$white = imagecolorallocate($image, 255, 255, 255);
		$black = imagecolorallocate($image, 0, 0, 0);
		//使用白色填充画布，并留出边框个
		imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
		//调用buildRandomString生成随机字符
		$chars = $this->buildRandomString($type,$length);
		//$chars = buildRandomString1($length);
		//将随机字符存储在session中
		$_SESSION[$session_name] = $chars;
		//定义字体数组
		$fontfiles = array('SIMYOU.TTF');
		//$pixel = 1;
		//添加干扰点
		$fontcolor = imagecolorallocate($image, rand(120,200), rand(120,200), rand(120,200)); 
		if($pixel){
			for ($i=0; $i < $pixel; $i++) {
				imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $fontcolor);
			}
		}
		//添加干扰直线
		//$line = 1;
		if ($line) {
			for ($i=0; $i < $line; $i++) { 
				imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1), mt_rand(0,$width-1), mt_rand(0,$height-1), $fontcolor);
			}
		}
		//向画布中写字符
		for ($i=0; $i < $length; $i++) { 
			$size = mt_rand(14,18);
			$angle = mt_rand(-15,15);
			//$x = 5 + $i*$size;
			$x = $i*80/4 + 5;
			$y = mt_rand(20,26);
			$fontfile = 'fonts/'.$fontfiles[mt_rand(0,count($fontfiles)-1)];
			$color = imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
			//截取第$i位的字符
			$text = substr($chars, $i,1);
			imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
			//imagestring($image, $size, $x, $y, $text, $color);
		}
		header("content-type:image/gif");
		imagegif($image);
		imagedestroy($image);
	}


	verifyImage(1,4,10,5);




?>