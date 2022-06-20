<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class="bx bxs-bus"></i>
      <span class="logo_name"> Voyage salam</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Voyages</span>
          </a>
        </li>

        <li>
          <a href="listReservation.php" class="active">
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
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">reservations</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="bx bx-search"></i>
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
            <th>numero de reservation</th>
            <th>num voyage</th>
            <th>client</th>
            <th>date resev</th>
            <th>date voyage</th>
        </tr>
    </thead>
    <tbody>
      <!--   some code  -->


      <?php

try{
$bdd = new PDO('mysql:host=localhost;dbname=agence-voyage', 'root', '');
$reponse = $bdd->query('SELECT C.nom ,C.prenom, R.idR ,R.idVoyage, R.dateReservation ,R.dateVoyage
FROM client C , reservation R 
WHERE C.id=R.idClient ');
while ($donnees = $reponse->fetch()){

echo  "
<tr>

<td>".$donnees['idR']."</td>
<td>".$donnees['idVoyage']."</td>
<td>".$donnees['nom']." ".$donnees['prenom']."</td>
<td>".$donnees['dateReservation']."</td>
<td>".$donnees['dateVoyage']."</td>

</tr>
";
}
$reponse->closeCursor();
}catch(Exception $e)
{ die('Erreur : '.$e->getMessage());}
?>





      <!-- <tr>
        <td>Dom</td>
        <td>6000</td>
      </tr>
      <tr class="active-row">
        <td>Melissa</td>
        <td>5150</td>
      </tr> -->



      <!--   some code  -->
    </tbody>
</table>
          </div>
       
        </div>

        
      </div>
    </div>
  </section>






  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>




</body></html>