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

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

    echo password_verify($input, $hashedPwdInDb);

?>
</form>

</body>
</html>