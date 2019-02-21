
<!doctype html>
<head>
<meta charset="utf-8">
<title>php lesson 1</title>

</head>
<body>
<form action="includes/signuperror.php" method="POST">

<?php 

if (isset($_GET['first'])) {
    $first = $_GET['first'];
    echo '<input type="text name="first" placeholder="firstname" value="'.$first.'"> <br>';
}
else {
    echo '<input type="text" name="first" placeholder="firstname"/> <br>';
}

?>
<input type="text" name="last" placeholder="lastname"/>
<br>
<input type="text" name="email" placeholder="emailaddress"/>
<br>
<input type="text" name="uid" placeholder="id"/>
<br>
<input type="password" name="pwd" placeholder="password"/>
<button type="submit" name="submit">sign up</button>
</form>

<?php
    $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullUrl, "signup=empty") == true) {
        echo "<p>you did not fill in all fields!<p>";

    }
?>

</body>
</html>