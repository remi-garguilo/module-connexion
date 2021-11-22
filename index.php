<?php
session_start();
require('functionsql.php');
destroy_my_session();
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
</main>
<footer>
<div class="footer">
            <div class="footer1">
                <a href="https://github.com/remi-garguilo/module-connexion"><img class="socialMedia2"  src="images/GitHub-Logo.png"></a>
            </div>
            <div class="footer2">
                Copyright © 2021 Rémi. All Rights Reserved
            </div>
            <div class="footer3">
                <a href="https://twitter.com/"><img class="socialMedia"  src="img/Twitter.png"></a>
                <a href="https://facebook.com/"><img class="socialMedia" src="img/Facebook.png"></a>
                <a href="https://instagram.com/"><img class="socialMedia" src="img/Instagram.png"></a>
                <a href="https://youtube.com/"><img class="socialMedia" src="img/Youtube.png"></a>
            </div>
        </div>
    </footer>
</footer>
</body>
</html>