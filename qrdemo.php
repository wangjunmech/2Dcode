<?php
require 'PHPQRCode.class.php';

$config = array( 
'ecc' => 'H',    // L-smallest, M, Q, H-best,码标的质量
'size' => 20,    // 1-50,1代表37*37像素，10代表370*370像素
'dest_file' => 'output/55.png',//创建的二维码路径(生成图片名称)
'quality' => 90, //图片质量,数值越大生成的图片占用空间越小
'logo' => 'output/logo2.jpg', //logo图片文件
'logo_size' => 160, //logo大小
'logo_outline_size' => 10, //logo外框，只适应方形
'logo_outline_color' => '#FF0000',  //logo外框颜色
'logo_radius' => 0, //控制圆角大小，数值为logo_size的一半时为圆形
'logo_opacity' => 100,
);

        // 'ecc' => 'H',                       // 二维码质量 L-smallest, M, Q, H-best
        // 'size' => 15,                       // 二维码尺寸 1-50
        // 'dest_file' => 'qrcode.png',        // 创建的二维码路径
        // 'quality' => 100,                    // 图片质量
        // 'logo' => '',                       // logo路径，为空表示没有logo
        // 'logo_size' => null,                // logo尺寸，null表示按二维码尺寸比例自动计算
        // 'logo_outline_size' => null,        // logo描边尺寸，null表示按logo尺寸按比例自动计算
        // 'logo_outline_color' => '#FFFFFF',  // logo描边颜色
        // 'logo_opacity' => 100,              // logo不透明度 0-100
        // 'logo_radius' => 0,                 // logo圆角角度 0-30
// 二维码内容
$data = 'http://weibo.com/fdipzone';
// 创建二维码类
$oPHPQRCode = new PHPQRCode();
// 设定配置
$oPHPQRCode->set_config($config);
// 创建二维码
$qrcode = $oPHPQRCode->generate($data);
// 显示二维码
echo '<img src="'.$qrcode.'?t='.time().'">';?>