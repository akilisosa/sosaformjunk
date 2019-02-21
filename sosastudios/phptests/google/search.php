<!DOCTYPE html>

<head>
</head>
<body>
<script>
  var ele = searchform;
if(ele.addEventListener){
    ele.addEventListener("submit", callback, false);  //Modern browsers
}else if(ele.attachEvent){
    ele.attachEvent('onsubmit', callback);            //Old IE
}
  </script>

<form id="searchform">
  <input type="text" name="query">
  <input type="submit" name="submit">
</form>
</body>

</html>

<?php


$params = array('key'=> 'AIzaSyD_nWrgHIbZ1pnW-hg074QR5zYDVp6bA_Y',
                'cx'=>'005718232593417197296:xuhhbfvnqiy',
                'q' =>'animal',
                'count' =>100,
                'searchtype'=>'image',
                'format' =>'json');
              $url ="https://www.googleapis.com/customsearch/v1?" .http_build_query($params);

              $c = curl_init($url);
              curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-type:  application/json'));
              $qresults= curl_exec($c);
               curl_close($c);
             
             
             
          ?>    
               <script type="text/javascript">
              var book = <?php echo $qresults ?>;
    
              
              </script>

             
              


    
   
 <!--   <script>
    function datahandler(){
        
      }


      function hndlr(response) {

        //array 
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;//get rid maybe
        
      }
    }
    </script>
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyD_nWrgHIbZ1pnW-hg074QR5zYDVp6bA_Y&cx=005718232593417197296:xuhhbfvnqiy&q=animal&callback=hndlr">
    </script>-->
  </body>
</html>