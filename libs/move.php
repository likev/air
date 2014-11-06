<?php

		
	$local_file = 'E:\\test.txt';
	$path = 'H:\\';
	//$path = 'I:\\xjdata\\FORECAST\\kqwr\\';
	//$path = 'E:\\Softs\\';
	
//**/	file_put_contents($local_file, $content);

	$cmd1 = 'copy C:\\test.txt \\\\172.18.172.63\\data_';
	echo '<br>'.$cmd1;
	echo '<br>'.system($cmd1);
	
	$cmd2 = 'copy '.$local_file.' '.$path;
	echo '<br>'.$cmd2;
	echo '<br>'.shell_exec($cmd2);
//	copy($local_file, $path . $local_file . '3');
//	rename($local_file, $path . $local_file .'4');

	
//	$size = file_put_contents($path . $local_file, $content);//$local_file
	
	if($size !== false ){
		echo '1';
	}else{
		echo '0';
	};

?>