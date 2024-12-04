<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>About | Dominic Sutcliffe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="All about Dominic Sutcliffe Web Developer" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
		media="print" onload="this.media='all'" />
	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
			rel="stylesheet" type="text/css" />
	</noscript>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
	<script src="script.js" defer></script>
</head>

<body onresize="burgerForceClose()">
	<?php include 'php/header.php'; ?>

	<main>
		<!-- container for splash img -->
		<div id="splash">
			<h1 id="type1">Dominic Sutcliffe</h1>
			<h2 id="type2">Learn About Me</h2>
			<h3><a href="#about-box">Scroll Down</a></h3>
			<span id="icn-down"></span>
			<picture>
				<source type="image/webp" media="(min-width: 1200px)" srcset="img/webp/large/splash.webp" />
				<source type="image/png" media="(min-width: 1200px)" srcset="img/png/large/splash.png" />
				<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/medium/splash.webp" />
				<source type="image/png" media="(min-width: 768px)" srcset="img/png/medium/splash.png" />
				<source type="image/webp" srcset="img/webp/small/splash.webp" />
				<img alt="stylish splash image" src="img/png/small/splash.png" width="1920px" height="1080px" />
			</picture>
		</div>
		<div id="about-box">
			<!-- container for personal image -->
			<div>
				<img src="img/headshot.png" height="300px" width="300px" class="headshot" alt="placeholder headshot" />
			</div>

			<!-- container for bio -->
			<div class="border-box">
				<h2>About Me</h2>
				<p>
					Hello! I'm Dominic and I'm a Web Developer working out
					of Norfolk, UK.
				</p>
				<p>
					In my free time I like to run, read books and play
					videogames.
				</p>
				<p>
					My journey as a Web Developer started when I joined
					Netmatters Scion Coalition Scheme. Since then I have
					learned skills in multiple languages and frameworks.
				</p>
			</div>

			<!-- container for skills -->
			<div class="border-box">
				<h2>Skills</h2>
				<ul>
					<li>
						Modern, responsive web design with HTML &amp; CSS
					</li>
					<li>Version control using Git</li>
					<li>Interactivity using JavaScript</li>
					<li>Backend development with PHP and C#</li>
					<li></li>
				</ul>
			</div>

			<!-- container for education history -->
			<div class="border-box">
				<h2>Education</h2>
				<ul>
					<li>Scion Coalition Scheme (6 months)</li>
					<li>CertHE Mathematics</li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>

		<!-- container for return -->
		<div id="return">
			<span id="icn-up"></span>
			<a href="#top">Back To Top</a>
		</div>
	</main>

	<?php include 'php/footer.php'; ?>
</body>

</html>