<? php

if(isset($_POST['submit'])){
include_once 'dbhr.php';
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)  ) {
    header("Location: ../formerrorhandler.php?signup=empty");#code...
    exit();
  } else {
      if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
          header("Location: ../formerrorhandler.php?signup=char");
          exit();

      } else {
        //check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Locatoin: ../index.php?signup=invalidemail");
      }
      else {
          echo "sing up the user!";
      }
  }


} 
else {
    header("Location: ../formerrorhandler.php?signup=error");
}