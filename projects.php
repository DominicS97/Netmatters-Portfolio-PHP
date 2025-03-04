<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Projects | Dominic Sutcliffe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Dominic Sutcliffe Web Developer's online projects page" />
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
			<h2 id="type2">My Projects</h2>
			<h3><a href="#projects-detail">Scroll Down</a></h3>
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
		<div id="projects-detail">
			<div id="project-1">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-1.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-1.png" />
					<source type="image/webp" srcset="img/webp/medium/project-1.webp" />
					<img alt="screenshot of replica Netmatters homepage" src="img/png/medium/project-1.png" width="1920"
						height="1080" />
				</picture>
				<h2>Netmatters Homepage</h2>
				<p>
					I recreated the Netmatters Homepage using HTML, CSS and
					SCSS. This project was completed over two weeks. While
					working on this project I learned version control,
					deployment and planning skills.
				</p>
				<h3>
					<a class="link" target="_blank" href="https://netmatters.dominic97.dev/">View Demo</a><br />
					<a class="link" target="_blank"
						href="https://github.com/DominicS97/Netmatters-HTML-CSS-Assessment">View on GitHub</a>
				</h3>
			</div>

			<!-- <div id="project-2" class="hidden">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-2.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-2.png" />
					<source type="image/webp" srcset="img/webp/medium/project-2.webp" />
					<img alt="screenshot of current webpage" src="img/png/medium/project-2.png" width="1920"
						height="1080" />
				</picture>
				<h2>Portfolio</h2>
				<p>
					I created my own personal portfolio to display my web
					development skills. This project was completed in one
					week. Attempting this task allowed me to design my own
					website for the first time and learn to market my
					skills.
				</p>
				<h3>
					<a class="link" target="_blank" href="https://portfolio.dominic97.dev/">View
						Demo</a><br />
					<a class="link" target="_blank" href="https://github.com/DominicS97/Netmatters-Portfolio">View on
						GitHub</a>
				</h3>
			</div> -->

			<div id="project-3">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-3.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-3.png" />
					<source type="image/webp" srcset="img/webp/medium/project-3.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-3.png" width="1920"
						height="1080" />
				</picture>
				<h2>Management Dashboard</h2>
				<p>
					An employee and company management dashboard created in
					C# and React.js
				</p>
				<h3>
					<a class="link" target="_blank" href="https://github.com/DominicS97/Netmatters-MVC">View on
						GitHub</a>
				</h3>
			</div>

			<div id="project-4">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-4.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-4.png" />
					<source type="image/webp" srcset="img/webp/medium/project-4.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-4.png" width="1920"
						height="1080" />
				</picture>
				<h2>Javascript Pacman</h2>
				<p>
					A copy of the classic game Pacman recreated in
					Javascript.
				</p>
				<h3>
					<a class="link" target="_blank" href="https://github.com/DominicS97/JavaScript-Pacman">View on
						GitHub</a>
				</h3>
			</div>

			<!-- <div id="project-5" class="hidden">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-ex.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-ex.png" />
					<source type="image/webp" srcset="img/webp/medium/project-ex.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-ex.png" width="1920"
						height="1080" />
				</picture>
				<h2>TBA</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do eiusmod tempor incididunt ut labore et dolore
					magna aliqua. Viverra justo nec ultrices dui sapien eget
					mi proin sed. Et odio pellentesque diam volutpat commodo
					sed egestas.
				</p>
				<h3>
					<a class="link" target="_blank" href="https://github.com/DominicS97">View on GitHub</a>
				</h3>
			</div> -->

			<!-- <div id="project-6" class="hidden">
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/large/project-ex.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/large/project-ex.png" />
					<source type="image/webp" srcset="img/webp/medium/project-ex.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-ex.png" width="1920"
						height="1080" />
				</picture>
				<h2>TBA</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do eiusmod tempor incididunt ut labore et dolore
					magna aliqua. Viverra justo nec ultrices dui sapien eget
					mi proin sed. Et odio pellentesque diam volutpat commodo
					sed egestas.
				</p>
				<h3>
					<a class="link" target="_blank" href="https://github.com/DominicS97">View on GitHub</a>
				</h3>
			</div> -->
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