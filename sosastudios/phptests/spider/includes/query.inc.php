<?php 

if (isset($_POST['query-submit'])){
    require 'dbh.inc.php';
    require_once 'listresults.inc.php';

    $query = htmlentities($_POST['query']);

    if (empty($query)){

        header("Location: ../index.php?error=emptyfields");
        exit();
    } else{ 

        print <<<_HTML__
        <!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
        <div id="content"></div>
        <script>
      function hndlr(response) {
        //array 
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;//get rid maybe
        
      }
    }
    </script>
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyD_nWrgHIbZ1pnW-hg074QR5zYDVp6bA_Y&cx=005718232593417197296:xuhhbfvnqiy&q=$query&callback=hndlr">
    </script>
    </body>
    </html>
    _HTML__;
    header("Location: ../index.php?query=success");

    
    }



}


else {
    header("Location: ../signup.php?error=stopbeingajerk");
                    exit();

    }

