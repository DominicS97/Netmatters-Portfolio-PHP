<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SCS | Dominic Sutcliffe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Netmatters Scion Coalition Scheme description page" />
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
			<h2 id="type2">Learning to Code</h2>
			<h3><a href="#scs-box">Scroll Down</a></h3>
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
		<div id="scs-box">
			<div class="border-box">
				<h2>Introduction to the Scion Coalition Scheme</h2>
				<p>
					The Scion Coalition Scheme is an intensive, specially
					tailored training program run by Netmatters in order to
					give willing candidates the opportunity to enter the
					industry as web developers. Under the supervision of
					senior web developers, scions generally aim to complete
					training within six to nine months. The course is
					intensive and therefore the level of learning achieved
					is extensive in a short space of time.
				</p>
			</div>
			<div class="border-box">
				<h2>Treehouse</h2>
				<p>
					Treehouse is an online learning community, featuring
					videos covering a number of topics from basic HTML to C#
					programming, iOS development, data analysis, and more.
					By completing courses users can earn points, allowing
					them to track their progress and see how much they've
					covered in certain areas.
				</p>
				<h3>Total score:</h3>
				<a class="link" target="_blank" href="https://teamtreehouse.com/profiles/dominicsutcliffe3">14366</a>
			</div>
			<div class="border-box">
				<h2>About Netmatters</h2>
				<ul>
					<li>Established in 2008</li>
					<li>Norfolk's leading technology company</li>
					<li>Winner of the Princess Royal Training Award</li>
					<li>Winner of EDP Skills of Tomorrow Award</li>
					<li>80+ staff, 2 locations across Norfolk</li>
					<li>
						Digital Marketing, Website & Software development &
						IT Support
					</li>
					<li>Broad spectrum of clients, working nationwide</li>
					<li>Operate to strict company values</li>
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