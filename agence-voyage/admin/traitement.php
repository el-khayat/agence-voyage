<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agence-voyage";



// 
if (isset($_POST['passwordAdmin']) && isset($_POST['emaildAdmin'])) {
        echo "heloo";
        $password = $_POST['passwordAdmin'];
        $email = $_POST['emaildAdmin'];
        if ($password == 'admin' && $email == 'admin') {
                header('Location: dashboard.php');
        } else {

                header('Location: login.php');
        }
}


try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_POST['submit'])) {
                // set the PDO error mode to exception

                $villeDepart  = $_POST['villeDepart'];
                $villeArrivee = $_POST['villeArrivee'];
                $heureDepart  = $_POST['heureDepart'];
                $heureArv  = $_POST['heureArv'];
                $nbrheurs     = $_POST['nbrheurs'];
                $tarif     = $_POST['tarif'];

                $sql = "INSERT INTO voyage ( villeDepart, villeArrivee,heureDepart,heurArv,nbrHeurs,tarif)
                    VALUES ('$villeDepart', '$villeArrivee', '$heureDepart','$heureArv','$nbrheurs','$tarif dh')";
                $conn->exec($sql);
                header('Location: dashboard.php');
        }


        if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                $conn->exec("delete  FROM voyage where id=$id");
                header('Location: dashboard.php');
        }
} catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
