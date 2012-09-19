<html>
	<head>
		<title><?= isset($title) && $title != "" ? $title . " - " : "" ?>David Rhoderick</title>

		<link rel="stylesheet" type="text/css" href="/com.davidrhoderick.www/css/global.css" title="Default Styles" media="screen">		
		<link href="/com.davidrhoderick.www/css/jplayer.css" rel="stylesheet" type="text/css" />
		<link href="/com.davidrhoderick.www/skin/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<script type="text/javascript" src="/com.davidrhoderick.www/js/jquery.jplayer.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			
				$("#jp_latest_track").jPlayer({
			
					ready: function (event) {
			
						$(this).jPlayer("setMedia", {
							mp3: "http://www.davidrhoderick.com/com.davidrhoderick.www/audio/a_dusty_collection/01_out_of_order.mp3"
						});
			
					},
			
					swfPath: "../js",
			
					supplied: "mp3",
			
					wmode: "window"
			
				});
			
			});
		</script>
	</head>
	
	<body>
		<header>
			<div>
				<h1>David Rhoderick</h1>
				<hr />
				<nav>
					<a href="/">Home && About</a>
					<a href="/work">Work</a>
					<a href="/music">Music</a>
					<a href="/contact">Contact</a>
					<a href="http://www.davidrhoderick.tumblr.com">Blog</a>
				</nav>
			</div>
		</header>