<?php

include_once 'includes/dbhr.php'
?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>php lesson 1</title>

</head>
<body>

<?php 
$data = "akili101";
//created a template
$sql = "SELECT * FROM users WHERE user_uid=?;";
//create a prepared statment
$stmt = mysqli_stmt_init($conn);
//prepare the prepared statment
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL statment failed";
} else {
    //bind parameters to the placeholder 
    mysqli_stmt_bind_param($stmt,"s", $data);
    //rum=n parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid']."<br>";
    }

}

?>
</body>
</html>