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
          <a href="listReservation.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">List de resevation</span>
          </a>
        </li>

       
        <li>
          <a href="contact.php" class="active">
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
        <span class="dashboard">contact</span>
      </div>
      
      
    </nav>

    <div class="home-content">
  

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">inbox</div>
          <div class="sales-details">

          <table class="styled-table box" style="width: 100%;">
    <thead>
        <tr>
            <th>nom</th>
            <th>emai</th>
            <th>message</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>mohamed</td>
            <td>mohamed@gmail.con</td>
            <td>salut , Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem iusto provident perferendis quidem! Exercitationem facere, inventore nulla atque amet, repellat esse incidunt laudantium nam quibusdam accusamus aperiam itaque fugit et.</td>
        </tr>
        <tr class="active-row">
            <td>manal</td>
            <td>manal@gmail.com</td>
            <td> consectetur adipisicing elit. Autem quia dolore tenetur numquam officiis obcaecati hic, veritatis error minus reprehenderit!</td>
        </tr>
        <tr class="active-row">
            <td>bader</td>
            <td>bader@gmail.com</td>
            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. At, officiis.</td>
        </tr>
        <!-- and so on... -->
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