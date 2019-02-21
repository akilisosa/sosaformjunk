<!doctype html>
<head>
<meta charset="utf-8">
<title>php lesson 1</title>

</head>
<body>

<form method="GET">
<input name="person" type="text"/>
<button>submit</button>
</form>
<?php
    $name=$_GET["person"];
    echo $name."is pretty";
?>
</body>
</html>