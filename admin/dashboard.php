<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <title> admin</title>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require_once 'traitement.php' ?>

  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bxs-bus"></i>
      <span class="logo_name"> Voyage salam</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Voyages</span>
        </a>
      </li>

      <li>
        <a href="listReservation.php">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">List de resevation</span>
        </a>
      </li>


      <li>
        <a href="contact.php">
          <i class="bx bx-message"></i>
          <span class="links_name">Messages</span>
        </a>
      </li>


      <li class="log_out">
        <a href="login.php">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>

  </div>



  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Voyages</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>

    </nav>

    <div class="home-content">


      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">

            <table class="styled-table box" style="width: 100%;">
              <thead>
                <tr>
                  <th>numero</th>
                  <th>ville depart</th>
                  <th>ville arrivee</th>
                  <th>heur de depart</th>
                  <th>nombres de heurs</th>
                  <th>numbres de places res</th>
                  <th>tarif</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>





                <?php

                try {
                  $bdd = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');
                  $reponse = $bdd->query('SELECT * FROM voyage');
                  while ($donnees = $reponse->fetch()) {

                    echo  "
        <tr>
    
         <td>" . $donnees['id'] . "</td>
         <td>" . $donnees['villeDepart'] . "</td>
         <td>" . $donnees['villeArrivee'] . "</td>
         <td>" . $donnees['heureDepart'] . "</td>
         <td>" . $donnees['nbrHeurs'] . "</td>
         <td>" . $donnees['nbrPlacesResrv'] . "</td>
         <td>" . $donnees['tarif'] . "</td>
         <td> 
         <a href=\"index.php?edit=" . $donnees['id'] . " \"
         class=\"btn btn-info\">Modifie</a>
         <a href=\"dashboard.php?delete=" . $donnees['id'] . " \"
         class=\"btn btn-danger\">Delete</a>
      
  
         </td>
        </tr>
";
                  }
                  $reponse->closeCursor();
                } catch (Exception $e) {
                  die('Erreur : ' . $e->getMessage());
                }
                ?>

              </tbody>
            </table>
          </div>

        </div>

        <div class="top-sales box">
          <div class="title">Ajouter Voyage</div>


          <form action="" method="POST">

            <ul class="form-style-1">

              <li>
                <label>ville depart</label>
                <select name="villeDepart" class="field-select">
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
                  <option value="beni melal">beni ahmed</option>
                </select>
              </li>
              <li>
                <label>ville arrivee</label>
                <select name="villeArrivee" class="field-select">
                  <option value="Advertise">ville de arrivee</option>
                  <option value="tetouan">tetouan</option>
                  <option value="chechaouen">chechaouen</option>
                  <option value="ouazzane">ouazzane</option>
                  <option value="rabat">rabat</option>
                  <option value="casa">casa</option>
                  <option value="fes">fes</option>
                  <option value="tanger">tanger</option>
                  <option value="warzazat">warzazat</option>
                  <option value="tantan">tantan</option>
                  <option value="beni melal">beni ahmed</option>
                </select>
              </li>
              <li>
                <label>heur de depart </label>
                <input type="text" name="heureDepart" class="field-long" />
              </li>
              <li>
                <label>heur de arrivee </label>
                <input type="text" name="heureArv" class="field-long" />
              </li>
              <li>
                <label>nombres d'heurse</label>
                <input type="text" name="nbrheurs" class="field-long" />
              </li>
              <li>
                <label>tarif </label>
                <input type="text" name="tarif" class="field-long" />
              </li>

              <li>
                <input type="submit" name="submit" value="ajouter" />
              </li>
            </ul>
          </form>



        </div>
      </div>
    </div>
  </section>






  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>