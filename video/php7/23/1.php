<?php
//echo md5('admin888'.'6666');

//$file = 'use-1-info';
//echo md5($file).'.php';

//$view = 'template/admin/master.php';
//echo md5($view).'.php';

//$arr = (explode('.','hdcms.com'));
//echo $arr[0];
//$file = 'card.jpg';
//$arr =  explode('.',$file);
//print_r($arr);

//$arr = ['email','2300071698@qq.com'];
//echo implode(':',$arr);

//$file = 'user.jpg';
//echo substr($file,0,-4);
$ad = '大家可以在后盾人上免费学习各种系统课程，像目录我正在录制的PHP7';
echo mb_substr($ad,0,5,'utf-8');

