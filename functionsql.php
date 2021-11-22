<?php

function new_user() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])) {
        $login= $_POST['login'];
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $password = $_POST['password'];
        $Confirmedpassword = $_POST['Confirmedpassword'];
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE login='".$login."'");
        $count2= mysqli_num_rows($requete2);
        $pw_hash = password_hash($password, PASSWORD_DEFAULT);
        if($count2 == 1) {
            echo'<p style="color:#FF0000";> <strong> This login is already use</strong></p>';
        }
        else if ($login == NULL || $prenom == NULL || $nom == NULL || $password == NULL ) {
            echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
        }
        else  {
            $Requete = mysqli_query($Bdd, "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login','$prenom','$nom','$pw_hash')");
            header('Location: connexion.php');
        }
    }
    else {
        echo 'Please complete all fields';
    }
}

function connect_db() {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $pw= $_POST['password'];
        if ($login != NULL && $pw != NULL) {
            $bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
            mysqli_set_charset($bdd, 'utf8');
            $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login='$login' ");
            $count= mysqli_num_rows($requete);
            $fetch= mysqli_fetch_assoc($requete);
            if (isset($fetch)) {
                
                $sql_password= $fetch['password'];
            }
            else {
                echo 'rerror';
            }
            var_dump($fetch);
            if ($count == 1) {
                if (password_verify($pw, $sql_password) == FALSE) {
                    echo 'Le mot de passe est invalide.';
                }
                else {
                header('Location: profil.php');
                $_SESSION['user'] = $fetch;
                }
            }
        }
        else {
                echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
            }
        }
}


function update_db_login(){
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['newLogin'])) {
        $newLogin= $_POST['newLogin'];
        $login= $_SESSION['user']['login'];
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE login='".$login."'");
        $count2= mysqli_num_rows($requete2);
        if($count2 == 1) {
            $Requete = mysqli_query($Bdd, "UPDATE utilisateurs SET login = '$newLogin' WHERE login='$login' ");
            $request = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE login= '$newLogin'");
            $fetch= mysqli_fetch_all($request);
            $_SESSION['user']['id'] = $fetch[0][0];
            $_SESSION['user']['login'] = $fetch[0][1];
            $_SESSION['user']['prenom'] = $fetch[0][2];
            $_SESSION['user']['nom'] = $fetch[0][3];
            $_SESSION['user']['password'] = $fetch[0][4];
            header('Location: profil.php');
        }
        else if ($login == NULL) {
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

function update_db_prenom() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['newPrenom'])) {
        $newPw= $_POST['newPrenom'];
        $pw = $_SESSION['user']['prenom'];
        $id= $_SESSION['user']['id'];
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE id='$id' ");
        $Requete = mysqli_query($Bdd, "UPDATE utilisateurs SET prenom = '$newPw' WHERE id='$id' ");
        $request = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE id='$id'");
        $fetch= mysqli_fetch_assoc($request);
        $_SESSION['user'] = $fetch;
        header('Location: profil.php');
        if ($pw == NULL) {
            echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
        }
    }
    else {
        echo 'Please complete all fields';
    }
}

function update_db_nom() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['newNom'])) {
        $newPw= $_POST['newNom'];
        $pw = $_SESSION['user']['nom'];
        $id= $_SESSION['user']['id'];
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE id='$id' ");
        $Requete = mysqli_query($Bdd, "UPDATE utilisateurs SET nom = '$newPw' WHERE id='$id' ");
        $request = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE id='$id'");
        $fetch= mysqli_fetch_assoc($request);
        $_SESSION['user'] = $fetch;
        header('Location: profil.php');
        if ($pw == NULL || $Confirmedpw == NULL ) {
            echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
        }
    }
    else {
        echo 'Please complete all fields';
    }
}

function update_db_password() {
    $Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion');
    mysqli_set_charset($Bdd, 'utf8');
    if (isset($_POST['newPassword'])) {
        $newPw= $_POST['newPassword'];
        $pw = $_SESSION['user']['password'];
        $pw_hash = password_hash($newPw, PASSWORD_DEFAULT);
        $Confirmedpw = $_POST['Confirmedpassword'];
        $id= $_SESSION['user']['id'];
        $requete2 = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE password='$pw' ");
        $Requete = mysqli_query($Bdd, "UPDATE utilisateurs SET password = '$pw_hash' WHERE id='$id' ");
        header('Location: profil.php');
        if ($pw == NULL || $Confirmedpw == NULL ) {
            echo'<p style="color:#FF0000";> <strong> You have an empty fields</strong></p>';
        }
    }
    else {
        echo 'Please complete all fields';
    }
}

function destroy_my_session() {
    if (isset($_POST["Deconnect"])){
        session_destroy();
        header('Location: index.php');
    }
}
function destroy_my_session_admin() {
    if (isset($_POST["Deconnect"])){
        session_destroy();
        header('Location: index.php');
    }
}
function user_param() {
    if (isset($_SESSION['user'])) {
        echo 'Welcome, '.$_SESSION['user']['login'].' you are connected';
        echo ('<form method="POST"><input type="submit" name="Deconnect" value="Disconnect"/></form>');
    }
    else {
        echo 'You are disconnected';
    }
}

function disp() {
    if(isset($_SESSION['user']['login']) && $_SESSION['user']['login'] == 'admin') {
        echo ('<ul class="slider-menu"><li><a href="admin.php">Admin</a></li></ul>');
    }
    else if(isset($_SESSION['user']['login']) && isset($_SESSION['user']['login']) == NULL) {
        echo ('<ul class="slider-menu"><li><a href="connexion.php">Connexion</a></li></ul>');
    }
}
?>