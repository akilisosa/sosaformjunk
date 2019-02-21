
<!DOCTYPE HTML>
<head>
</head>
<body>

<?php


?>
<form method="POST" action="$_SERVER[PHP_SELF]">
<input type="text"  name="product_id">
<select name="category">
<option value="ovenmitt"> pot holder</option>
<option value="fryingpan">Frying PAn</option>
<option value="torch">kitchen torch</option>
</select>
<input type="submit" name="submit">
</form>
here are the submitted values:

product_id:<?php print $_POST['product_id'] ?? '' ?>
<br/>
category: <?php print $_POST['category'] ?? ''?>
<?php print "The population of the us is about: "; print number_format(320538904); ?>
</body>
