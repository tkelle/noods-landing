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
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	<!-- Load in jQuery from CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- JS Parallax libraries -->
	<script src="js/jquery.parallax.js"></script>
	<script src="js/requestAnimationFrame.js"></script>
</head>
<body>
	<!-- BG container -->
	<div id="bgScene" class="bgContainer">
		<div class="randomBgImage">
			<img class="layer" data-depth="0.20" src="img/backgrounds/blurdot-red.png" alt="">
		</div>
		<div class="randomBgImage">
			<img class="layer bgImage--twistGrid" data-depth="0.40" src="img/backgrounds/gridwarp-grey.svg" alt="">
		</div>
		<div class="randomBgImage">
			<img class="layer bgImage--chain" data-depth="0.60" src="img/backgrounds/chain.svg" alt="">
		</div>
		<div class="randomBgImage">
			<img class="layer" data-depth="0.80" src="img/backgrounds/blurdot-blue.png" alt="">
		</div>
		<div class="randomBgImage">
			<img class="layer" data-depth="1.00" src="img/backgrounds/polkadots-blue.svg" alt="">
		</div>
	</div>
	<!-- BG container ends -->
	<!-- Background shader on mobile -->
	<div class="bgShader"></div>
	<!-- Background shader on mobile ends -->
	<!-- Mobile navigation trigger -->
	<div class="mobileNavTrigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<!-- Mobile navigation trigger ends -->
	<!-- Sidebar navigation -->
	<nav class="navContainer">
		<ul class="navList pure-u-1">
			<li class="navList__item">
				<a href="shows.php" class="navList__link">
					Shows
				</a>
			</li>
			<li class="navList__item">
				<a href="events.php" class="navList__link">
					Events
				</a>
			</li>
			<li class="navList__item">
				<a href="residents.php" class="navList__link">
					Residents
				</a>
			</li>
			<li class="navList__item">
				<a href="#" class="navList__link">
					Store
				</a>
			</li>
		</ul>
		<ul class="socialList">
			<li class="socialList__item">
				<a href="#" class="socialList__link">
					<img src="img/icons/social/facebook.svg" alt="Noods on Facebook">
				</a>
			</li>
			<li class="socialList__item">
				<a href="#" class="socialList__link">
					<img src="img/icons/social/twitter.svg" alt="Noods on Twitter">
				</a>
			</li>
			<li class="socialList__item">
				<a href="#" class="socialList__link">
					<img src="img/icons/social/instagram.svg" alt="Noods on Instagram">
				</a>
			</li>
		</ul>
	</nav>
	<!-- Sidebar navigation ends -->
	<!-- Floating logo -->
	<a href="index.php" class="floatingLogoContainer">
		<img src="img/logo.svg" alt="" class="floatingLogo">
	</a>
	<!-- Floating logo ends -->