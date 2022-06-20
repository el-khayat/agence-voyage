
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="style/style.css" /> -->
  <link rel="stylesheet" href="style/footer.css" />
  <link rel="stylesheet" href="style/slider.css" />
  <link rel="stylesheet" href="style/styles.css" />
  <link rel="stylesheet" href="style/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <!--  nav bar  -->
  <?php
  require_once("./layout/nav-bar.php")
  ?>
  <?php
if (isset($_GET['deconnecter'])) {
  session_destroy();
  header("location: login.php");

}
?>
  <!--  end nav -->


  <!--  head  -->
  <?php include 'layout/slider.php'; ?>
  <!-- END head -->

  <!--  top demande  -->
  <?php include './layout/sections/top-demandes.php'; ?>
  <!-- END demande -->


  <!--    -->
  <?php include './layout/sections/serves.php'; ?>
  <!-- END demande -->


<!--    -->
  <?php include './layout/sections/offres.php'; ?>
  <!-- END demande -->







  <?php 
if (isset($_SESSION["id"])) {
  // code...
}else{
    include 'layout/sections/pasInscrit.php'; 

}
?>

  <!--  FOOTHER -->
  <?php include 'layout/footer.php'; ?>
  <!--  END FOOTHER -->

  <!-- script -->
  <script src="./js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <!--  reveal  -->
<script src="https://unpkg.com/scrollreveal"></script>
<script >
    ScrollReveal({ reset: true });
    var defaultProps = {
  easing: "cubic-bezier(0.5, 0, 0, 1)",
  distance: "30px",
  duration: 1000,
  desktop: true,
  mobile: true,
};

  ScrollReveal().reveal('.a1', Object.assign({}, defaultProps, {
      delay: 1000,
      distance: "1000px",
      origin: "left",
    }));

  ScrollReveal().reveal('.a2', Object.assign({}, defaultProps, {
      delay: 500,
      distance: "1000px",
      origin: "left",
    }));

  ScrollReveal().reveal('.a3', Object.assign({}, defaultProps, {
      delay: 500,
      distance: "1000px",
      origin: "right",
    }));

  ScrollReveal().reveal('.a4', Object.assign({}, defaultProps, {
      delay: 1000,
      distance: "1000px",
      origin: "right",
    }));

  ScrollReveal().reveal('.image', Object.assign({}, defaultProps, {
      delay: 500,
      distance: "1000px",
      origin: "left",
    }));

  ScrollReveal().reveal('.resves', Object.assign({}, defaultProps, {
      delay: 1000,
      distance: "60px",
      origin: "bottom",
    }));

  ScrollReveal().reveal('#offre1', Object.assign({}, defaultProps, {
      delay: 400,
      distance: "80px",
      origin: "bottom",
    }));

  ScrollReveal().reveal('#offre2', Object.assign({}, defaultProps, {
      delay: 700,
      distance: "80px",
      origin: "bottom",
    }));

  ScrollReveal().reveal('#offre3', Object.assign({}, defaultProps, {
      delay: 1000,
      distance: "80px",
      origin: "bottom",
    }));






</script>
</body>

</html>