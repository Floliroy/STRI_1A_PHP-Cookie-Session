<?php
session_start();
include("../SQL/mysql.php");

$login = isset($_SESSION["login"]) ? $_SESSION["login"] : "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];

    $con = getCon();
    $res = select("SELECT * FROM Utilisateur WHERE login = '$login' AND mdp = '$mdp'", $con);
    if(mysqli_num_rows($res) != 0){
        $_SESSION["connecte"] = "true";

        $row = mysqli_fetch_array($res);
        $nbCours1 = $row["nbCours1"];
        $nbCours2 = $row["nbCours2"];
    }
    finish($con);
    $_SESSION["login"] = $login;
}

if(strcmp(isset($_SESSION["connecte"]) ? $_SESSION["connecte"] : "", "true")!=0){
    header("Location: connexion.php");
    exit();
}

$con = getCon();
$res = select("SELECT * FROM Utilisateur WHERE login = '$login'", $con);   
$row = mysqli_fetch_array($res);
$nbCours1 = $row["nbCours1"];
$nbCours2 = $row["nbCours2"];
finish($con);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Formations</title>
</head>
<body>
    <div>
        Login : <?=$login ?>
        <form method="post" action="../connexion.php">
            <input type="submit" value="Déconnexion"/>
        </form>
    </div>
    <br/>
    <h1>Formations</h1>
    <table>
        <tbody>
            <tr>
                <td>
                    <button onclick="window.location.href='cours1.php'">Aller au Cours 1</button>
                </td>
                <td>
                    (Consulté <?=$nbCours1 ?> fois)
                </td>
            <tr> 
            </tr>
                <td>
                    <button onclick="window.location.href='cours2.php'">Aller au Cours 2</button>
                </td>
                <td>
                    (Consulté <?=$nbCours2 ?> fois)
                </td>
            </tr>
        </tbody>
    </table>
</body>