<?php

if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{//yep
        $sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sql");
            exit();
        }
        //check
        else{

            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        //check
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['user_pwd']);

                
                if ($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpasswordthisone".$pwdCheck."&");
                    exit();
                }
                if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId']=$row['user_id'];
                    $_SESSION['userUid']=$row['user_uid'];
                   
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../index.php?error=wrongpasswordweirdone");
                    exit();
                }
            }
            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }  //check

        }//check
    }//check


}
else{
    header("Location: ../index.php?itsjustdoingthis");
    exit();
}

?>