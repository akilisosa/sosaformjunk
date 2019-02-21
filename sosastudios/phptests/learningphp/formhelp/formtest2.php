<?php
if (isset($_POST['name'])) $name =$_POST['name'];
else $name = "(not entered)";

echo <<<_END
<html>
<head>
<title>Form TEst</title>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="../../spider/js/buildWebs.js"></script>
<script>

var dataset = [[100,100,0,0],[100,100,100,0],[100,100,0,100],[100,100,100,100]];
result = dataset.reduce(function(max, arr) {
     return max >= arr[0] ? max : arr[0];
            }, -Infinity);

let w = 10000;
let h = 10000;
</script>
</head>
<body>
your name is $name<br>
<form method="post" onsubmit="buildWebs()" action="formtest2.php">
what is your name?
<input type="text" name="name">
<input type="submit">
</form>
</body>
</hmtl>
_END;
?>