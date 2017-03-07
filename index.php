<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noods Radio</title>
	<!-- Load CSS resets from CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
	<!-- Load in styles -->
	<link rel="stylesheet" href="styles/css/styles.css">
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="favicon.png"/>
	<!-- Load in jQuery from CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- JS Parallax libraries -->
	<script src="js/jquery.parallax.js"></script>
	<script src="js/requestAnimationFrame.js"></script>
</head>
<body>

	<!-- BG container -->
	<div class="backgroundContainer">
		<!-- Gradient circle -->
		<div class="gradientContainer">
			<div class="gradientColor"></div>
		</div>

		<!-- 3D Pane -->
		<div class="paneContainer">
		  <div class="paneOuter">
		    <div class="paneInner"></div>
		  </div>
		</div>

		<!-- Pyramid -->
		<div class="pyramidContainer">
		  <div class="pyramid">
		    <div class="triangle side-1"></div>
		    <div class="triangle side-2"></div>
		    <div class="triangle side-3"></div>
		    <div class="triangle side-4"></div>
		  </div>
		</div>
	</div>

	<!-- Content container -->
	<div class="contentContainer">
		<div class="logoContainer">
			<img src="img/logo.svg" alt="">
		</div>
		<div class="copyContainer">
			<p class="landingCopy">
				<span>
					The Noods website is currently undergoing a major overhaul.
				</span>
				<span>
					We will be back soon with a brand new look and feel.
				</span>
				<span>
					Meanwhile, enjoy the music as usual!
				</span>
				<span>
					— The Noods Crew
				</span>
			</p>
		</div>
		<div class="playerContainer">
			<div class="player__controlContainer player__controlContainer--play"></div>
			<div class="player__metadataContainer">
				<p class="player__title">
					Now playing
				</p>
				<p class="player__nowPlaying">
					Radio Cambrian Line Radio Cambrian Line Radio Cambrian Line
				</p>
			</div>
			<div class="player__controlContainer player__controlContainer--chat"></div>
		</div>
		<div class="socialLinksContainer">
			<a href="https://twitter.com/noodsradio" class="socialLink" target="_blank">Twitter</a>
			<a href="https://www.facebook.com/noodsradio" class="socialLink" target="_blank">Facebook</a>
			<a href="https://www.instagram.com/noodsradio" class="socialLink" target="_blank">Instagram</a>
			<a href="https://www.mixcloud.com/NoodsRadio/" class="socialLink" target="_blank">Mixcloud</a>
		</div>
	</div>
	<script src="js/scripts.js"></script>
</body>
</html>