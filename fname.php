<?php
session_start();
require ('functionsql.php');
?>
<html >
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/inscription.css" />
        <title>Change first name</title>
    </head>
<body>
<header>
</header>
<main>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="login-form">
    <input type="text" id="newPrenom" name="newPrenom" placeholder=" New first name"/>
    <input class="button" type="submit" name='connect' value="Send"/>
    </form>
    <?php update_db_prenom();?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>