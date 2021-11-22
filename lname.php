<?php
session_start();
require ('functionsql.php');
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Change last name</title>
    </head>
<body>
<header>
</header>
<main>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="login-form">
    <input type="text" id="newNom" name="newNom" placeholder=" New last name"/>
    <input class="button" type="submit" name='connect' value="Send"/>
    </form>
    <?php update_db_nom();?>
  </div>
</div>
</form>
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
                <a href="https://twitter.com/"><img class="socialMedia"  src="css/img/Twitter.png"></a>
                <a href="https://facebook.com/"><img class="socialMedia" src="css/img/Facebook.png"></a>
                <a href="https://instagram.com/"><img class="socialMedia" src="css/img/Instagram.png"></a>
                <a href="https://youtube.com/"><img class="socialMedia" src="css/img/Youtube.png"></a>
            </div>
        </div>
</footer>
</body>
</html>