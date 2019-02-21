<html>
  <head>
    <title>JSON Custom Search API Example</title>
  </head>
  <body>
    <div id="content"></div>
    <div id="content1"></div>
    <div id="content2"></div>


    
    <script>
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
    </script>
  </body>
</html>