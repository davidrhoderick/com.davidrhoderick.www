<?php 
	error_reporting(0);
		
	$payload = json_decode(stripslashes(@$_POST['payload']));
	$message = print_r(@$payload,true);
	//$message .= shell_exec('/usr/bin/git pull');
	mail('broken.stairs@gmail.com','gihub post receive hook fired',$message);
	echo $message;
	exit;
/*
	try
	{
			// Decode the payload json string
			$payload = json_decode($_REQUEST['payload']);
	}
	catch(Exception $e)
	{
			exit;
	}

	// Pushed to master?
	if ($payload->ref === 'refs/heads/master')
	{
			echo "pushed to master?";
			// Log the payload object
			//@file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);

			// Prep the URL - replace https protocol with git protocol to prevent 'update-server-info' errors
			$url = str_replace('https://', 'git://', $payload->repository->url);

			// Run the build script as a background process
			`git pull`;
			
	}*/
?>