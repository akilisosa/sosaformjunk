<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Akili Sosa, Alberto Sosa, ak">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sosa Studios:The Studio</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/animation.css">

    <!-- Custom styles for this template -->
  </head>


  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">This is Akili's studio their more personal part of the web. In it you can find some of the services we offer, artwork, and more.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="../index.html" class="navbar-brand d-flex align-items-center">
        <div class="anim-object active" id="card-object-vf" style="animation: rotate-vert-center 4s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s infinite normal forwards running;">
          <img src="../images/sosaanimationstudios/logo/sosawhite.svg" width="30" height="30" alt="">
          </div>
      
        <strong style="padding-left:5px"> Sosa Studios</strong>
      </a>
        
        <?php
        if (isset($_SESSION['userId'])){
            echo '<form class="form-inline" action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit" class="btn btn-primary mb-2">Logout</button>
        </form>';
          }
          else{
          
          echo '<form class="form-inline" action="includes/login.inc.php" autocomplete="on" method="POST">
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="staticEmail2" name="mailuid" placeholder="UserId/email...">
            </div>
    <div class="form-group mx-sm-3 mb-2">   
        <input type="password" name="pwd" class="form-control"  autocomplete="off" placeholder="Password">
    </div>
         <button type="submit" name="login-submit" class="btn btn-secondary mb-2">Login</button>
    </form>';
          }
        ?>

        
     
        

    </div>
  </div>
</header>
