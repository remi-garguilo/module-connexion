<?php
function check_pw() {
    if (isset($_POST['password']) && isset($_POST['Confirmedpassword'])) {
        if ($_POST['password'] != $_POST['Confirmedpassword']) {
            echo'<p style="color:#FF0000";> <strong> Your password and your Confirmed password is different, please try again</strong></p>';
            return 0;
        }
    }
}

function new_user() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])) {
        $login= $_POST['login'];
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $password = $_POST['password'];
        $Confirmedpassword = $_POST['Confirmedpassword'];
        if (check_pw() == 0) {
            $Requete = mysqli_query($Bdd, "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login','$prenom','$nom','$password')");
            header('Location: connexion.php');
            return 0;
            }
    }
}

function connect_db() {
    if (isset($_POST['connect'])) {
        $login = $_POST['login'];
        $pw= $_POST['password'];
        if ($login != NULL && $pw != NULL) {
            $bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
            mysqli_set_charset($bdd, 'utf8');
            $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login='".$login."' && password='".$pw."' ");
            $count= mysqli_num_rows($requete);
            if ($count == 1) {
                $_SESSION['login'] = $login;
                header('Location: profil.php');
            }
            else {
                return 1;
            }
        }
    }
}
function destroy_my_session() {
    if (isset($_GET["Deconnect"])){
        //header('Location: index.php');
        session_destroy();
    }
}

function disp_connect() {
    if(isset($_SESSION['login']) == NULL) {
        echo ('<ul class="slider-menu"><li><a href="connexion.php">Connexion</a></li></ul>');
    }
}
function user_param() {
    if (isset($_SESSION['login'])) {
        echo 'Welcome, '.$_SESSION['login'].' vous etes connecte';
        echo ('<form method="GET"><input type="submit" name="Deconnect" value="Deconnect"/></form>');
    }
    else {
        echo 'vous etes pas connecté';
    }
}
?>