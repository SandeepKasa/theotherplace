<!DOCTYPE HTML>
<!--
	Parallelism by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php
		require 'simple_html_dom.php';
		$html = new simple_html_dom();
		$data = get_data("http://in.bookmyshow.com/hyderabad/movies/nowshowing");
		$html->load($data);
		$images = $html->find(".mlist img");	
		$links = $html->find(".mlist a");	
	?>

	<head>
		<title>The Other Place</title>
		<meta name="viewport" content="width=1200,user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/js/jquery.poptrox.min.js"></script>
		<script src="./assets/js/skel.min.js"></script>
		<script src="./assets/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="./assets/css/skel.css" />
			<link rel="stylesheet" href="./assets/css/style.css" />
			<link rel="stylesheet" href="./assets/css/style-desktop.css" />
			<link rel="stylesheet" href="./assets/css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<div id="wrapper">
			<div id="main">
				<div id="reel">

					<!-- Header Item -->
					
						<div id="header" class="item" data-width="400">
							<div class="inner">
								<h1>Can't Find Tickets?</h1>
								<p>But dying to see a movie?</p>
								<h3>OR</h3>
								<p class="no-margin">Badly want to attend a event?</p>
								<a class="login" href=""><p style="text-align: center; margin-top: 10px !important">Login</p></a>
								<a class="login" href=""><p class="no-margin" style="text-align: center">Register</p></a>
							</div>
						</div>
					
					<!-- Thumb Items -->
					<?php
						for ($i=1; $i < sizeof($links) - 35; $i++) { 
							if ($i % 4 == 1) {
								$links[$i]->href = "http://in.bookmyshow.com" . $links[$i]->href;
								echo '<article class="item thumb" data-width="200">
									<a href="'.$links[$i]->href.'"><img src="'.$images[$i/4]->src.'" alt="">
									<h2>'.$links[$i]->innertext.'</h2></a>
								</article>';
							}
						}
					?>
				</div>
			</div>
		
			<div id="footer">
				<div class="left">
					<p></p>
				</div>
				<div class="right">
					<ul class="contact">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; The Other Place</li><li><a href="/contact_us">Contact Us</a></li>
					</ul>
				</div>
			</div>

		</div>

	</body>
</html>