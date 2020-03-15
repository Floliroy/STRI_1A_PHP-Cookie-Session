<?php
session_start();
$login  = isset($_SESSION["login"])  ? $_SESSION["login"] : "";
$mdp    = isset($_SESSION["mdp"])    ? $_SESSION["mdp"]   : "";
if(strcmp($login, "admin")!=0 || strcmp($mdp, "admin")!=0){
    header("Location: connexion.php");
}else{
    $nbCours1 = isset($_COOKIE["nbCours1"]) ? $_COOKIE["nbCours1"]+1 : 1;
    setcookie("nbCours1", strval($nbCours1));
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Cours 1</title>
</head>
<body>
    <div>
        Login : <?=$login ?> ; Mdp : <?=$mdp ?>
        <form method="post" action="connexion.php">
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