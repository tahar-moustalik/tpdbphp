<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
 <h2>Forumulaire</h2>
 <form action="info.php" method="post" enctype="multipart/form-data">
  <div>
  <label for="nom">Nom:</label>
  <input type="text" name="nom" id="nom">
 </div>
 <div>
  <label for="prenom">Prenom:</label>
  <input type="text" name="prenom" id="prenom">
 </div>
 <div>
  <label for="login">Login:</label>
  <input type="text" name="login" id="login">
 </div>
 <div>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password">
 </div>
    <div>
    <label for="image">Image</label>
    <input type="file" name="image" id="image"></div>
    <div>
      <button type="submit">Envoyer</button>
    </div>
 </form>

</body>
</html>