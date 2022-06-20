

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

if (isset($_SESSION["id"])) {
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
                <div class="title"> mes informations</div>
            </div>
            <div class="bot-sec-info">


                <!--   information user   -->
                nom : <span class="value"> <?php echo $_SESSION['nom']; ?></span> <br />
                prenom : <span class="value"> <?php echo $_SESSION['prenom']; ?></span> <br />
                ville : <span class="value"> <?php echo $_SESSION['adress']; ?></span> <br />
                email : <span class="value"> <?php echo $_SESSION['email']; ?></span> <br />
                telephone : <span class="value"> <?php echo $_SESSION['telephone']; ?></span> <br />

                <!--  -->

            </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>