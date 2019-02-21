<?php //convert.php
$f = $c = '';

if(isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if(isset($_POST['c'])) $c = sanitizeString($_POST['c']);

if ($f != '')

{
    $c = intval((5/9) * ($f - 32));
    $out = "$f f eqals $c c";

}

else $out="";

echo <<<_END


<html>
<head>
<title> Temperature Converter </tite>
</head>
<body>
<pre>

Enter either fahrenheit or celsius and click on convert

<b>$out</b>
<form method="post" action="convert.php">
Fahrenheit<input type="text" name="f" size="7">
celcius <input type="text" name="c" size="7">
<input type="submit" value="convert">
</form>
</pre?
</body>
</hmtl>
_END;

function sanitizeString($var){

    $var = stripsslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;

}
?>


}