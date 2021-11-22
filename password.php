<?php
session_start();
require ('functionsql.php');
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Change Password</title>
    </head>
<body>
<header>
</header>
<main>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="login-form">
    <input type="password" id="newPassword" name="newPassword" placeholder=" New password"/>
    <input type="password" id="Confirmedpassword" name="Confirmedpassword" placeholder=" Confirmed New password"/>
    <input class="button" type="submit" name='connect' value="Send"/>
    </form>
    <?php update_db_password();?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>