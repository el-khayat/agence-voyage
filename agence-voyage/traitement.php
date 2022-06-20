<?php
session_start();

if (isset($_SESSION["id"])) {

    // header("location: profile.php");
} else {
    header("location: login.php");
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agence-voyage";


try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_GET['idVoyage'])) {
                // set the PDO error mode to exception

                $idClient  = $_SESSION['id'];
                $idVoyage = $_GET['idVoyage'];
                $dateReservation  = date("Y-m-d") ;
                $dateVoyage  = $_GET['dateVoyage'];

                $sql = "INSERT INTO reservation ( idClient, idVoyage,dateReservation,dateVoyage) VALUES ('$idClient', '$idVoyage','$dateReservation','$dateVoyage')";
                $conn->exec($sql);
                header('Location: profile.php');
        }


        if (isset($_GET['annuler'])) {
                $id = $_GET['annuler'];
                $conn->exec("delete  FROM reservation where idR=$id");
                header('Location: profile.php');
        }
} catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



?>