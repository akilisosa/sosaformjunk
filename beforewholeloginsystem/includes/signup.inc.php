<?php 

include_once 'dbhr.php';


$first = mysqli_real_escape_string($conn,$_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

echo $first;
$sql = "INSERT INTO `users`(`user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) 
VALUES ('$first', '$last', '$email', '$uid',`12345`);";
mysqli_query($conn, $sql);

header("Location:../dbselect.php?signup=success");
?>