
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    unset($_SESSION["login"]);
    unset($_SESSION["mdp"]);
}
$login  = isset($_SESSION["login"])  ? $_SESSION["login"] : "";
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Connexion</title>
</head>
<body>
    <form method="post" action="formation.php">
        <label for="login">Login : </label>
        <input type="text" name="login" value="<?=$login ?>"/>
        <br/>
        <label for="mdp">Password : </label>
        <!-- Here you can set type="password" to not show the input or "text" to show it -->
        <input type="password" name="mdp"/>
        <br/>
        <input type="submit" value="Connexion"/>
    </form>
</body>