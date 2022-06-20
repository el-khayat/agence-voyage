<!DOCTYPE html>
<html>

<head>
  <title> heloo </title>
  <link rel="stylesheet" href="style/styles.css" />
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/styles.css" />
</head>

<body>

  <?php
  require_once("./layout/nav-bar.php")
  ?>
  <div class="h3">

    <h3> inscrit</h3>
  </div>

  <div id="contenair-form">
    <form action="" method="POST">

      <label for="nom">nom </label>
      <input type="text" id="nom" name="nom" placeholder="votre nom..">

      <label for="prenom">prenom </label>
      <input type="text" id="prenom" name="prenom" placeholder="votre prenom..">

      <label for="adress">adress </label>
      <input type="text" id="adress" name="adress" placeholder="votre adress..">


      <label for="telephone">telephone </label>
      <input type="text" id="telephone" name="telephone" placeholder="votre num..">

      <label for="email">email </label>
      <input type="text" id="email" name="email" placeholder="votre email..">

      <label for="password">password</label>
      <input type="password" id="password" name="password" placeholder="password..">



      <input type="submit" value="inscrit" name="inscrit">
    </form>
  </div>


  <?php


  if (isset($_POST["inscrit"])) {

    $database = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];

    $result = $database->query("INSERT INTO client VALUES (null,'$nom','$prenom','$adress','$email','$password','$telephone') ");



    header("location: login.php");
  }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>