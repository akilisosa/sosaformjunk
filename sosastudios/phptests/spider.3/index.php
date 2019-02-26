<?php
require "header.php";

?>
<style>

  div.bar{
    display:block;
    width: 100px;
    height:100px;
    background-color:teal;
  }
  </style>

<script>
    function loadText(){
     
        buildWebs();
        
      
    }



    </script>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="js/buildWebs.js"></script>
      <main role="main" class="container">
       <div class="jumbotron">
    
       <div class="lead" class="mx-auto w-auto p-3" style="width:100%">
    
       <h1 class="mx-auto text-left">Sosa Animation Studios</h1>
       <h2 class=" " style="width:100%">Presents: A Quiet Patient Spider</h2>
       <p>A new tool for searching the internet.</p>
    
       <div class="text-center" style="margin-left:10%" height="100%" width="100%">
        <svg class="text-center " height="190" width="100%" 
           preserveAspectRatio="xMinYMax meet"
            aria-label="spider" viewBox="160 50 290 230" role="img" style="">
        <title>image of a friendly spider</title>
          <defs>
           <title>eyes of the spider</title>
               <circle id="eyes" cy="155" r="48"/>
            <title>smaller eyes of the spider</title>
              <circle id="minieyes" r="6" stroke="black" fill="grey" strokewidth="1"/>    
           </defs>
            <g class="legs" stroke="green" stroke-width="6" fill="blue">
            <!--rightside -->
                 <title>legs</title>
               <path d="M 350,204
                     c 60 -300, 50 -60,  20  5,
                     q -10,40 -20,-5 z"/>
                <path d="M 380,74
                     c 70 400, 60 100,  30  5,
                     q -20,-40 -30,-5 z"/>
           <!-- leftside-->
                <path d="M 250,204
                     c -60 -300, -50 -60,  -20  5,
                     q 10,40 20,-5 z"/>
               <path d="M 220,74
                     c -70 400, -60 100,  -30  5,
                     q 20,-40 30,-5 z"/>
            </g>
     <!--this is where the big eyes live-->
         <polygon points="230,190 300,120 370,190" style="fill:lime;stroke:purple;stroke-width:8" />
            <g stroke="black" stroke-width="2">
            <use xlink:href="#eyes" x="250" fill="white"/>
             <use xlink:href="#eyes" x="350" fill="white"/>
            </g>
            <!-- these are the small eyes-->
            <g>
                <!--this is the left side-->
              <use xlink:href="#minieyes" x="250" y="177"/>
              <use xlink:href="#minieyes" x="266" y="162"/>
              <use xlink:href="#minieyes" x="230" y="169"/>
              <use xlink:href="#minieyes" x="240" y="190"/>
              <use xlink:href="#minieyes" x="272" y="182"/>
              <!--this is the right side-->
              <use xlink:href="#minieyes" x="365" y="165"/>   
              <use xlink:href="#minieyes" x="337" y="170"/> 
              <use xlink:href="#minieyes" x="355" y="180"/> 
              <use xlink:href="#minieyes" x="375" y="185"/> 
              <use xlink:href="#minieyes" x="342" y="192"/> 
            </g>
    <!-- this is the right pincer original-->
                <g id="rightPincer" stroke="blue" stroke-width="4" fill="black">      
                     <path d="M310,215
                        q 45,-45 74,-30
                        q 10,30 -74,30 z">
                    <animate id="animation1"
                       attributeName="d"
                       attributeType="XML"
                       from="M 325,185
                        q 75,-25 77,20
                        q -8,20 -77,-20 z"
                       to="M 310,225
                        q 45,-45 74,-30
                        q 10,30 -74,30  z" 
                       begin="0;animation3.end" dur="1.5s"/>
                    <animate id="animation2"
                       attributeName="d"
                       attributeType="XML"
                       begin="animation1.end"
                       from="M 310,225
                       q 45,-45 74,-30
                       q 10,30 -74,30  z"
                       to="M 327,218
                        q 45,-45 74,-30
                       q 10,30 -74,30  z"
                       dur="1s" />
                    <animate id="animation3"
                       attributeName="d"
                       attributeType="XML"
                       begin="animation2.end"
                       from="M 327,218
                       q 45,-45 74,-30
                       q 10,30 -74,30 z"
                       to="M 325,185
                       q 75,-25 77,20
                       q -8,20 -77,-20 z"
                       dur="1s" />          
                   </path>
                </g>
            <g id="leftPincer" stroke="blue" stroke-width="4" fill="black">
                <path d="M 198,208
                     q 10,-30 77,20
                     q-80,10 -77,-20 z">
                  <animate id="animation1b"
                     attributeName="d"
                     attributeType="XML"
                     from="M 198,208
                     q 10,-30 77,20
                     q-80,10 -77,-20 z"
                     to="M 203, 195
                     q -15,-30 77,-20
                     q -40,40 -77,20 z" 
                     begin="0;animation3b.end" dur="1s"/>
                  <animate id="animation2b"
                     attributeName="d"
                     attributeType="XML"
                     begin="animation1b.end"
                     from="M 203,195
                     q -15,-30 77,-20 
                     q -40,40 -77,20 z"
                     to="M 215,208
                     q 20,-30 79,10
                     q-85,20 -79,-10 z"
                     dur="1.5s" />
                   <animate id="animation3b"
                     attributeName="d"
                     attributeType="XML"
                     begin="animation2b.end"
                     from="M215,208
                     q 20,-30 79,10
                     q-85,20 -79,-10 z"
                     to=" M 198,208
                     q 10,-30 77,20
                     q-80,10 -77,-20z"
                     dur="1s" />       
               </path>
    </svg>
</div>

<div id="content"></div>
<script>
var dataset = [[100,100,0,0],[100,100,100,0],[100,100,0,100],[100,100,100,100]];
result = dataset.reduce(function(max, arr) {
     return max >= arr[0] ? max : arr[0];
            }, -Infinity);
let w = 10000;
let h = 10000;
</script>
     <br>  
<?php
if (isset($_SESSION['userId'])){

echo '   <div class="container form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="queryword" id="queryword" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="query-submit" onclick="loadText()">Search</button>
      

  </div>

  <br>
  <br>
  <p>scroll down to mess with it.</p>
  <br>';
}
  else{
    echo '
    <div class="row">
    <div class="col-md-6">Sign up to test out features as they become avaiable.</div>
    <div class="col-md-6"><a href="signup.php"><button type="submit" name="signup-submit" class="btn btn-warning float-left d-inline">Signup</button></a></div>
  </div>

  <br>
  <br>
  <br>';
  }



?> 
      </div>
</div>





<?php
    require "footer.php"
?>