<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        //$nom = $_SESSION['nom'];
        //$prenom = $_SESSION['prenom'];
       $prenom = $_COOKIE['prenom'];
        echo "Bonjour {$prenom}";
        ?>
    </p>
</body>
</html>