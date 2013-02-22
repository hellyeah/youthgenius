<?php

	//setting the iPhone / iPod browser variables
	$ipod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iphone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");

	//detecting device browser
	if ($ipod == true || $iphone == true){
	header( 'Location: http://tflig.ht/yCLQD7' ) ;
	}
?>
<html>
	<head>
		<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
		<title>Playbook</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/text.css" />
		<link rel="stylesheet" type="text/css" href="css/960.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.8.min.js"></script>		
		<script type="text/javascript" src="js/vote.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<meta property="og:title" content="The Playbook"/>
		<link rel="shortcut icon" href="http://www.lincolnstationers.com/images/LittleBlackBook.jpg" type="image/x-icon">
		<link rel="shortcut icon" href="http://www.lincolnstationers.com/images/LittleBlackBook.jpg" type="image/vnd.microsoft.icon">
		<meta property="og:url" content="http://theplaybookapp.com"/>
		<meta property="og:description" content="Keep track of your hookups and share them with your bros"/>
		<meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsB1uhh9tupLzRXFtiO3IbRecjZVSjBHjWDvo1yAcpWUMaRgo36Q" />
		<script type="text/javascript">
				//$.fn.cycle.defaults.speed   = 900;
				//$.fn.cycle.defaults.timeout = 6000;

				$(function() {
				    // run the code in the markup!
				    $('#screenshots').cycle({
				    	fx: 'fade',
				    	speed: 2500,
				    	pause: 1
				    });
				});
		</script>

	</head>

	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=204060336365834";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container">
			<div class="box">
				<h1>Playbook</h1>
				<h2>Share your romantic encounters with your closest friends</h2>
				<p>Enter your email to take your first swing.</p>
				<form class="form-wrapper">
					<input name="form" class="form" placeholder="heff@playboy.com"/>
					<button type="submit" class="submit">Join the club</button>
				</form>
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style " style="margin:0 auto;margin-top:20px;width:155px;">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet" style="width:69px;"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50552bd1589c29ce"></script>
				<!-- AddThis Button END -->
				<div id="screenshots">
					<img src = "images/playbook-login.jpg">
					<img src = "images/playbook-play.jpg">
					<img src = "images/playbook-stream.jpg">
					<img src = "images/playbook-stream2.png">
				</div>

<!--				<div class="fb-like" data-href="http://pleasevotetoday.com" data-send="false" data-width="20" data-show-faces="false" data-colorscheme="dark" style="margin:0 auto;margin-top:30px;display:block;"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->
			</div>
		</div>
	<script type="text/javascript">
	  var _sf_async_config = { uid: 38570, domain: 'pleasevotetoday.com' };
	  (function() {
	    function loadChartbeat() {
	      window._sf_endpt = (new Date()).getTime();
	      var e = document.createElement('script');
	      e.setAttribute('language', 'javascript');
	      e.setAttribute('type', 'text/javascript');
	      e.setAttribute('src',
	        (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
	        "js/chartbeat.js");
	      document.body.appendChild(e);
	    };
	    var oldonload = window.onload;
	    window.onload = (typeof window.onload != 'function') ?
	      loadChartbeat : function() { oldonload(); loadChartbeat(); };
	  })();
	</script>
	
	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-18115656-20']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>

	
	</body>
</html>