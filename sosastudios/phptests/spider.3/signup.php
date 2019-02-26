<?php
require "header.php"
?>

<main>

 <div class="container-fluid">
    <form class="form-signin w-75 p-3 mx-auto" action="includes/signup.inc.php" method="POST">
        <div class="text-center mb-4" style="margin-top:30px;">
             <a href="index.php">
             <div class="anim-object active" id="card-object-vf" style="animation: rotate-vert-center 8s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s infinite normal forwards running;">
              <img class="mb-4"  src="../images/sosaanimationstudios/logo/sosablack.svg" alt="go back?" width="72" height="72">
            </div> 
            </a>
         </div>

        <?php

        if (isset($_GET['error'])){

          if ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }

          elseif ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }
          elseif ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }
          elseif ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }
          elseif ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }
          elseif ($_GET['error'] == "emptyfields"){
            echo ' <p class="signuperror>fill in the empty fields</p>';
          }
        
        elseif ($_GET['signup'] == "success"){
          echo ' <p class="signuperror>signup success!!</p>';
        }
      }



        ?>
     
<?php

if (isset($_SESSION['userId'])){
  echo '
  <div class="row">

 

<br>
<br>
<p>what are you doing here? you are signed in.</p>
<br>';
}
else{ echo '
        <div class="form-group">
         <label for="exampleInputEmail1">Email address</label>
         <input autofocus="autofocus" type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
        </div>

        <div class="form-group">
         <label for="preferreduserid">UserId (what they might see):</label>
        <input type="text" class="form-control" name="uid" id="preferreduserid" aria-describedby="might see it" placeholder="Enter what you want to be called on here">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
            </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password:</label>
            <input type="password" class="form-control" name="pwd-repeat" id="exampleInputPassword1" placeholder="Repeat Password">
            </div>




  
  <p class="mt-5 mb-3 text-muted text-center">You navigated here for a reason. 
    You are about to commit your allegence. Make sure this is what you want to do. 
  </p> 
   <button class="btn btn-lg btn-primary btn-block" name="signup-submit" type="submit" >Signup</button><br>
   <a href="passwordrecovery.php"><p class="text-center">forgot your password?</p></a>
   <p style="padding-bottom:80px"> </p>
</form>
';}
?>
</div>


</main>


<?php
    require "footer.php"
?>