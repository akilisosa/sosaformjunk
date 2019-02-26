<?php 

namespace query;

if (isset($_POST['query-submit'])){
    require 'dbh.inc.php';
    require_once 'listresults.inc.php';

    $query = htmlentities($_POST['query']);
    $query = stripslashes($query);
    $query = strip_tags($query);

    if (empty($query)){

        header("Location: ../index.php?error=emptyfields");
        exit();
    } else{ 

      $params = array('key'=> 'AIzaSyD_nWrgHIbZ1pnW-hg074QR5zYDVp6bA_Y',
      'cx'=>'005718232593417197296:xuhhbfvnqiy',
      'q' =>$query,
      'searchtype'=>'image',
      'format' =>'json');
    $url ="https://www.googleapis.com/customsearch/v1?" .http_build_query($params);

    $c = curl_init($url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-type:  application/json'));
    $GLOBALS['qresults'] = curl_exec($c);

    curl_close($c);
    
    header("Location: ../index.php?query=success");

    
    }
   


}


else {
    header("Location: ../signup.php?error=stopbeingajerk");
                    exit();

    }

