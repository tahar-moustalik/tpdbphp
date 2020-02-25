<?php

try {
    $dsn = 'mysql:host=localhost;dbname=dbtp';
    $user = 'root';
    $passwd = '';
    $pdo = new \PDO($dsn, $user, $passwd);

    $db = $pdo->prepare('insert into users (nom,prenom,login,password)
      values (?,?,?,?)');
    /*
      $db->execute([
          'Tahar',
          'Moustalik',
          't.moustalik',
          md5('1234'),
      ]);
      */

    /*
    $del = $pdo->prepare('delete from users where id=? limit 1');
    $del->execute([1]);
    */
/*
    $select = $pdo->prepare('select * from users');
    $select->execute();

    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        echo '<strong> Nom</strong> : '.$row['nom'].
         ' ; <strong> Prenom</strong> : '.$row['prenom'].
         ' ; <strong> Login</strong> : '.$row['login'].'<br/>'
         ;
    }
    */
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
