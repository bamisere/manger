<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Slick - Bootstrap 4 Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/3.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
        <body>
                <nav class="navbar navbar-dark bg-primary">
                    <a class="navbar-brand"><h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a></h1>
                    <form class="form-inline">
                       
                        <h2><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></h2>
                        
                    </form>
                </nav>


           <br></br>

                <div class="card-deck">
                    
                    <div class="card text-white bg-warning mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">RCA  GENERATOR</h5>
                        <p class="card-text">Generate RCA for customers</p>
                        <a href="/work/rca/index.php" class="btn btn-primary">RCA</a>
                    </div>
                    </div>
                    <div class="card text-white bg-success mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">PORT ASSIGNMENT</h5>
                        <p class="card-text">Search ports inside the datacenter</p>
                        <a href="assignment.php" class="btn btn-primary">PORT</a>
                    </div>
                    </div>
                    <div class="card text-white bg-info mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">AVR GENERATOR</h5>
                        <p class="card-text">Generate AVR for circuits</p>
                        <a href="assignment.php" class="btn btn-primary">AVR</a>
                    </div>
                    </div>
                      
           
        </body>

</html>