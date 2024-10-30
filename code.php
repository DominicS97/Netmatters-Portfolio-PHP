<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Code | Dominic Sutcliffe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Dominic Sutcliffe Web Developer's code examples" />
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
	<!-- target for return link -->
	<span id="top"></span>

	<header id="header">
		<!-- container for sidebar items -->
		<div id="container">
			<!-- logo -->
			<div>
				<a href="index.html" id="logo">
					<picture>
						<source type="image/webp" media="(min-width: 1200px)" srcset="img/webp/large/logo.webp" />
						<source type="image/png" media="(min-width: 1200px)" srcset="img/png/large/logo.png" />
						<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/medium/logo.webp" />
						<source type="image/png" media="(min-width: 768px)" srcset="img/png/medium/logo.png" />
						<source type="image/webp" srcset="img/webp/small/logo.webp" />
						<img alt="stylish logo" src="img/png/small/logo.png" width="400px" height="400px" />
					</picture>
				</a>
			</div>

			<!-- burger menu (xsmall only) -->
			<div>
				<button onclick="burgerToggle()">
					<a id="icn-burger" aria-label="View Navigation Menu"></a>
				</button>
			</div>

			<!-- content page links -->
			<div id="links">
				<ul>
					<li><a class="link" href="about.html">About Me</a></li>
					<li>
						<a class="link" href="projects.html">Projects</a>
					</li>
					<li>
						<a class="link" href="code.html">Code Snippets</a>
					</li>
					<li><a class="link" href="scs.html">SCS Scheme</a></li>
				</ul>
			</div>

			<div id="links2">
				<ul>
					<li><a class="link" href="about.html">About Me</a></li>
					<li>
						<a class="link" href="projects.html">Projects</a>
					</li>
					<li>
						<a class="link" href="code.html">Code Snippets</a>
					</li>
					<li><a class="link" href="scs.html">SCS Scheme</a></li>
				</ul>
			</div>

			<!-- subtitle -->
			<div>
				<h2>
					<a class="link" href="index.html#contact">Contact Me</a>
				</h2>
			</div>

			<!-- socials -->
			<div>
				<br />
				<a href="https://github.com/DominicS97" target="_blank" class="icn-github"
					aria-label="View GitHub page"></a>
				<p>a</p>
			</div>
		</div>
	</header>

	<main>
		<!-- container for splash img -->
		<div id="splash">
			<h1 id="type1">Dominic Sutcliffe</h1>
			<h2 id="type2">Web Developer</h2>
			<h3><a href="#code-box">Scroll Down</a></h3>
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
		<div class="border-box code-snippet" id="code-box">
			<div class="border-box">
				<pre>
					<code>
&lt;picture&gt;
&lt;source
type=&quot;image/webp&quot;
media=&quot;(min-width: 768px)&quot;
srcset=&quot;img/webp/small/project-1.webp&quot;
/&gt;
&lt;source
type=&quot;image/png&quot;
media=&quot;(min-width: 768px)&quot;
srcset=&quot;img/png/small/project-1.png&quot;
/&gt;
&lt;source
type=&quot;image/webp&quot;
srcset=&quot;img/webp/medium/project-1.webp&quot;
/&gt;
&lt;img
alt=&quot;screenshot of replica Netmatters homepage&quot;
src=&quot;img/png/medium/project-1.png&quot;
width=&quot;1440&quot;
height=&quot;810&quot;
/&gt;
&lt;/picture&gt;
					</code>
				</pre>
			</div>
			<h2>Cascading image sources</h2>
			<p>
				The above code is used to give multiple sources for a given
				image to maximise performance and usability at many
				different screen sizes and independent of if the user's
				browser supports the webP format.
			</p>
		</div>
		<!-- container for return -->
		<div id="return">
			<span id="icn-up"></span>
			<a href="#top">Back To Top</a>
		</div>
	</main>

	<footer>
		<div>
			<ul>
				<li>00000 000000</li>
				<li>fake.email@mail.com</li>
			</ul>
		</div>

		<!-- container for socials/info -->
		<div>
			<br />
			<a href="https://github.com/DominicS97" target="_blank" class="icn-github"
				aria-label="View GitHub page"></a>
			<br />
		</div>

		<!-- container for copyright -->
		<div>
			<p>&copy; Dominic Sutcliffe 2024</p>
		</div>
	</footer>
</body>

</html>