<?php
session_start();
include("../SQL/mysql.php");
if(strcmp(isset($_SESSION["connecte"]) ? $_SESSION["connecte"] : "", "true")!=0){
    header("Location: ../connexion.php");
    exit();
}
/*$nbCours1 = isset($_COOKIE["nbCours1"]) ? $_COOKIE["nbCours1"]+1 : 1;
setcookie("nbCours1", strval($nbCours1));*/
$login = $_SESSION["login"];
$ip;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$con = getCon();
$res = select("SELECT * FROM Utilisateur WHERE login = '$login'", $con);   
$row = mysqli_fetch_array($res);
update("Utilisateur", "nbCours1", strval($row["nbCours1"]+1), "login = '$login'", $con);
update("Utilisateur", "ip", "'$ip'", "login = '$login'", $con);
finish($con);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Cours 1</title>
</head>
<body>
    <div>
        Login : <?=$login ?>
        <form method="post" action="../connexion.php">
            <input type="submit" value="Déconnexion"/>
        </form>
    </div>
    <br/>
    <h1>Cours 1 : Introduction à PHP</h1>
    A la fin de cette séquence, vous devez être capable de :
    <ul>
        <li>Décrire l'architecture d'un système de communication web</li>
        <li>Décoder une URL</li>
        <li>Caractériser le langage HTML et la structure d'une page web</li>
        <li>Comparer une page web statique avec une page web dynamique</li>
        <li>Classer les différentes technologies permettant l'interactivité dans le web</li>
        <li>Expliquer l'intégration de PHP dans le système Web</li>
    </ul>
    <br/>
    <button onclick="window.location.href='formation.php'">Retour</button>
</body>