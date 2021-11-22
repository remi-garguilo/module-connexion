<?php
function update_db_login() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['login'])) {
        $newLogin= $_POST['login'];
        $login= $_SESSION['login'];
        $Confirmedlogin = $_POST['Confirmedlogin'];// IDEE BIZARRE
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE login='".$login."'");
        $count2= mysqli_num_rows($requete2);
        if($count2 == 1) {
            $Requete = mysqli_query($Bdd, "UPDATE utilisateurs SET login = '$newLogin' WHERE login='$login' ");
            // Faire une requete pour récuperer les nouveaux identifiant et les attribuer a la session afin
            // d'actualiser la session
            var_dump($newLogin);
            var_dump($login);
            $request = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login= ".$login."'");
            header('Location: profil.php');
         }
        else if ($login == NULL || $Confirmedlogin == NULL ) {
            echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
        }
        else  {
            if($count2 == 1) {
                echo'<p style="color:#FF0000";> <strong> This login is already use</strong></p>';
            }
        }
    }
    else {
        echo 'Please complete all fields';
    }
}
?>