<?php 

include_once 'includes/dbhr.php';
?>

<!doctype html>
<head>
<meta charset="utf-8">
<title>decrypt</title>

</head>
<body>
<?php
    /*echo "test123";
    echo "<br>";
    echo password_hash("test123", PASSWORD_DEFAULT); /*/
$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);
$datas = array();
if (mysqli_num_rows($result) >0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
    }
    foreach ($datas as $data) {
        echo $data;
    }

}


print_r($datas);
?>
</form>

</body>
</html>