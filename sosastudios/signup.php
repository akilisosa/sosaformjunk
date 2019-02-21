<?php
require "header.php"
?>

<main>

 <div class="container-fluid">
    <form class="form-signin w-75 p-3 mx-auto" action="includes/signup.inc.php" method="POST">
        <div class="text-center mb-4" style="margin-top:30px;">
             <a href="../spaceship.html">
             <div class="anim-object active" id="card-object-vf" style="animation: rotate-vert-center 8s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s infinite normal forwards running;">
              <img class="mb-4"  src="header/images/sosablack.svg" alt="go back?" width="72" height="72">
            </div> 
            </a>
         </div>
     
         <div class="form-group">
         <label for="preferredfirstname">First Name (preferred):</label>
        <input type="text" class="form-control" name="first" id="preferredfirstname" aria-describedby="only you see this" placeholder="Enter what you call yourself">
        </div>

        <div class="form-group">
         <label for="preferredlastname">Last Name (preferred):</label>
        <input type="text" class="form-control" name="last" id="preferredlastname" aria-describedby="only you see this" placeholder="Enter what you call yourself">
        </div>

        <div class="form-group">
         <label for="exampleInputEmail1">Email address</label>
         <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
    You're about to commit your allegence. Make sure this is what you want to do. 
  </p> 
   <button class="btn btn-lg btn-primary btn-block" name="signup-submit" type="submit" >Signup</button>
   <p style="padding-bottom:80px"> </p>
</form>
</div>


</main>


<?php
    require "footer.php"
?>