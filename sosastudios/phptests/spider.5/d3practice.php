<?php
require "header.php";
?>
<body >
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="buildweb.js"></script>

<script>var dataset = [[300,300,0,0],[300,300,300,0],[300,300,0,300],[300,300,300,300]]; </script>

<div class="position-absolute">
<section></section>
<div><button onclick="buildweb();">buildweb</button></div>

<style>

html {
    padding-bottom:50px;
}
dialog.bar{
    display: block;
    width:200px;
    height:200px;
    background-color:teal;
    position: absolute;
    margin: auto;
}
    </style>



<?php 

require "footer.php";

?>

