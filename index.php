<?php
session_start();
require('functionsql.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/index.css" />
        <title>Acceuil</title>
    </head>
<body>
<header>
<div class="containerHeader">
	<p class="lead">Welcome to my site</p>
	<div class="header-bar">
		<h1 class="logo">
            <?php user_param() ?>
		</h1>
		<ul class="slider-menu">
			<li><a href="connexion.php">Connexion</a></li>
			<li><a href="inscription.php">Inscription</a></li>
		</ul>
	</div>
</div>
</header>
<main>
    <div  class="container">
        <div class = "containTop">
            <div class="containCenterOfTop">
            <div></div>
            <div></div>
            <div></div>
            </div>
        </div>
    </div>
</main>
</footer>
</body>
</html>