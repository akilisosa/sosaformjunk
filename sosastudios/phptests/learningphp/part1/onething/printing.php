
<!DOCTYPE HTML>
<head>
</head>
<body>

<?php

if ($_POST['user']){
    print "Hello, ";
    //print what was submitted in the form parameter called user
    print $_POST['user'];
    print "!";
} else{
print <<<_HTML_
<form method="post" action"$_SERVER[PHP_SELF]">
your name:<input type="text" name="user" ?>
<br />
<button type="submit">Say hello</button>
</form>
_HTML_;
}
?>

<?php print "The population of the us is about: "; print number_format(320538904); ?>
</body>
