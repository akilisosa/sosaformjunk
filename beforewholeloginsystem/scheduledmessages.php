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
    $dayofweek = date("w");
    switch ($dayofweek){
        
        case 0:
        echo "it is sunday";
        break;
        case 1:
        echo "it is monday ";
        break;
        case 2:
        echo "it is tuesday";
        break;
        case 3:
        echo "it is wednesday";
        break;
        case 4:
        echo "it is thursday";
        break;
        case 5:
        echo "it is friday";
        break;
        case 6:
        echo "it is saturday";
        break;
        
    }
?>
</body>
</html>