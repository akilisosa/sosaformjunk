<?php
require "../header.php"
?>

<main>

 <div class="container-fluid">

<?php

$selector = $_GET["selector"];
$validator = $_GET["validator"];


if(empty($selector)||empty($validator)){
    echo "we could not validate your request!";
}
else{
    if (ctype_xdigit($selector) !==false && ctype_xdigit($validator) !==false){

   
        ?>

        <form action="includes/resetpassword.inc.php" method="POST">
        <input type = "hidden" name="selector" value="<?php echo $selector?>">
        <input type = "hidden" name="selector" value="<?php echo $selector?>">

        <div class="form-group">
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" class="form-control" name="pwd-repeat" id="exampleInputPassword1" placeholder="Password">
            </div>

       
        <button type="submit" class="btn text-light bg-dark"name="reset-password-submit">Reset Password</button>
    </form>
        <?php


    }
}

?>



</div>


</main>


<?php
    require "../footer.php"
?>