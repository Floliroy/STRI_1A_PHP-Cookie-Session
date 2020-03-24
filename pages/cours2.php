<?php
session_start();
include("../SQL/mysql.php");
if(strcmp(isset($_SESSION["connecte"]) ? $_SESSION["connecte"] : "", "true")!=0){
    header("Location: connexion.php");
    exit();
}
/*$nbCours2 = isset($_COOKIE["nbCours2"]) ? $_COOKIE["nbCours2"]+1 : 1;
setcookie("nbCours2", strval($nbCours2));*/
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
update("Utilisateur", "nbCours2", strval($row["nbCours2"]+1), "login = '$login'", $con);
update("Utilisateur", "ip", "'$ip'", "login = '$login'", $con);
finish($con);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Cours 2</title>
</head>
<body>
    <div>
        Login : <?=$login ?>
        <form method="post" action="../connexion.php">
            <input type="submit" value="Déconnexion"/>
        </form>
    </div>
    <br/>
    <h1>Cours 2 : Les données</h1>
    A la fin de cette séquence, vous devez être capable de :
    <ul>
        <li>Déclarer une variable</li>
        <li>Citer des variables prédéfinies</li>
        <li>Définir une constante</li>
        <li>Citer des constantes prédéfinies</li>
        <li>Lister les types simples</li>
        <li>Décrire les 3 façons de définir une chaîne</li>
        <li>Citer quelques fonctions sur les chaînes</li>
        <li>Tester et convertir des types de données</li>
        <li>Décrire comment déclarer et utiliser un tableau en PHP</li>
    </ul>
    <br/>
    <button onclick="window.location.href='formation.php'">Retour</button>
</body>