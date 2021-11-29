<?php
//require_once('message.class.php');			//引入message.class.php

/**/
$filename = $_GET['filename'];				//获取提交的action值

if($filename)
{
	header('Content-type: image/png');
	$ftpUrl = 'ftp://dspddown:dspd1224@172.18.152.5/forecast/dqyb/kqwr-zdb/province/' . $filename;
	echo file_get_contents($ftpUrl);
}





?>