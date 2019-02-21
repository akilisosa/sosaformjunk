<?php

$dbServername ="localhost"; //home695432287.1and1-data.host
$dbUsername="root"; //u90280445
$dbPassword="";
$dbName="tutslogin";//actually im not to sure



$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

