<?php
include("SQL/mysql.php");
$con = getCon();
$res = select("SELECT * FROM Utilisateur", $con);  
finish($con);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>
    <title>Rapport</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Utilisateur | </th>
                <th>Adresse IP | </th>
                <th>Accés Cours 1 | </th>
                <th>Accés Cours 2</th>
            </tr>
        </thead>
        <tbody>
<?php
            for($i=0 ; $i<mysqli_num_rows($res) ; $i++){
                $row = mysqli_fetch_array($res);
?>
                <tr>
                    <td><?=$row["login"] ?></td>
                    <td><?=$row["ip"] ?></td>
                    <td><?=$row["nbCours1"] ?></td>
                    <td><?=$row["nbCours2"] ?></td>
                </tr>
<?php
            }
?>
        </tbody>
    </table>
</body>