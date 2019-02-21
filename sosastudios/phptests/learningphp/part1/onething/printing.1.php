
<!DOCTYPE HTML>
<head>
</head>
<body>

<?php

$hamburger = 4.95;
$milkshake = 1.95;
$cola = .85;
$tax = 1.075;
$tip = 1.16;


$value = ((($hamburger*2)+$milkshake+$cola)*$tip)*$tax;

print "\r\nhamburger " .$hamburger."\r\n hamburger " .$hamburger."\r\n";
print "milkshake " .$milkshake."\r\n";
print "cola      " .$cola."\r\n";
print "tip       " .$tip."\r\n";
print "tax       " .$tax."\r\n";
print "________________________"."\r\n";
print "total value" .$value."\r\n";

$fish = 'bass, carp, pike, flounder';
$fish_list = explode(',',$fish);
print "The second fish in the list is $fish_list[3]";

$i=52;
while ($i <51){
    $celcius = (($i-32)*(5/9));
    print " if farenhit is " .$i ."the celcius is " .$celcius;
    print "<br>";
    $i++; 
}

?>

<?php print "The population of the us is about: "; print number_format(320538904); ?>
</body>
