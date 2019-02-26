<?php

if (isset($_POST["reset-password-submit"])){


    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordReset = $_POST["pwd-repeat"];
}
if(empty($selector)||empty($validator)){
   header("Location:../webpages/create-new-password.php?newpwd=empty");
   exit();
}else if ($password != $passwordRepeat){
    header("Location: ../webpages/create-new-password.php?newpwd=pwdnotsame")
}

$currentDate = date("U");

require 'dbh.inc.php';

$sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error!";
    exit();
}
else{
    mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
    mysqli_stmt_execute($stmt);

    $result=mysqli_stmt_get_result($stmt);
    if (!$row=mysqli_fetch_assoc($result)){
        echo "you need to resubmit your reset request";
        exit();
    }
    else{
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);

        if($tokenCheck === false){
            echo "you need to resubmit your reset request.";
            exit();
        }
        elseif($tokenCheck===true){
            
            $tokenEmail = $row['pwdResetEmail'];

            $sql ="SELECT * FROM users WHERE emailUsers=?;";
             $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)){
                echo "There was an error!";
                exit();
            } else {

                mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                mysqli_stmt_execute($stmt);

                $result=mysqli_stmt_get_result($stmt);
                if (!$row=mysqli_fetch_assoc($result)){
                    echo "there was an error!";
                    exit();
                }
                else{


                    $sql="UPDATE users SET pwdUsers=? WHERE emailUsers =?;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)){
                        echo "There was an error!";
                        exit();
                    } else {
                        $newHashedPwd=password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"ss",$newHashedPwd,$tokenEmail);
                        mysqli_stmt_execute($stmt);


                        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
                        $stmt = mysqli_stmt_init($conn);
                    
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo "There was an error";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "s", $tokenEmail );
                            mysqli_stmt_execute($stmt);
                            header("Location:../signup.php?newpwd=passwordupdated")
                        }
                    }        
                }

            }


        }
        else{
            echo "something went horribly horribly wrong";
            exit();
        }

    }
}
}
else{
    header("Location: ../index.php")
}