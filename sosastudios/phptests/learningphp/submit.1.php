<!DOCTYPE html>
<html>
    <head>

    </head>
            <body>

<?php
if ($_POST['user']){
    print "Hello, ";
    print $_POST['user'];
    print "!";
} else {
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="user"/>
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
?>
    </body>
</html>