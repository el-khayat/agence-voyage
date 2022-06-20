


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style/booking.css" />


</head>

<body>


    <!-- nav bar  -->
    <?php
    require_once("./layout/nav-bar.php")
    ?>
    <!--  -->
<?php
// session_start();
if ($isLogin == true) {

    // header("location: profile.php");
} else {
    header("location: login.php");
}

?>
    <div class="container-profile">
        <div class="left-cont">
            <div class="list">
                <div class="mes-voyage"> <img src="./img/ticket-de-bus.png" alt="" style="width: 30px;"> <span class="lien"> <a href="profile.php"> mes voyages </a></span> </div>
                <div class="mes-info"> <img src="./img/user.png" alt="" style="width: 30px;"> <span class="lien"><a href="profile_info.php"> mes Informations </a> </span></div>
            </div>
        </div>
        <div class="right-cont">
            <div class="top-sec">
                <div class="title"> mes Voyages</div>
            </div>
            <div class="bot-sec">


                <!--  -->

                <div class="container-voyages">


                    <?php


                    try {
                        $bdd = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');
                        $idclient = $_SESSION['id'];
                        $reponse = $bdd->query("SELECT * FROM reservation R,voyage V WHERE V.id = R.idVoyage AND R.idClient = $idclient");

                        $i = 0;
                        while ($donnees = $reponse->fetch()) {
                            ++$i;
                            echo "
                               <div class=\"date-day\"> date de voyage   : ". $donnees['dateVoyage'] ."</div>

									<div class=\"container-voyage\">
									
	
									<div  class=\"heurs\">
									<div> " . $donnees['heureDepart'] . "</div>
									<div> " . $donnees['heurArv'] . "</div>
									</div>
									
									<div  class=\"villes\">
									<div>" . $donnees['villeDepart'] . "</div>
									<div> " . $donnees['villeArrivee'] . "</div>
									</div>
									
									
	
                                    <div class=\"time\">
                                    <div>" . $donnees['nbrHeurs'] . "</div>
                                    </div>
                                    <div class=\"mentant\">
                                    <div>" . $donnees['tarif'] . "</div>
                                    </div>

                                    <div class=\"reserver-btn\">
                                    <button class=\"btn\"> confirmer </button>
                                    </div> 

                                    <div class=\"reserver-btn\">

                                    <a class=\"btn\" href=\"traitement.php?annuler=" . $donnees['idR'] . " \"
         class=\"btn btn-danger\">annuler</a>
      

                                    </div>

                                    </div>
                                    ";
                        }



                        if ($i < 1) {
                            echo " <div style=\"font-size: 35px;text-align: center;margin: 35px;\"> aucun voyage a été reservé</div>";
                        }
                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }

                    ?>



                    <!--  -->

                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>