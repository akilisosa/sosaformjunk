
<!DOCTYPE HTML>
<head>
</head>
<body>

<?php

$cityname = array('New York' ,
                'Los Angeles',
                'Chicago',
                'houston' ,
                'philidelphia',
                'pheonix',
                'san antonio',
                'san diego',
                'dallas',
                'san jose');

$citypop= array('New York' => 8175133,
                'Los Angeles' => 3792621,
                'Chicago' => 2695598,
                'houston' => 2100263,
                'philidelphia' => 1526006,
                'pheonix' => 1445632,
                'san antonio' => 1327407,
                'san diego' => 1307402,
                'dallas' => 1197816,
                'san jose' => 945942);



for ($i=1, $cities = count($cityname); $i<$cities; $i++){
    print $cityname[$i];
}
print "<br>";
print "<br>";
print "<br>";

print "before sort";
print "<table>\n";
foreach ($citypop as $key => $value){
    print "   \$citypop: $key $value\n";

}

asort($citypop);
print "after sort";
foreach ($citypop as $key => $value){
    print "   \$citypop: $key $value\n";

}

 #($i=1, $cities = count($citypop); $i<$cities; $i++){
   # print $citypop[1][0];
#}

?>

<?php print "The population of the us is about: "; print number_format(320538904); ?>
</body>
