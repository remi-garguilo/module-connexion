<?php
session_start();
require ('functionsql.php');
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Connexion</title>
    </head>
<body>
<header>
</header>
<main>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="login-form">
    <input type="text" id="login" name="login" placeholder="Login"/>
    <input type="password" id="password" name="password" placeholder="Password"/>
    <input class="button" type="submit" name='connect' value="Login"/>
    <p class="message">You don't have an account ? <a href="inscription.php">Click here</a></p>
    </form>
    <?php connect_db();?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>