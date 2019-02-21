<?php

if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $userfirst = $_POST['first'];
    $userlast = $_POST['last'];
    $useremail = $_POST['email'];
    $useruid = $_POST['uid'];
    $userpwd = $_POST['pwd'];
    $userpwdrpt = $_POST['pwd-repeat'];

    if (empty($userfirst) || empty($userlast) || empty($useremail) || 
        empty($useruid) || empty($userpwd) || empty($userpwdrpt)){

            header("Location: ../signup.php?error=emptyfields&f".$userfirst."&l".$userlast."&m".$useremail."&uid".$useruid);
            exit();
    }
   

    else if (!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&f".$userfirst."&l".$userlast."&uid".$useruid);
            exit();
        }
    
    else if (!preg_match("/^[a-zA-Z0-0]*$/", $userfirst)){
            header("Location: ../signup.php?error=invalidname&&l".$userlast."&m".$useremail."&uid".$useruid);
                exit();
        }

    else if (!preg_match("/^[a-zA-Z0-0]*$/", $userlast)){
            header("Location: ../signup.php?error=invalidnamed&f".$userfirst."&m".$useremail."&uid".$useruid);
                exit();
        }

    else if (!preg_match("/^[a-zA-Z0-0]*$/", $useruid)){
        header("Location: ../signup.php?error=invaliduid&f".$userfirst."&l".$userlast."&m".$useremail);
            exit();
    }

    else if ($userpwd !== $userpwdrpt){
        header("Location: ../signup.php?error=password&f".$userfirst."&l".$userlast."&m".$useremail."&uid".$useruid."&");
            exit();
    }

    else if (!filter_var($useremail, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z0-0]*$/", $userfirst) 
            || !preg_match("/^[a-zA-Z0-0]*$/", $userlast) || !preg_match("/^[a-zA-Z0-0]*$/", $useruid) 
            || !preg_match("/^[a-zA-Z0-0]*$/", $userpwd)  || !preg_match("/^[a-zA-Z0-0]*$/", $userpwdrpt)){
                header("Location: ../signup.php?error=jerk");
           exit();  
    }

//check
    else {
        $sql = "SELECT user_uid FROM users WHERE user_id=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
            //cjeck
        else{

            $sql = "SELECT user_uid FROM users WHERE user_uid =?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"s", $useruid);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck= mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("Location: ../signup.php?error=usertaken&f".$userfirst."&l".$userlast."&m".$useremail);
                exit();
                }
     
            
                else{
                    $sql = "INSERT INTO `users`( `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) 
                            VALUES (?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else{
                        $hashedPwd = password_hash($userpwd, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, 'sssss', $userfirst, $userlast, $useremail, $useruid, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
 
                    }

    

                }//check
            }//check

     
            
        }//check

    }//check

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    

}

else{
    header("Location: ../signup.php?error=stopbeingajerk");
    exit();
}