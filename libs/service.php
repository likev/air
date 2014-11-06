<?php
//require_once('message.class.php');			//引入message.class.php

function putFtp($content, $remote_file)
{
	$local_file = 'local.txt';
	$size = file_put_contents($local_file, $content);//$local_file
	
	$ftp_server = '172.18.152.41';
	$ftp_user_name = 'pro-city';
	$ftp_user_pass = 'countybezz';
	$ftp_path = '/';

	// set up basic connection
	if(!($conn_id = ftp_connect($ftp_server, 21, 10)) ) return false;
	
	if(!ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) ) return false;
	
	ftp_chdir($conn_id, $ftp_path);

	// upload a file
	$result = ftp_put($conn_id, $remote_file, $local_file, FTP_BINARY);

	// close the connection
	ftp_close($conn_id);
	
	return $result;

}

/**/
$action = $_POST['action'];				//获取提交的action值

if($action == 'upload')
{
	$content = iconv("UTF-8", "GB2312", $_POST['content'] );
		
	$local_file = $_POST['filename'];
	$path = '//172.18.172.63/data_/xjdata/FORECAST/kqwr/';
	
	$size = file_put_contents($path . $local_file, $content);//$local_file
	
	$ftpUrl = 'ftp://pro-city:countybezz@172.18.152.41/';
	$ftpsize = file_put_contents($ftpUrl . $local_file, $content);//$local_file
	
	if($size !== false ){//本地服务器创建文件成功
		if($ftpsize !== false ){//ftp产品库服务器创建文件成功
			echo '1';
		}else{
			echo '2';
		}
	}else{
		echo '0';
	};
}
else
{
	//echo json_encode(EditCZB::getZdb());
}





?>