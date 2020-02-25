<?php

try {
    if (isset($_FILES['image']) && 0 == $_FILES['image']['error']) {
        if ($_FILES['image']['size'] <= 100000) {
            $infosfichier = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = ['png', 'jpeg', 'gif', 'jpg'];
            if (in_array($extension_upload, $extensions_autorisees)) {
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.basename($_FILES['image']['name']));
                echo "L'envoi a bien été effectué ";
            }
        }
    } else {
        echo 'image non envoye';
    }
    if (isset($_POST['nom'])) {
        echo '<b>nom</b> :'.$_POST['nom'].'<br/>';
    }
    if (isset($_POST['prenom'])) {
        echo '<b>prenom</b> :'.$_POST['prenom'].'<br/>';
    }
    if (isset($_POST['login'])) {
        echo '<b>login</b> :'.$_POST['login'].'<br/>';
    }
    /*
    $nom = @$_POST['nom'];
    $prenom = @$_POST['prenom'];
    $login = @$_POST['login'];
    $password = @$_POST['password'];
    require_once 'connexion.php';
    $db = $pdo->prepare('insert into users (nom,prenom,login,password)
      values (?,?,?,?)');
    $db->execute([
        $nom,
        $prenom,
        $login,
        md5($password),
    ]);

    echo 'Utilisateur ajoute avec success';
    */
} catch (\PDOException $ex) {
    echo "Erreur D'insertion";
}
