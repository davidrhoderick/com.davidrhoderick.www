<html>
<head>
	<title><?= isset($title) && $title != "" ? $title . " - " : "" ?>David poopoopants</title>
	
	<meta name="author" content="David Rhoderick" />
	<meta name="distribution" content="global" />
	<meta name="robots" content="index, follow" />
	
	<? 
		// Dynamic Meta Tags
		$this->load->helper('html');
		$this->load->helper('url');
		
		if(isset($meta_description)) {
			echo meta($meta_description);
		} else {
			echo meta(array('name' => 'description', 'content' => 'An artist focusing on sometimes interactive multimedia in both analog and digital electronics'));
		}
		
		if(isset($meta_keywords)) {
			echo meta($meta_keywords);
		} else {
			echo meta(array('name' => 'keywords', 'content' => 'David Rhoderick, art, music, video, interactive, multimedia, digital, analog, electronics'));
		}
	 ?>
		
	<? if(isset($meta_facebook_image)): ?>
			<meta property="og:image" content="<?= base_url() . $meta_facebook_image ?>" />
	<? else: ?>
		    <meta property="og:image" content="<?= base_url() ?>images/david_rhoderick_logo.gif" />
	 <? endif ?>
	 
	 <? if(isset($meta_facebook_admins)): ?>
	 		<meta property="fb:admins" content="<?= $meta_facebook_admins ?>" />
	 <? endif ?>
	 
	 <? if(isset($meta_facebook_type)): ?>
	 		<meta property="og:type" content="<?= $meta_facebook_type ?>" />
	 <? endif ?>
	
	<meta property="og:title" content="<?= isset($title) ? $title . " - " : "" ?>David Rhoderick" />
    <meta property="og:url" content="<?= current_url() ?>" />
	<meta property="og:site_name" content="David Rhoderick" />
	<meta property="og:description" content="<?= isset($meta_description['content']) ? $meta_description['content'] : "An artist focusing on sometimes interactive multimedia in both analog and digital electronics" ?>" />
	
	
	<link href="/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="/css/global.css" rel="stylesheet" type="text/css" />
	<link href="/css/promo.css" rel="stylesheet" type="text/css" />
	<link href="/css/books.css" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="/images/favicon.ico" /> 

	<script type="text/javascript" src="http://use.typekit.com/iyi5bun.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/slides.min.jquery.js"></script>
	
	<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24423538-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>

<body class="<?= $this->router->fetch_class() ?><?= isset($title) ? ' '.str_replace(" ", "_", strip_tags(strtolower($title))) : '' ?>">
	
	<header class="main">
		<div class="frame cfx">
			<h1><a href="/" class="logo">David Rhoderick</a></h1>
			<nav>
				<a href="/">Home/About</a>
				<a href="/books">Pieces</a>
				<a href="/about">Contact</a>
				<!-- <a class="social_icon" target="_blank" href="http://www.facebook.com/pages/Open-Air-Publishing/156086657797116" title="Friend Open Air Publishing on Facebook"><img src="/images/icon_facebook_24.gif" alt="Friend Open Air Publishing on Facebook" /></a>
				<a class="social_icon" target="_blank" href="http://www.twitter.com/openairbooks" title="Follow Open Air Publishing on Twitter"><img src="/images/icon_twitter_24.gif" alt="Follow Open Air Publishing on Twitter" /></a>
				<a class="social_icon" target="_blank" href="http://pinterest.com/openairpub/" title="Follow Open Air Publishing on Pinterest"><img src="/images/icon_pinterest_24.gif" alt="Follow Open Air Publishing on Pinterest" /></a>
				<a class="social_icon" href="/subscribe" title="Subscribe to the Open Air Publishing Newsletter"><img src="/images/icon_email_24.gif" alt="Subscribe to the Open Air Publishing Newsletter" /></a> -->
				
				
			</nav>
		</div>
	</header>