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
$sql = "SELECT * FROM users;";
$result=mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows($result);
if( $resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid']."<br>";
    }
}
?>
</body>
</html>