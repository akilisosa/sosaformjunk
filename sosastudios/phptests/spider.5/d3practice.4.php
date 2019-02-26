<?php
require "header.php";
?>
<body >
<div class="position-absolute">
<section></section>
<div>

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

<script src="https://d3js.org/d3.v5.min.js"></script>
<script>

var dataset = [[300,300,0,0],[300,300,300,0],[300,300,0,300],[300,300,300,300]];

let w = 10000;
let h = 10000;



    //var dataset = [50,100,150,200,250];
    rectangles = d3.select("section").selectAll("dialog")
    .data(dataset)
    .enter()
    .append("dialog")
    .attr("class","bar")
    .attr("id", function(d,i){
         return "circle" +i;
                               })
    .style("top", function (d,i){
     return (d[1]+d[3])+"px";
    })
    .style("left", function(d, i) {		//Set new x position, based on the updated xScale
         return (d[0]+d[2])+"px";
        })
    .style("padding-right", "50px");

        


    var topLeftCircle = d3.select("#circle0")
                        .style("background-color","green");
     //topLeftCircle.on("click", topLeftWeb);

     var topRightCircle = d3.select("#circle1")
                        .style("background-color","red");
     topRightCircle.on("click", topRightWeb);
                      
var bottomRightCircle = d3.select("#circle3")
                        .style("background-color","orange");
     //bottomRightCircle.on("click", bottomRightWeb);

var bottomLeftCircle = d3.select("#circle2")
                        .style("background-color","purple");
    //bottomLeftCircle.on("click", bottomLeftWeb);


    function drawWeb(dataset){  
                       
                       var clicked = rectangles	//Select all circles
                                                  .data(dataset);
                                      //this keeps all the circles with their old id's 
                                    clicked.enter()  //then it updates everything
                                           .append("dialog")
                                           .attr("class","bar")
                                           .attr("id", function(d,i){
                                                return "circle" +i; 
                                                })
                                                .style("top", function (d,i){
                                                         return "'"+(d[1]+d[3])+"px"+"'";
                                                          })
                                                          
                                                .style("left", function(d, i) {		//Set new x position, based on the updated xScale
                                                           return (d[0]+d[2])+"px";
                                                         })
                                                .style("padding-right", "50px")  
                                            .text("this is something")   
                                 .merge(clicked)				//Merges the enter selection with the update selection
                                     .transition()				//Initiate a transition on all elements in the update selection (all rects)
                                     .duration(1500)
                                     .attr("class","bar")
                                    // .style("top", function (d,i){
                                    //                     return (d[1]+d[3])+'px';
                                    //                      })
                                     
                                     .style("left", function(d, i) {		//Set new x position, based on the updated xScale
                                                           return (d[0]+d[2])+"px";
                                                         })
                                     .style("top", function(d, i) {		//Set new x position, based on the updated xScale
                                                           return (d[1]+d[3])+"px";
                                                         });
    }
                                          

                                          
/*888888888888888888888888888888888888888888888888888888888888888888888888888
888888        8888888     888888888      88888888888888888888888888888888888888888888888888888888888
888888888  8888888888  88  88888888  88888888888888888888888888888888888888888888888888888
888888888  8888888888  88  88888888  88888888888888888888888888888888888888888888888888888
888888888  8888888888     888888888      888888888888888888888888888888888888888888888888888888
888888888  8888888888  888 88888888  888888888888888888888888888888888888888888888888888
888888888  8888888888  8888 8888888  88888888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/           
      
function addTopRightNodes(dataset){

let newTopRightCenterCircle = d3.select("#circle"+ ( dataset.length -3))
                                .attr("background-color","red")
                                .on("click", topRightWeb);
                    
let newTopLeftCircle = d3.select("#circle"+ ( dataset.length -2))
                                .attr("background-color","green")
                              //  .on("click", topLeftWeb);

let newBottomRightCircle = d3.select("#circle"+ ( dataset.length -1))
                                .attr("background-color","orange")
                              //  .on("click", bottomRightWeb);

}

function topRightWeb(){
    
var CXVariable = d3.select(this).style("left");
var numCXVariable = parseInt(CXVariable, 10);
 
var CYVariable = d3.select(this).style("top");
var numCYVariable = parseInt(CYVariable, 10);
mutateTopRightData(numCXVariable,numCYVariable);

drawWeb(dataset);
//needs to be a check to see how many datapoints to add. 
addTopRightNodes(dataset);

    return dataset;
                    }

/*888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
888888      8888888    88888        888888    88888888888888888888888888888888888888888888888888888888888888888888888
888888 888   88888  88  8888888  88888888  88  88888888888888888888888888888888888888888888888888888888888888
888888 8888  88888  88  8888888  88888888  88  8888888888888888888888888888888888888888888888888888888888888
888888 88888 8888  8888  888888  8888888  8888  888888888888888888888888888888888888888888888888888888888888
888888 8888  8888  8888  888888  8888888  88888  888888888888888888888888888888888888888888888888888888888888
888888      8888  888888  88888  888888  8888888   888888888888888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/


function checkDataset (arr, dataset){     
for (var i = 0; i < dataset.length; i++) {
    if (
        ((dataset[i][0]+dataset[i][2] )=== (arr[0]+arr[2]))
    &&  ((dataset[i][1]+dataset[i][3]) == (arr[1]+arr[3])) ){
        return true;
         }
     }
 return false;
   }
      


/*8888888888888888888888888888888888888888888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888
8888888         8888888     8888    888888      88888 8888 88        88888888888
8888888888   8888888888  88  8888 8888888  8888888888 8888 88888 8888888888888888888888888888888888
8888888888   8888888888  888 8888 888888   8888888888      88888 88888888888888888888888888888888888888
8888888888   8888888888     88888 888888  8888     88 8888 88888 88888888888888888888888888888888888888
8888888888   8888888888  888 8888 888888   888    888 8888 88888 8888888888888888888888888888888888888
8888888888   8888888888  8888 88    888888      88888 8888 88888 888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/

function mutateTopRightData(numCXVariable,numCYVariable){

let rightCenterBranch = [ 300, numCYVariable-300, numCXVariable,0 ];
let rightLeftBranch = [300,numCYVariable-300,numCXVariable-300, 0];
let rightBottomBranch = [300,numCYVariable,numCXVariable, 0];

if (checkDataset(rightCenterBranch,dataset)===false){
            dataset.push(rightCenterBranch);
            }        
           else{

                    let a = dataset;//get old data set
                    let b = [0,300,300,0];//variable im going to change it by
                     newDataset = a.map(function(x,i){
                         
                         if ((dataset[i][0]+dataset[i][1]+dataset[i][2]+dataset[i][3]) >= (rightCenterBranch[0]+rightCenterBranch[1]+rightCenterBranch[2]+rightCenterBranch[3]) ){
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
                    

            dataset = newDataset;
            dataset.push(rightCenterBranch);    
            }



if (checkDataset(rightLeftBranch,dataset)===false){
            dataset.push(rightLeftBranch);
            } 
            else{

     
                let a = dataset;//get old data set
                let b = [0,0,300,0];//variable im going to change it by
                newDataset = a.map(function(x,i){
                         
                if ( (dataset[i][1]+dataset[i][3] ) >= (rightLeftBranch[1]+rightLeftBranch[3])) {
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
                    

            dataset = newDataset;
            dataset.push(rightLeftBranch);
            }

if (checkDataset(rightBottomBranch,dataset)===false){
            dataset.push(rightBottomBranch);
            }       
             else{

                let a = dataset;//get old data set
                let b = [00,300,0,0];//variable im going to change it by
                newDataset = a.map(function(x,i){
                         
                if ( (dataset[i][0]+dataset[i][2] ) >= (rightBottomBranch[0]+rightBottomBranch[2])) {
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
                    

                   
            dataset = newDataset;
            dataset.push(rightBottomBranch);
            }
               
             




if((rightCenterBranch[1]+rightCenterBranch[3] === 0)){
    
    let a = dataset;//get old data set
    let b = [00,300,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }




    return dataset;
};


/*8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
88888888888          8888888888  8888888     888      8888            8888888888888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888  888888  888888888888 88888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888  888888     888888888 88888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888    8888  888888888888 888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888   888888  888888  888888888888 888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888       88     888  888888888888 8888888888888888888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888*/ 
function mutateDataTopLeft(numCXVariable, numCYVariable){

let leftCenterBranch = [numCXVariable-300, numCYVariable-300, 0, 0];
let leftRightBranch = [numCXVariable-300, numCYVariable-300,300,0];
let leftBottomBranch = [numCXVariable-300, numCYVariable-300,0,300];



if (checkDataset(leftCenterBranch,dataset)===false){
            dataset.push(leftCenterBranch);
            }        
           else{
                    let a = dataset;//get old data set
                    let b = [300,300,0,0];//variable im going to change it by
                     newDataset = a.map(function(x,i){
                         
                         if ((dataset[i][0]+dataset[i][1]+dataset[i][2]+dataset[i][3]) >= (leftCenterBranch[0]+leftCenterBranch[1]+leftCenterBranch[2]+leftCenterBranch[3]) ){
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
              
            dataset = newDataset;
            dataset.push(leftCenterBranch);    
            }

if (checkDataset(leftRightBranch,dataset)===false){
            dataset.push(leftRightBranch);
            } 
            else{

     
                let a = dataset;//get old data set
                let b = [0,300,0,0];//variable im going to change it by
                newDataset = a.map(function(x,i){
                         
                if ( (dataset[i][1]+dataset[i][3] ) >= (leftRightBranch[1]+leftRightBranch[3])) {
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
                    

            dataset = newDataset;
            dataset.push(leftRightBranch);
            }


if (checkDataset(leftBottomBranch,dataset)===false){
            dataset.push(leftBottomBranch);
            }       
                else{
     
                let a = dataset;//get old data set
                let b = [300,0,0,0];//variable im going to change it by
                newDataset = a.map(function(x,i){
                         
                if ( (dataset[i][0]+dataset[i][2] ) >= (leftBottomBranch[0]+leftBottomBranch[2])) {
                             return x.map(function(y,j){
                                 return y+b[j];
                             });
                         }else {return x;}  //eachtime values are 
                                                             //greater that or equal to it
                     });
                    

            dataset = newDataset;
            dataset.push(leftBottomBranch);
            }
               
             

//these are basic if staments if the object is on the outer egdges of everything. this needs to be a function. 


if((leftCenterBranch[0]+leftCenterBranch[2] === 0)){
    
    let a = dataset;//get old data set
    let b = [300,0,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }
if((leftCenterBranch[1]+leftCenterBranch[3] === 0)){
    
    let a = dataset;//get old data set
    let b = [00,300,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }


    return dataset;
};



    </script>
<?php 

require "footer.php";

?>

