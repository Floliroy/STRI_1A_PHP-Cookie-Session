<?php
session_start();
$login  = isset($_SESSION["login"])  ? $_SESSION["login"] : "";
$mdp    = isset($_SESSION["mdp"])    ? $_SESSION["mdp"]   : "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login  = $_POST["login"];
    $mdp = $_POST["mdp"];
    $_SESSION["login"] = $login;
    $_SESSION["mdp"] = $mdp;
}

$nbCours1;
$nbCours2;
if(strcmp($login, "admin")!=0 || strcmp($mdp, "admin")!=0){
    header("Location: connexion.php");
}else{
    $nbCours1  = isset($_COOKIE["nbCours1"])  ? $_COOKIE["nbCours1"] : "0";
    $nbCours2  = isset($_COOKIE["nbCours2"])  ? $_COOKIE["nbCours2"] : "0";
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Formations</title>
</head>
<body>
    <div>
        Login : <?=$login ?>
        <form method="post" action="connexion.php">
            <input type="submit" value="Déconnexion"/>
        </form>
    </div>
    <br/>
    <h1>Formations</h1>
    <button onclick="window.location.href='cours1.php'">Aller au Cours 1</button>
    (Consulté <?=$nbCours1 ?> fois)
    <br/>
    <button onclick="window.location.href='cours2.php'">Aller au Cours 2</button>
    (Consulté <?=$nbCours2 ?> fois)
</body>