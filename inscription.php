 <?php
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])) {
        $login= $_POST['login'];
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $password = $_POST['password'];
        $Confirmedpassword = $_POST['Confirmedpassword'];
        if ($password == $Confirmedpassword) {
            $Requete = mysqli_query($Bdd, "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login','$prenom','$nom','$password')");
            header('Location: connexion.php');
            }
    }
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
    <?php
    if (isset($_POST['password']) && isset($_POST['Confirmedpassword'])) {
        if ($_POST['password'] != $_POST['Confirmedpassword']) {
            echo'<p style="color:#FF0000";> <strong> Your password and your Confirmed password is different, please try again</strong></p>';
        }
    }
    ?>
  </div>
</div>
</form>
</main>
</footer>
</body>
</html>