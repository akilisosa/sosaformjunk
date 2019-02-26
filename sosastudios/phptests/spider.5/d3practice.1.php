<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="div-1">Here is div-1</div>
<div id="div-2">Here is div-2</div>

<script>
var el = document.getElementById('div-1').nextSibling,
    i = 1;

console.group('Siblings of div-1:');

while (el) {
  console.log(i, '. ', el.nodeName);
  el = el.nextSibling;
  i++;
}

console.groupEnd();
</script>
</body>
</html>