<?php 
	error_reporting(0);
		
	$payload = json_decode(stripslashes(@$_POST['payload']));
	$message = print_r(@$payload,true);
	$message .= shell_exec('/usr/bin/git pull');
	// Use the following lines to test or get info about the post receive hook
	// mail('broken.stairs@gmail.com','gihub post receive hook fired',$message);
	// echo $message;
	exit;
?>