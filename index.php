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
            <?php if ($_SESSION) {
                disp_elem();
            }
            else {
                disp_elem_without_session();
            }
            ?>
		</ul>
	</div>
</div>
</header>
<main>
</main>
<footer>
<div class="footer">
            <div class="footer1">
                <a href="https://github.com/remi-garguilo/module-connexion"><img class="socialMedia2"  src="css/img/GitHub-Logo.png"></a>
            </div>
            <div class="footer2">
                Copyright © 2021 Rémi. All Rights Reserved
            </div>
            <div class="footer3">
                <a href="https://twitter.com/"><img class="socialMedia"  src="css/img/Twitter.png"></a>
                <a href="https://facebook.com/"><img class="socialMedia" src="css/img/Facebook.png"></a>
                <a href="https://instagram.com/"><img class="socialMedia" src="css/img/Instagram.png"></a>
                <a href="https://youtube.com/"><img class="socialMedia" src="css/img/Youtube.png"></a>
            </div>
        </div>
</footer>
</body>
</html>