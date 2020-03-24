
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    unset($_SESSION["login"]);
    unset($_SESSION["connecte"]);
}
$login = isset($_SESSION["login"]) ? $_SESSION["login"] : "";
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Connexion</title>
</head>
<body>
    <form method="post" action="pages/formation.php">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="login">Login : </label>
                    </td>
                    <td>
                        <input type="text" name="login" value="<?=$login ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mdp">Password : </label>
                    </td>
                    <td>
                        <!-- Here you can set type="password" to not show the input or "text" to show it -->
                        <input type="password" name="mdp"/>
                    </td>
                <tr>
                <tr colspan="2">
                    <td>
                        <input type="submit" value="Connexion"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>