<!doctype html>
<head>
<meta charset="utf-8">
<title>php lesson 1</title>

</head>
<body>

<form method="GET">
<input name="num1" type="text" placeholder="number 1"/>
<input name="num2" type="text" placeholder="number 2"/>
<select name ="operator">
<option>none</option>
<option>add</option>
<option>subtract</option>
<option>multiply</option>
<option>divide</option>
</select>
<br>
<button name="submit" value="submit" type="submit">calculate</button>
</form>
<p>the answer is: </p>
<?php
    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch($operator){
            case "none": 
                    echo "you need to select something";
                    break;
            case "add": 
                echo $result1+$result2;
                break;
                case "subtract": 
                echo $result-$result2;
                break;

                case "multiply": 
                echo $result1*$result2;
                break;

                case "divide": 
                echo $result1/$result2;
                break;
        }
    }
?>
</body>
</html>