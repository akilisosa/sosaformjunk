function buildWebs(){



                         
    //creates the objects in the canvas
        var container = d3.selectAll("div")
                        .data(dataset)
                         .enter()
                        .append("div");
console.log("so is this");
            container.style("width", 100)
                     .style("height", 100)
                     .style("backgroundcolor","lightblue")
                     .attr("stroke","orange")
                     .attr("id", function(d,i){
                                   return "circle" +i;
                               })
                    .attr("x", function(d, i) {		//Set new x position, based on the updated xScale
                          return d[0]+d[2];
                          })
                        .attr("y", function(d) {		//Set new y position, based on the updated yScale
                          return d[1]+d[3];
                          })        
                    

var topLeftCircle = container.select("#circle0")
                        .attr("fill","green");
     topLeftCircle.on("click", topLeftWeb);

var topRightCircle = container.select("#circle1")
                        .attr("fill","red");
     topRightCircle.on("click", topRightWeb);
                      
var bottomRightCircle = container.select("#circle3")
                        .attr("fill","orange");
     bottomRightCircle.on("click", bottomRightWeb);

var bottomLeftCircle = container.select("#circle2")
                        .attr("fill","purple");
    bottomLeftCircle.on("click", bottomLeftWeb);



function drawWeb(dataset){  
                       
    var clicked = container.selectAll("div")	//Select all circles
                               .data(dataset);
                   //this keeps all the circles with their old id's 
                 clicked.enter()  //then it updates everything
                        .append("div")
                        .attr("id", function(d,i){
                             return "circle" +i; 
                             })
                        .attr("x", function(d, i) {		//Set new x position, based on the updated xScale
                          return d[0]+d[2];
                          })
                        .attr("y", function(d) {		//Set new y position, based on the updated yScale
                          return d[1]+d[3];
                          })        
              .merge(clicked)				//Merges the enter selection with the update selection
                  .transition()				//Initiate a transition on all elements in the update selection (all rects)
                  .duration(1500)
                      .attr("x", function(d, i) {		//Set new x position, based on the updated xScale
                          return d[0]+d[2];
                          })
                      .attr("y", function(d) {		//Set new y position, based on the updated yScale
                          return d[1]+d[3];
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

let newTopRightCenterCircle = container.select("#circle"+ ( dataset.length -3))
                                .attr("fill","red")
                                .on("click", topRightWeb);
                    
let newTopLeftCircle = container.select("#circle"+ ( dataset.length -2))
                                .attr("fill","green")
                                .on("click", topLeftWeb);

let newBottomRightCircle = container.select("#circle"+ ( dataset.length -1))
                                .attr("fill","orange")
                                .on("click", bottomRightWeb);

}



function topRightWeb(){

var CXVariable = d3.select(this).attr("x");
var numCXVariable = Number(CXVariable);
         
      
var CYVariable = d3.select(this).attr("y");
var numCYVariable = Number(CYVariable);

mutateTopRightData(numCXVariable,numCYVariable);

drawWeb(dataset);
//needs to be a check to see how many datapoints to add. 
addTopRightNodes(dataset);

                    return dataset;
                    }

/*888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
888888888         88888888  888888888888       88888888888888888888888888888888888888888888888888888888888888888
888888888888  888888888888  888888888888  8888888888888888888888888888888888888888888888888888888888
888888888888  888888888888  888888888888      8888888888888888888888888888888888888888888888888888888888
888888888888  888888888888  888888888888  888888888888888888888888888888888888888888888888888888888
888888888888  888888888888  888888888888  8888888888888888888888888888888888888888888888888888888888
888888888888  888888888888      88888888  88888888888888888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888*/

function addTopLeftNodes(dataset){
let newTopLeftCircle = svg.select("#circle"+ ( dataset.length -3))
        .attr("fill","green")
        .on("click", topLeftWeb);

let newTopRightCenterCircle = svg.select("#circle"+ ( dataset.length -2))
                                .attr("fill","red")
                                .on("click", topRightWeb);
let newBottomRightCenterCircle = svg.select("#circle"+ ( dataset.length -1))
                                .attr("fill","purple")
                                .on("click", bottomLeftWeb);

}


function topLeftWeb(){
    
var CXVariable = d3.select(this).attr("x");
var numCXVariable = Number(CXVariable);
         
      
var CYVariable = d3.select(this).attr("y");
var numCYVariable = Number(CYVariable);

mutateDataTopLeft(numCXVariable,numCYVariable);
//needs a check to see how many dataspoints to add
    drawWeb(dataset);  
    addTopLeftNodes(dataset);
                return dataset;
                }  




/*888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
888888     88888888888  88888888888      88888888888888888888888888888888888888888888888888888888888888
888888  88  8888888888  88888888888  888888888888888888888888888888888888888888888888888888888888888
888888     88888888888  88888888888  8888888888888888888888888888888888888888888888888888888888888888
888888  88  8888888888  88888888888      888888888888888888888888888888888888888888888888888888888888888
888888  88  8888888888  88888888888  888888888888888888888888888888888888888888888888888888888888888
888888      8888888888     88888888  88888888888888888888888888888888888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888*/

function addBottomLeftNodes(dataset){
let newBottomLeftCircle = svg.select("#circle"+ ( dataset.length -3))
                    .attr("fill","purple")
                    .on("click", bottomLeftWeb);

let newBottomTopLeftCircle = svg.select("#circle"+ ( dataset.length -2))
                    .attr("fill","red")
                    .on("click", topLeftWeb);
let newBottomRightCircle = svg.select("#circle"+ ( dataset.length -1))
                    .attr("fill","yellow")
                    .on("click", bottomRightWeb);
}



function bottomLeftWeb(){


    var CXVariable = d3.select(this).attr("x");
        var numCXVariable = Number(CXVariable);
                     
                  
    var CYVariable = d3.select(this).attr("y");
        var numCYVariable = Number(CYVariable);
        


            mutateDataBottomLeft(numCXVariable,numCYVariable);
//needs a check to see how many dataspoints to add
                drawWeb(dataset);  
                addBottomLeftNodes(dataset);
      
                            return dataset;
                            }  

/*888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
888888     888888888      88888888888         888888888888888888888888888888888888888888888888888888888888888888888
888888  88 888888888  88  88888888888  88888888888888888888888888888888888888888888888888888888888888888
888888  88 888888888  88  88888888888  88888888888888888888888888888888888888888888888888888888888888888                    
888888     888888888  8  888888888888      888888888888888888888888888888888888888888888888888888888888888888
888888  88  88888888  88  88888888888  88888888888888888888888888888888888888888888888888888888888888888
888888  88  88888888  888   888888888  8888888888888888888888888888888888888888888888888888888888888888888
888888     888888888  8888   88888888  8888888888888888888888888888888888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/
            

function addBottomRightWebNodes(dataset){

let newBottomRightCenterCircle = svg.select("#circle"+ ( dataset.length -3))
                                .attr("fill","yellow")
                                .on("click", bottomRightWeb);
                    
let newBottomLeftCircle = svg.select("#circle"+ ( dataset.length -1))
                                .attr("fill","purple")
                                .on("click", bottomLeftWeb);
let newTopRightCircle = svg.select("#circle"+ ( dataset.length -2))
                                .attr("fill","red")
                                .on("click", topRightWeb);

}

function bottomRightWeb(){

var CXVariable = d3.select(this).attr("x");
var numCXVariable = Number(CXVariable);
         
      
var CYVariable = d3.select(this).attr("y");
var numCYVariable = Number(CYVariable);

mutateBottomRightData(numCXVariable,numCYVariable);
    

        drawWeb(dataset);
//needs to be a check to see how many datapoints to add. 
addBottomRightWebNodes(dataset);
                    return dataset;
                    }          
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
      






88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
/*8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
88888888888          8888888888  8888888     888      8888            8888888888888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888  888888  888888888888 88888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888  888888     888888888 88888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888  8888888    8888  888888888888 888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888   888888  888888  888888888888 888888888888888888888888888888888888888888888888888888888
88888888888888   88888888888888       88     888  888888888888 8888888888888888888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888*/ 
function mutateDataTopLeft(numCXVariable, numCYVariable){

let leftCenterBranch = [numCXVariable-100, numCYVariable-100, 0, 0];
let leftRightBranch = [numCXVariable-100, numCYVariable-100,100,0];
let leftBottomBranch = [numCXVariable-100, numCYVariable-100,0,100];



if (checkDataset(leftCenterBranch,dataset)===false){
            dataset.push(leftCenterBranch);
            }        
           else{
              
     
                    let a = dataset;//get old data set
                    let b = [100,100,0,0];//variable im going to change it by
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
                let b = [0,100,0,0];//variable im going to change it by
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
                let b = [100,0,0,0];//variable im going to change it by
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
    let b = [100,0,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }
if((leftCenterBranch[1]+leftCenterBranch[3] === 0)){
    
    let a = dataset;//get old data set
    let b = [00,100,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }


    return dataset;
};

/*8888888888888888888888888888888888888888888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888
8888888         8888888     8888    888888      88888 8888 88        8888888888888888888888888888888888888888888888888
8888888888   8888888888  88  8888 8888888  8888888888 8888 88888 8888888888888888888888888888888888
8888888888   8888888888  888 8888 888888   8888888888      88888 88888888888888888888888888888888888888
8888888888   8888888888     88888 888888  8888     88 8888 88888 88888888888888888888888888888888888888
8888888888   8888888888  888 8888 888888   888    888 8888 88888 8888888888888888888888888888888888888
8888888888   8888888888  8888 88    888888      88888 8888 88888 888888888888888888888888888888888888
88888888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/

function mutateTopRightData(numCXVariable,numCYVariable){

let rightCenterBranch = [ 100, numCYVariable-100, numCXVariable,0 ];
let rightLeftBranch = [100,numCYVariable-100,numCXVariable-100, 0];
let rightBottomBranch = [100,numCYVariable,numCXVariable, 0];

if (checkDataset(rightCenterBranch,dataset)===false){
            dataset.push(rightCenterBranch);
            }        
           else{

                    let a = dataset;//get old data set
                    let b = [0,100,100,0];//variable im going to change it by
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
                let b = [0,0,100,0];//variable im going to change it by
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
                let b = [00,100,0,0];//variable im going to change it by
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
    let b = [00,100,0,0];//variable im going to change it by
    let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                    return x.map(function(y,j){
                            return y+b[j];
                                  });                  
                                 }); 
     dataset = (newDataset);
    
        }




    return dataset;
};


/*888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
88888888     88888  8888888     888      888       8888888888888888888888888888888888888888888888888888888888888888888888888888888
88888888  88  8888  8888888  888888  888888888  888888888888888888888888888888888888888888888888888888888888888888888
88888888    888888  8888888  888888  888888888  888888888888888888888888888888888888888888888888888888888888888888888
88888888  88  8888  8888888     888     888888  8888888888888888888888888888888888888888888888888888888888888888888888888
88888888  88  8888  8888888  888888  888888888  8888888888888888888888888888888888888888888888888888888888888888888
88888888     88888      888     888  888888888  888888888888888888888888888888888888888888888888888888888888888888888888888
888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888*/
function mutateDataBottomLeft(numCXVariable, numCYVariable){


let bottomLeftCenterBranch = [numCXVariable-100, 0, 0, numCYVariable+100];
let bottomLeftTopBranch = [numCXVariable-100, 0,0, numCYVariable];
let bottomLeftRightBranch = [numCXVariable, 0,0,numCYVariable+100];

if (checkDataset(bottomLeftCenterBranch,dataset)===false){
          dataset.push(bottomLeftCenterBranch);
          }        
         else{

                  let a = dataset;//get old data set
                  let b = [100,0,0,0];//variable im going to change it by
                   newDataset = a.map(function(x,i){
                       
                       if ((dataset[i][0]+dataset[i][1]+dataset[i][2]+dataset[i][3]) >= (bottomLeftCenterBranch[0]+bottomLeftCenterBranch[1]+bottomLeftCenterBranch[2]+bottomLeftCenterBranch[3]) ){
                           return x.map(function(y,j){
                               return y+b[j];
                           });
                       }else {return x;}  //eachtime values are 
                                                           //greater that or equal to it
                   });
                  
              

          dataset = newDataset;
          dataset.push(bottomLeftCenterBranch);    
          }



if (checkDataset(bottomLeftTopBranch,dataset)===false){
          dataset.push(bottomLeftTopBranch);
          } 
          else{

              let a = dataset;//get old data set
              let b = [100,0,100,0];//variable im going to change it by
              newDataset = a.map(function(x,i){
                       
              if ( (dataset[i][1]+dataset[i][3] ) >= (bottomLeftTopBranch[1]+bottomLeftTopBranch[3])) {
                           return x.map(function(y,j){
                               return y+b[j];
                           });
                       }else {return x;}  //eachtime values are 
                                                           //greater that or equal to it
                   });
                  
                
          dataset = newDataset;
          dataset.push(bottomLeftTopBranch);
          }


if (checkDataset(bottomLeftRightBranch,dataset)===false){
          dataset.push(bottomLeftRightBranch);
          }       
           else{
  
              let a = dataset;//get old data set
              let b = [0,0,100,0];//variable im going to change it by
              newDataset = a.map(function(x,i){
                       
              if ( (dataset[i][0]+dataset[i][2] ) >= (bottomLeftRightBranch[0]+bottomLeftRightBranch[2])) {
                           return x.map(function(y,j){
                               return y+b[j];
                           });
                       }else {return x;}  //eachtime values are 
                                                           //greater that or equal to it
                   });
                  
             
          dataset = newDataset;
          dataset.push(bottomLeftRightBranch);
          }
             


if((bottomLeftTopBranch[0]+bottomLeftTopBranch[2] === 0)){
  
  let a = dataset;//get old data set
  let b = [100,0,0,0];//variable im going to change it by
  let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
                  return x.map(function(y,j){
                          return y+b[j];
                                });                  
                               }); 
   dataset = (newDataset);
  
      }

  return dataset;
};

/*88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
8888888888888    8888888     888888  88888     888888  888  888        8888888888888888888888888888888888888888888888888888
8888888888888  88 888888  88  88888  888  88888888888  888  888888 88888888888888888888888888888888888888888888
8888888888888     888888  8   88888  888  88888 88888  888  888888 88888888888888888888888888888888888888888888888
8888888888888  88  88888  88 888888  888  8888    888       888888 8888888888888888888888888888888888888888888888888888
8888888888888  888 88888  888  8888  8888   88    888  888  888888 888888888888888888888888888888888888888888888888888
8888888888888      88888  8888  888  88888       8888  888  888888 88888888888888888888888888888888888888888888888888
8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888/*/

function mutateBottomRightData(numCXVariable,numCYVariable){

let bottomRightCenterBranch = [ 100, 100, numCXVariable,numCYVariable ];
let bottomRightLeftBranch = [100,0,numCXVariable,numCYVariable];
let bottomRightTopBranch = [0,100,numCYVariable,numCXVariable];

if (checkDataset(bottomRightCenterBranch,dataset)===false){
dataset.push(bottomRightCenterBranch);
}        
else{

        let a = dataset;//get old data set
        let b = [0,0,100,100];//variable im going to change it by
         newDataset = a.map(function(x,i){
             
             if ((dataset[i][0]+dataset[i][1]+dataset[i][2]+dataset[i][3]) >= (bottomRightCenterBranch[0]+bottomRightCenterBranch[1]+bottomRightCenterBranch[2]+bottomRightCenterBranch[3]) ){
                 return x.map(function(y,j){
                     return y+b[j];
                 });
             }else {return x;}  //eachtime values are 
                                                 //greater that or equal to it
         });
        

dataset = newDataset;
dataset.push(bottomRightCenterBranch);    
}


if (checkDataset(bottomRightLeftBranch,dataset)===false){
dataset.push(bottomRightLeftBranch);
} 
else{

    let a = dataset;//get old data set
    let b = [0,0,100,0];//variable im going to change it by
    newDataset = a.map(function(x,i){
             
    if ( (dataset[i][1]+dataset[i][3] ) >= (bottomRightLeftBranch[1]+bottomRightLeftBranch[3])) {
                 return x.map(function(y,j){
                     return y+b[j];
                 });
             }else {return x;}  //eachtime values are 
                                                 //greater that or equal to it
         });
        
    
       
dataset = newDataset;
dataset.push(bottomRightLeftBranch);
}

 

if (checkDataset(bottomRightTopBranch,dataset)===false){
dataset.push(bottomRightTopBranch);
}       
 else{

    let a = dataset;//get old data set
    let b = [00,100,0,0];//variable im going to change it by
    newDataset = a.map(function(x,i){
             
    if ( (dataset[i][0]+dataset[i][2] ) >= (bottomRightTopBranch[0]+bottomRightTopBranch[2])) {
                 return x.map(function(y,j){
                     return y+b[j];
                 });
             }else {return x;}  //eachtime values are 
                                                 //greater that or equal to it
         });
        
   
dataset = newDataset;
dataset.push(bottomRightTopBranch);
}
   
 




if((bottomRightCenterBranch[1]+bottomRightCenterBranch[3] === 0)){

let a = dataset;//get old data set
let b = [00,100,0,0];//variable im going to change it by
let newDataset = a.map(function(x,i){  //i don't know howthis works but i add datasets
        return x.map(function(y,j){
                return y+b[j];
                      });                  
                     }); 
dataset = (newDataset);

}

return dataset;
};

            
