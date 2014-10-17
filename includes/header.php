<?php
if (empty($title)) {
	$title = 'Accueil';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
		<title><?php echo $title; ?> | ISN</title>
		<link rel="icon" type="image/x-icon" href="static/img/icon_64.png" />
		<link rel="stylesheet" type="text/css" href="static/css/style.css" />
		<link rel="stylesheet" type="text/css" href="static/css/responsive.css" />
	</head>
	<body>
		<div class="site-pusher">
			<header class="header">
				<a id="header__icon" class="header__icon" href="#"></a>
				<a class="header__logo" href="/isn"><img src="static/img/icon_64.png" alt="Logo" /></a>

				<nav class="menu">
					<a href="index.php">Accueil</a>
					<a href="curriculum-vitae.php">Curriculum vitae</a>
					<a href="projet.php">Projet</a>
				</nav>
			</header>

			<div class="site-content">
				<div class="container">