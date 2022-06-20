

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="logo" class="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-right:  !important;margin-left: auto;">





                <li class="nav-item">
                    <a class="nav-link" href="index.php"> home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="booking.php"> Voyage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php"> Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">à poopos de nous </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php"> Mon compte </a>
                </li>  

<?php
$isLogin = false ;
session_start();
if( isset($_SESSION['id']) ){
    $isLogin = true ;

    echo " <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.php?deconnecter=true\">Déconnecter</a>
                </li> ";
}
       
?>

            </ul>

        </div>
    </div>
</nav>