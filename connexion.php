<?php
session_start();
require ('functionsql.php');
connect_db();
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Inscription</title>
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
    <p class="message">Forgot your information? <a href="#">Click here</a></p>
    </form>
    <?php if (connect_db() == 1) {
      echo 'Please complete all fields.';
    }
    ;?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>