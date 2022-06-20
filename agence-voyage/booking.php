<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="style/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="style/booking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<style>
		.logo {
			width: 70px;
			height: 50px;
		}
	</style>
</head>

<body>

	<!--  -->


	<?php
	require_once("./layout/nav-bar.php")
	?>
	<!--  -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="booking.php" method="GET">
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-group">
										<select class="form-control" value="casa" name="villeDepart">
											<option value="Advertise">ville de depart</option>
											<option value="tetouan">tetouan</option>
											<option value="chechaouen">chechaouen</option>
											<option value="ouazzane">ouazzane</option>
											<option value="rabat">rabat</option>
											<option value="casa">casa</option>
											<option value="fes">fes</option>
											<option value="tanger">tanger</option>
											<option value="warzazat">warzazat</option>
											<option value="tantan">tantan</option>
											<option value="beni melal">beni melal</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select class="form-control" name="villeArrivee">
											<option value="Advertise"> ville d'arrivee </option>
											<option value="tetouan"> tetouan</option>
											<option value="chechaouen">chechaouen</option>
											<option value="ouazzane">ouazzane</option>
											<option value="rabat">rabat</option>
											<option value="casa">casa</option>
											<option value="fes">fes</option>
											<option value="tanger">tanger</option>
											<option value="warzazat">warzazat</option>
											<option value="tantan">tantan</option>
											<option value="beni melal">beni melal</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row no-margin">

										<div class="col-md-5">
											<div class="form-group">
												<!-- <span class="form-label">Check out</span> -->
												<input class="form-control" name="dateDeapart" type="text" placeholder="Date de depart" onfocus="(this.type='date')" required>
											</div>
										</div>
										<!-- <div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Guests</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div> -->
										<div class="col-md-3">
											<!-- <div class="form-btn">
												<button class="submit-btn">Check availability</button>
											</div> -->
										</div>
										<div class="col-md-3">
											<div class="form-btn">
												<!-- <button type="submit"c class="submit-btn">Rechercher</button> -->
												<input type="submit" value="rechercher" class="submit-btn">
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						<div class="container-voyages">







							<?php
							if (!empty($_GET['dateDeapart'])) echo "<div class=\"date-day\">" . $_GET['dateDeapart'] . " </div>	";

							?>
							<?php

							if (!empty($_GET['villeDepart']) && !empty($_GET['villeArrivee'])) {

								try {
									$bdd = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');
									$reponse = $bdd->query("SELECT * FROM voyage where villeDepart = '" . $_GET['villeDepart'] . "' and villeArrivee ='" . $_GET['villeArrivee'] . "' ");
									while ($donnees = $reponse->fetch()) {

										echo "
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

    <a class=\"btn\" href=\"traitement.php?idVoyage=" . $donnees['id'] . "&dateVoyage=".$_GET['dateDeapart']." \"
        >reserver</a>

	

	</div>
	</div>
	";
									}
								} catch (Exception $e) {
									die('Erreur : ' . $e->getMessage());
								}
							}
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-voyages">

		</div>
	</div>







	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>