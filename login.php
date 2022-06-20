<!DOCTYPE html>
<html>

<head>
  <title> heloo </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/styles.css" />
  <link rel="stylesheet" href="style/bootstrap.min.css">

  <link rel="stylesheet" href="style/styles.css" />
<style>
   @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-color: rgba(100,0,0,0.9);
  color: #fff;
  font-family: 'Muli', sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  margin: 0;
}

.container-av {
  background-color: rgba(0, 0, 0, 0.4);
  padding: 20px 40px;
  border-radius: 5px;
}

.container-av h1 {
  text-align: center;
  margin-bottom: 30px;
}


.btn1 {
  cursor: pointer;
  display: inline-block;
  width: 100%;
  background: lightblue;
  padding: 15px;
  font-family: inherit;
  font-size: 16px;
  border: 0;
  border-radius: 5px;
}

.btn1:focus {
  outline: 0;
}

.btn1:active {
  transform: scale(0.98);
}

.text {
  margin-top: 30px;
}

.form-control-av {
  position: relative;
  margin: 20px 0 40px;
  width: 300px;
}

.form-control-av input {
  background-color: transparent;
  border: 0;
  border-bottom: 2px #fff solid;
  display: block;
  width: 100%;
  padding: 15px 0;
  font-size: 18px;
  color: #fff;
}

.form-control-av input:focus,
.form-control-av input:valid {
  outline: 0;
  border-bottom-color: lightblue;
}

.form-control-av label {
  position: absolute;
  top: 15px;
  left: 0;
  pointer-events: none;
}

.form-control-av label span {
  display: inline-block;
  font-size: 18px;
  min-width: 5px;
  transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.form-control-av input:focus + label span,
.form-control-av input:valid + label span {
  color: lightblue;
  transform: translateY(-30px);
}

  </style>
</head>

<body>
  <?php
  require_once("./layout/nav-bar.php");
  ?>
  <?php


  $i = -1;
  $txt = "";
  if (isset($_POST["Connecter"])) {
    $database = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $database->query("select * from client where email='$username' and password='$password' ");
    $i = 0;
    while ($row = $result->fetch()) {
      $i++;
      $user = $row;
    }

    if ($i == 1) {
      // session_start();
      $_SESSION["id"] = $user["id"];
      $_SESSION["nom"] = $user["nom"];
      $_SESSION["prenom"] = $user["prenom"];
      $_SESSION["email"] = $user["email"];
      $_SESSION["adress"] = $user["adress"];
      $_SESSION["telephone"] = $user["telephone"];
      // $_SESSION["password"] = $user["password"];



      header("location: index.php");
    } else {
      header("location: login.php?");
    }
  }





  ?>






<!-- 
  <div id="contenair-form">

    <form action="" method="post">
      <label for="username">username </label>
      <input type="text" id="username" name="username" placeholder="Your name..">

      <label for="password">password</label>
      <input type="password" id="password" name="password" placeholder="Your last name..">
      
      <input type="submit" name="Connecter" value="login">
      <button class="btn1"> <a href="inscrit.php" style="text-decoration: none;">creé un compte</a></button>

    </form>

  </div> -->



      <div class="container-av">
      <h1> Login</h1>

      <form action="" method="POST">
        <div class="form-control-av">
          <input type="text"   name="username" required>
          <label>Email</label>
 
        </div>

        <div class="form-control-av">
          <input type="password"  name="password" required>
          <label>Password</label>
        </div>

        <input value="Login" name="Connecter" type="submit" class="btn-log"/>
              <button class="btn-log"> <a href="inscrit.php" style="text-decoration: none;">creé un compte</a></button>

      </form>

      
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/login.js"></script>

</body>

</html>