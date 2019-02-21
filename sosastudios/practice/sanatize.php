<?php
function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentites($var);
    return ($var);
}

function sanitizeMySQL($connecction, $var){
    $var = $connection->real_escape_string($var);
    $var = sanitizeString($var);
    return $var;
}
?>
