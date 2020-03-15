<?php
session_start();
$login  = isset($_SESSION["login"])  ? $_SESSION["login"] : "";
$mdp    = isset($_SESSION["mdp"])    ? $_SESSION["mdp"]   : "";
if(strcmp($login, "admin")!=0 || strcmp($mdp, "admin")!=0){
    header("Location: connexion.php");
}else{
    $nbCours2 = isset($_COOKIE["nbCours2"]) ? $_COOKIE["nbCours2"]+1 : 1;
    setcookie("nbCours2", strval($nbCours2));
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Cours 2</title>
</head>
<body>
    <div>
        Login : <?=$login ?>
        <form method="post" action="connexion.php">
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