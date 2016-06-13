<?php
/**
 * 验证码
  */
 class Yzcode 
 {
	 public function index()
	 {

		//php制作验证码（图像制作函数=》gd2模块）
		//第一步：新建图像(画布)
		$w = 90;
		$h = 30;
		$img = imagecreatetruecolor($w,$h);  //$img图像

		#第二步：使用调色板调2个颜色（背景色、文字颜色）
		$bgcolor = imagecolorallocate($img,245,247,249);  //背景色（米白色） RGB
		$frameColor = imageColorAllocate($img, 150, 150, 150);	 //生成边框色

		#第三步：改图片背景颜色
		imagefilledrectangle($img,0,0,$w,$h,$bgcolor);

		#第四步：加文字
		//imagestring($img,5,10,5,'ABCD',$textcolor);
		$fsize = 20; //文字大小
		$font = './system/fonts/texb.ttf';
		for($j=1; $j<=4; $j++){
			$x = 6+20*($j-1);
			$y = mt_rand(20,30);
			$angle = mt_rand(-20,20);  //字偏移的角度
			$text_arr = Array('3','4','5','6','7','a','b','c','d','e','f','h','i','j','k','m','n','p','r','s','t','u','v','w','x','y','A','Z','H');
			shuffle($text_arr); //打乱数组的值
			$textcolor = imagecolorallocate($img,mt_rand(50, 200), mt_rand(50, 128), mt_rand(50, 200));//文字颜色

			$sess[$j-1] = $text_arr[0];
			imagettftext($img,$fsize,$angle,$x,$y,$textcolor,$font,$text_arr[0]);
		}
		$CI = &get_instance();
		$CI->session->set_userdata("code",implode('',$sess));  //记录验证码

		#第五步：干扰点
		for($i=1;$i<=50;$i++){
			$x = mt_rand(0,100);
			$y = mt_rand(0,70);
			$color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imagesetpixel($img,$x,$y,$color);
		}


		#第六步：干扰线
		for($k=1; $k<=5; $k++){
			$x1 = mt_rand(0,100);
			$y1 = mt_rand(0,70);
			$x2 = mt_rand(0,100);
			$y2 = mt_rand(0,70);
			$color2 = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imageline($img,$x1,$y1,$x2,$y2,$color2);
		}

		#给图像加边框
		imagerectangle($img,0,0,$w-1,$h-1,$frameColor);

		#输出图像
		header('Content-Type:image/png');
		imagepng($img);
		//imagejpeg()
		//imagegif()

		#释放资源（销毁图像）
		imagedestroy($img);
	}
 }
?>