<?php
session_start();
require ('functionsql.php');
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Change login</title>
    </head>
<body>
<header>
</header>
<main>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="login-form">
    <input type="text" id="login" name="newLogin" placeholder=" New login"/>
    <input class="button" type="submit" name='connect' value="Send"/>
    </form>
    <?php update_db_login();?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>