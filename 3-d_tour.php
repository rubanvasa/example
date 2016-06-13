<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Услуги web-workshop</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<script type="text/javascript" src="modernizr-1.5.min.js">
		</script>
		<script type="text/javascript" src="p2q_embed_object.js">
		</script>
		<script type="text/javascript">
			// hide URL field on the iPhone/iPod touch
			function hideUrlBar() {
				if (((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)))) {
					container = document.getElementById("container");
					if (container) {
						var cheight;
						switch(window.innerHeight) {
							case 208:cheight=268; break; // landscape
							case 336:cheight=396; break; // portrait, in call status bar
							case 356:cheight=416; break; // portrait 
							default:
								cheight=window.innerHeight;
						}
						if ((container.offsetHeight!=cheight) || (window.innerHeight!=cheight)) {
							container.style.height=cheight + "px";
							setTimeout(function() { hideUrlBar(); }, 1000);
						}
					}
				}
				
				if (window.pageYOffset==0) {
					window.scrollTo(0, 1);
				
				}
			}
		</script>

</head>
<body>
<div class="layout">
	<a href="index.php">
		<div class="header">
			<div class="header_title">&nbsp</div>
		</div>
	</a>
		<div class="content_two">
		<div class="sidebar_left">
			<ul class="button">
				<li><h2 class="for_button">Услуги</h2></li>
					<ul>
						<a href=""><li>Сайты</li></a>
						<a href=""><li>Реклама</li></a>
						<a href=""><li>Анимация</li></a>
					</ul>
				<a href="clients.php"><li><h2 class="for_button">Портфолио</h2></li></a>
				<a href="contacts.php"><li><h2 class="for_button">Контакты</h2></li></a>
			</ul>
		</div>
			<div class="content">
				<div class="content_format">
					<h1>Услуги</h1>
				</div>
			<img src="images/robot.jpg" class="thumb">
				<div class="text">
					<br/>
					
		<script type="text/javascript" src="pano2vr_player.js">
		</script>
		<script type="text/javascript" src="skin.js">
		</script>
		<script type="text/javascript">
		if (DetectFlashVer(9,0,0)) {
			p2q_EmbedFlash('Park_01_out.swf',
				'50%', '50%',
				'bgcolor', '#f0f0f0',
				'play', 'true',
				'cache','true',
				'allowFullscreen','true',
				'autoplay','true'); 
			
		} else 
		// check for CSS3 3D transformations
		if (Modernizr.csstransforms3d) {
	
			// create panorama container 
			document.writeln('<div id="container" style="width:50%;height:50%;"></div>');
			// create the panorama player with the container
			pano=new pano2vrPlayer("container");
			// add the skin object
			skin=new pano2vrSkin(pano);
			// load the configuration
			pano.readConfigUrl("Park_01_out.xml");
			// hide the URL bar on the iPhone
			hideUrlBar();
		} else {  
			document.write('Требуется поддержка HTML5/CSS3 или Adobe Flash Player Version 9 или выше. ');
		}
		</script>
		<noscript>
			<p><b>Пожалуйста включите Javascript!</b></p>
		</noscript>
		<a href="" class="3dtour">Во весь экран</a>
		
				</div>
			</div>
		</div>
	<div class="footer">&nbsp</div>
</div>
</body>
<html>