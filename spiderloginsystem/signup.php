<?php


    include_once 'header.php';
?>


<section class="main-container">
    <div class="main-wrapper">
        <h2>Signup page<h2>

        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="firstname"/>
            <input type="text" name="last" placeholder="lastname"/>
            <input type="text" name="email" placeholder="email"/>
            <input type="text" name="uid" placeholder="uidname"/>
            <input type="password" name="pwd" placeholder="password"/>
            <button type="submit" name="submit"> Sign Up</button>
    </div>
</section>



<?php


    include_once 'footer.php';
?>

