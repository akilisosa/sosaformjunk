<!DOCTYPE html>
<html>

<head>
  <title>what is this complaing aout</title>
</head>



  <?php
if (isset($_POST['query-submit'])){
 

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
    $qresults= curl_exec($c);

    curl_close($c);
    
    }}
   ?>


<body>
<form id="searchform" name="query-submit" action="search.1.php" method="post">
  <input type="text" name="query"/>
  <input type="submit" name="submit"/>
</form>

   
               <script type="text/javascript">
              var book = <?php echo $qresults ?>;
    
              
              </script>

             
              
              </body>

</html>