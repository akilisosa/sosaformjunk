<?php
require "header.php"
?>

<main>

 <div class="container-fluid">
    <form class="form-signin w-75 p-3 mx-auto" action="includes/resetrequest.inc.php" method="POST">
        <div class="text-center mb-4" style="margin-top:30px;">
             <a href="signup.php">
             <div class="anim-object active" id="card-object-vf" style="animation: rotate-vert-center 8s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s infinite normal forwards running;">
              <img class="mb-4"  src="../images/sosaanimationstudios/logo/sosablack.svg" alt="go back?" width="72" height="72">
            </div> 
            </a>
         </div>

        <?php

if (isset($_SESSION['userId'])){
  echo '
  <div class="row">

 

<br>
<br>
<p>what are you doing here? you are signed in.</p>
<br>';
}
else{}

        if (isset($_GET["reset"])){
          if ($_GET["reset"]=="success"){
            echo '<p class="signupsuccess" style="color:green;">SUCCESS! Check your email to finish the process. </p>';
          }

        }

       
        ?>
     

        <div class="form-group">
         <!--<label for="exampleInputEmail1">Email address</label>-->
         <small id="emailHelp" style="padding-bottom:5px; padding-left:10px;" class="form-text text-muted">An email will be sent to you with instructions on how to reset your password.</small>
         
         <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         <!--<small id="emailHelp" class="form-text text-muted">An email will be sent to you with instructions on how to reset your password.</small>
      -->
      </div>
  
  <p class="mt-5 mb-3 text-muted text-center">You forget, I forget, we are all forgotten.  
  </p> 
   <button class="btn btn-lg btn-primary btn-block" name="reset-request-submit" type="submit" >Help me remember!</button><br>
  
   <p style="padding-bottom:80px"> </p>
</form>
</div>


</main>


<?php
    require "footer.php"
?>