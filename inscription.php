 <?php
 require('functionsql.php');

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
      <input type="text" id="prenom" name="prenom" placeholder="Prenom"/>
      <input type="text" id="nom" name="nom" placeholder="Nom"/>
      <input type="password" id="password" name="password" placeholder="Password"/>
      <input type="password" id="Confirmedpassword" name="Confirmedpassword" placeholder="Confirmed Password"/>
      <input class="button" type="submit" value="Login"/>
      <p class="message">Already registered ? <a href="connexion.php"><strong>Sign in</strong></a></p>
    </form>
    <?php new_user();; ?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>