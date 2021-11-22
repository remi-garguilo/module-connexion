<?php

session_start();
if ($_SESSION['user']['login'] && $_SESSION['user']['login'] != 'admin') {
    header('Location: profil.php');
}
require('functionsql.php');
destroy_my_session_admin();
$Bdd = mysqli_connect('localhost', 'root', 'root', 'moduleconnexion'); // Appeller la bdd
mysqli_set_charset($Bdd, 'utf8'); // Intégrer tous les char
$Requete = mysqli_query($Bdd, "SELECT * FROM utilisateurs"); // Déclarer la requête
$users = mysqli_fetch_all($Requete, MYSQLI_ASSOC);  // Récuperer ce que les requêtes renvoient
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/index.css" />
        <title>Administrator</title>
    </head>
<body>
<header>
<div class="containerHeader">
	<p class="lead">Welcome Administrator</p>
	<div class="header-bar">
		<h1 class="logo">
            <?php user_param() ?>
		</h1>
		<ul class="slider-menu">
            <?php disp(); ?>
		</ul>
	</div>
</div>
</header>
<main>
    <div class="containerAdmin">
        <table>
            <thead>
                <tr>
                    <th>login</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $User){
                    echo'<td>'.$User['login'].'</td>';
                    echo'<td>'.$User['password'].'</td><tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</footer>
</body>
</html>