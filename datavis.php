
<?php
// DO NOT REMOVE!
include("includes/init.php");
// // DO NOT REMOVE!


$projects = "currentpage";
$writing = "notcurrentpage";
$resume = "notcurrentpage";
$about="notcurrentpage";
$art = "notcurrentpage";
?>

<?php include("includes/header.php"); ?>

<body>




<h2 class="heading special">Assorted Data Visualizations</h2>
<div class="hero bodybin"><p>
Visualizations created for homework, projects, or for fun!</br></br>
</p></div>

<h3 class="heading special2"> BostonEats: Exploring Beantown Eateries </h3>
<div class="hero bodybin"><p>
Of all the goodeats in Boston, the multitude of equally mouthwatering choices can be overwhelming to even the most seasoned foodies. This visualization aims to provide smart recommendations
and simplify the search for your next great meal.
</br>Created with Python, Leaflet.js, D3.js, and HTML/CSS.
</p></div>

<div class="text-center halfspace">
<a class="button" target="_blank" href="
https://hw3-4310-dbs264-jjr265-af397.herokuapp.com/static/index.html">Live Version Here</a>
</div>
<img src="images/bostoneats.png" class="treeimg" alt="10 numbered images of trees, each with an address and a description, corresponding to a map of San Francisco county.">



<h3 class="heading special2">The San Francisco Heritage Tree Walk</h3>
<div class="hero bodybin"><p>Tall skyscrapers and cultural diversity are common ways to characterize a city,
    but what about more subtle markers of urban uniqueness? By parsing a dataset of over 500,000 San Francisco trees,
    I identified some of the city's rarest, most unique, and oldest trees in a rare celebration of greenery within Silicon Valley.
</br>Created with D3.js, HTML/CSS, and Adobe Illustrator.
</p></div>

<div class="text-center halfspace">
<a class="button" target="_blank" href="
https://af397-info4310-hw1.herokuapp.com/static/">Live Version Here</a>
</div>
<img src="images/treewalk.png" class="treeimg" alt="10 numbered images of trees, each with an address and a description, corresponding to a map of San Francisco county.">




    <h3 class="heading special2">The Analytics of Painting: Visualizing Bob Ross</h3>
<div class="hero bodybin"><p>Depicts the frequency and
    variety of different natural and man-made elements throughout 31 seasons of his paintings. </br>Created using D3.js and HTML/CSS.
</p></div>
</body>
    <svg id="bobmap" width = "1165" height ="590" >
</svg>
    <script>



const layer = d3.select("#bobmap");
  const bobmapChart = d3.select("#bobmap").append("g");
  const bobmapWidth = d3.select("#bobmap").attr("width");
  const bobmapHeight = d3.select("#bobmap").attr("height");

  const bobmapMarginBottom =  d3.select("#bobmap");
  
  const drawBobmap = async () => {

    // Load dataset
    const bobDat = await d3.csv("bob-ross-pros2.csv");
    console.log(bobDat);

    var entries = d3.nest()
    .key(function(d) { return d["SEASON"]; })
    .entries(bobDat);

    console.log(entries)

    // console.log(entries[0].values[13]["TITLE"])


// Build color scale
var myColor = d3.scaleLinear()
  .range(["white", "#046306"])
  .domain([0,13]);

  var matrix = new Array();
  var epmatrix = new Array();


// ACCUMULATING COUNTS FOR EACH SQUARE.

    // iterate for rows 

    for (var column = 0; column < 31; column++) {


        var mtep  = new Array();
    var sunep = new Array();
    var moonep = new Array();
    var waterep = new Array();
    var decidep = new Array();
    var conifep = new Array();
    var grassep = new Array();
    var flowersep = new Array();
    var cloudep = new Array();
    var beachep = new Array();
    var fogep = new Array();
    var winterep = new Array();
    var cabinep = new Array();
    var structureep= new Array();


  var mount = 0;
    var sun = 0;
    var moon = 0;
    var water = 0;
    var decid=0;
    var conif = 0;
    var grass = 0;
    var flowers =0;
    var cloud = 0;
    var beach = 0;
    var fog = 0;
    var winter = 0;
    var cabin = 0;
    var structure = 0;
        // iterate for cells/columns inside EACH EPISODE

    for (var row = 0; row < 13; row++) {
            if ((+(entries[column].values[row]["MOUNTAIN"]))==1 || (+(entries[column].values[row]["SNOWY_MOUNTAIN"])==1)){
                mount=mount+1;
            }

            if ((+(entries[column].values[row]["SUN"]))==1){
                sun=sun+1;
            }

            if ((+(entries[column].values[row]["MOON"]))==1){
                moon=moon+1;
            }

            if ((+(entries[column].values[row]["LAKE"])) ==1 || (+(entries[column].values[row]["RIVER"])) ==1 ||(+(entries[column].values[row]["WATERFALL"])) ==1 ||(+(entries[column].values[row]["OCEAN"])) ==1 || (+(entries[column].values[row]["WAVES"]))==1){
                water=water+1;
            }

            if ((+(entries[column].values[row]["DECIDUOUS"]))==1){
                decid=decid+1;
            }

            if ((+(entries[column].values[row]["CONIFER"]))==1){
                conif=conif+1;
            }

            if ((+(entries[column].values[row]["GRASS"]))==1){
                grass=grass+1;
            }

            if ((+(entries[column].values[row]["FLOWERS"]))==1){
                flowers=flowers+1;
            }

            if ((+(entries[column].values[row]["STRUCTURE"])) ==1 || (+(entries[column].values[row]["LIGHTHOUSE"])) ==1 ||  (+(entries[column].values[row]["WINDMILL"]))==1 || (+(entries[column].values[row]["BARN"]))==1 ){
                structure=structure+1;
        }
            
            cloud= (cloud + ((+(entries[column].values[row]["CLOUDS"]))));
            beach= (beach + (+(entries[column].values[row]["BEACH"])));

            fog= (fog + (+(entries[column].values[row]["FOG"])));
            winter= (winter + (+(entries[column].values[row]["WINTER"])));
            cabin= (cabin + (+(entries[column].values[row]["CABIN"])));
            // structure= (structure + (+(entries[row].values[column]["STRUCTURE"]))+ (+(entries[row].values[column]["LIGHTHOUSE"])) + (+(entries[row].values[column]["WINDMILL"]))+ (+(entries[row].values[column]["BARN"])))
             
           // ADD EPISODE TITLES TO LISTS IF THEIR VALUES ARE OVER 1!!!!!
           if (+(entries[column].values[row]["CLOUDS"]) >=1){
                cloudep.push(entries[column].values[row]["TITLE"])
            }

           if (+(entries[column].values[row]["MOUNTAIN"]) >=1){
                mtep.push(entries[column].values[row]["TITLE"])
           }

             if (+(entries[column].values[row]["SUN"]) >=1){
                sunep.push(entries[column].values[row]["TITLE"])
            }

             if (+(entries[column].values[row]["MOON"]) >=1){
                moonep.push(entries[column].values[row]["TITLE"])
            }
            if (((+(entries[column].values[row]["LAKE"]))+(+(entries[column].values[row]["RIVER"]))+ (+(entries[column].values[row]["WATERFALL"]))+ (+(entries[column].values[row]["OCEAN"]))+ (+(entries[column].values[row]["WAVES"]))) >=1 ){
                waterep.push(entries[column].values[row]["TITLE"])
            }

            if (+(entries[column].values[row]["DECIDUOUS"]) >=1){
                decidep.push(entries[column].values[row]["TITLE"])
            }
             if (+(entries[column].values[row]["CONIFER"]) >=1){
                conifep.push(entries[column].values[row]["TITLE"])
            }
           if (+(entries[column].values[row]["GRASS"]) >=1){
                grassep.push(entries[column].values[row]["TITLE"])
            }
            if (+(entries[column].values[row]["FLOWERS"]) >=1){
                flowersep.push(entries[column].values[row]["TITLE"])
            }

            

            if (+(entries[column].values[row]["BEACH"]) >=1){
                beachep.push(entries[column].values[row]["TITLE"])
            }

            if (+(entries[column].values[row]["FOG"]) >=1){
                fogep.push(entries[column].values[row]["TITLE"])
            }

           if (+(entries[column].values[row]["WINTER"]) >=1){
                winterep.push(entries[column].values[row]["TITLE"])
            }

            if (+(entries[column].values[row]["CABIN"]) >=1){
                cabinep.push(entries[column].values[row]["TITLE"])
            }
            if ((+(entries[column].values[row]["STRUCTURE"]) + (+(entries[column].values[row]["LIGHTHOUSE"])) + (+(entries[column].values[row]["WINDMILL"]))+ (+(entries[column].values[row]["BARN"]) >=1)))
            {
                structureep.push(entries[column].values[row]["TITLE"])
            }

            
             }
               
        
             matrix.push( [mount, sun, moon, water, decid,conif, grass,flowers,cloud,beach,fog, winter,cabin,structure]);
             epmatrix.push( [mtep, sunep, moonep, waterep, decidep, conifep, grassep, flowersep, cloudep, beachep, fogep, winterep, cabinep, structureep])
  }
    // console.log(mtep)
    console.log(matrix)
// console.log(entries[0].values[8]);

            

    function gridData() {
    var data = new Array();
    var xpos = 50; //starting xpos and ypos at 1 so the stroke will show when we make the grid below
    var ypos = 30;
    var width = 35;
    var height = 35;
    var bobdat = entries;

    // iterate for rows 
    for (var row = 0; row < 14; row++) {
        data.push( new Array() );

        // iterate for cells/columns inside rows FOR EMOJIS
        for (var column = 0; column < 31; column++) {
            data[row].push({
                x: xpos,
                y: ypos,
                width: width,
                height: height,
                fill: matrix[column][row],
                episode: epmatrix[column][row]
            })
            // increment the x position. I.e. move it over by 50 (width variable)
            xpos += width;
        }

        // reset the x position after a row is complete
        xpos = 50;

        // increment the y position for the next row. Move it down 50 (height variable)
        ypos += height; 
    }
    return data;
}

var gridData = gridData(); 
// console.log(gridData);
// console.log(entries[0].values[3]["MOUNTAIN"]);


var row = layer.selectAll(".row")
    .data(gridData)
    .enter().append("g")
    .attr("class", "row");

var column = row.selectAll(".square")
    .data(function(d) { return d; })
    .enter().append("rect")
    .attr("class","square")
    .on("mouseover", mouseOver)
    .on("mouseout", mouseOut)
    .attr("x", function(d) { return d.x; })
    .attr("y", function(d) { return d.y; })
    .attr("width", function(d) { return d.width; })
    .attr("height", function(d) { return d.height; })
    .attr("fill", function(d) { return myColor([d.fill]); })
    .style("stroke", "grey")


    let label = d3.select("#bobmap").append("text").attr("x", "50px").attr("y", "540px").attr("id", "label")
.attr("font-family","Arial");

let label2 = d3.select("#bobmap").append("text").attr("x", "50px").attr("y", "565px").attr("id", "label2")
.attr("font-family","Arial");

d3.select("#bobmap").append("text").attr("x", "5px").attr("y", "35px").attr("id", "label")
.attr("font-family","Arial").text("Element").attr("font-size", "10px");

d3.select("#bobmap").append("text").attr("x", "5px").attr("y", "15px").attr("id", "label")
.attr("font-family","Arial").text("Season").attr("font-size", "10px");

var ep0 = "";
    var ep1 = "";
    var ep2 = "";
    var ep3 = "";
    var ep4 = "";
    var ep5 = "";
    var ep6 = "";
    var ep7 = "";
    var ep8 = "";
    var ep9 = "";
    var ep10 = "";
    var ep11 = "";
    var ep12 = "";
    var ep13 = "";

  function mouseOver(){

d3.select(this)
    .attr("stroke", "black")
    .attr("stroke-width", 3)


let lab = d3.select(this).datum()['episode'];
    

if (lab.length ==1){
    ep0 = lab[0];
    ep1 = "";
    ep2 = "";
    ep3 = "";
    ep4 = "";
    ep5 = "";
    ep6 = "";
    ep7 = "";
    ep8 = "";
    ep9 = "";
     ep10 = "";
     ep11 = "";
    ep12 = "";
    ep13 = "";

}
else if (lab.length ==2){
    ep0 = lab[0] +", " ;
    ep1 = lab[1];
    ep2 = "";
    ep3 = "";
    ep4 = "";
    ep5 = "";
    ep6 = "";
    ep7 = "";
    ep8 = "";
    ep9 = "";
    ep10 = "";
    ep11 = "";
    ep12 = "";
    ep13 = "";

}
else if (lab.length ==3){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
    ep2 = lab[2];
    ep3 = "";
    ep4 = "";
     ep5 = "";
    ep6 = "";
 ep7 = "";
    ep8 = "";
     ep9 = "";
 ep10 = "";
    ep11 = "";
     ep12 = "";
    ep13 = "";

}
else if (lab.length ==4){
     ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
     ep2 = lab[2];
 ep3 = lab[3];
    ep4 = "";
     ep5 = "";
     ep6 = "";
     ep7 = "";
     ep8 = "";
     ep9 = "";
     ep10 = "";
     ep11 = "";
     ep12 = "";
    ep13 = "";

}
else if (lab.length ==5){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
    ep2 = lab[2] +", " ;
    ep3 = lab[3] +", " ;
     ep4 = lab[4];
    ep5 = "";
 ep6 = "";
     ep7 = "";
     ep8 = "";
     ep9 = "";
     ep10 = "";
     ep11 = "";
     ep12 = "";
     ep13 = "";

}
else if (lab.length ==6){
     ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
 ep2 = lab[2] +", " ;
    ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
     ep5 = lab[5];
     ep6 = "";
     ep7 = "";
     ep8 = "";
     ep9 = "";
     ep10 = "";
     ep11 = "";
     ep12 = "";
     ep13 = "";

}
else if (lab.length ==7){
    ep0 = lab[0] +", " ;
 ep1 = lab[1] +", " ;
     ep2 = lab[2] +", " ;
    ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
     ep5 = lab[5] +", " ;
     ep6 = lab[6];
    ep7 = "";
    ep8 = "";
     ep9 = "";
     ep10 = "";
     ep11 = "";
     ep12 = "";
     ep13 = "";

}
else if (lab.length ==8){
    ep0 = lab[0] + ", " ;
    ep1 = lab[1] +", " ;
 ep2 = lab[2] +", " ; 
     ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
    ep5 = lab[5] +", " ;
    ep6 = lab[6] +", " ;
    ep7 = lab[7];
    ep8 = "";
    ep9 = "";
    ep10 = "";
    ep11 = "";
    ep12 = "";
     ep13 = "";
}
else if (lab.length ==9){
    ep0 = lab[0] +", " ;
     ep1 = lab[1] +", " ;
     ep2 = lab[2] +", " ;
     ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
     ep5 = lab[5] +", " ;
 ep6 = lab[6] +", " ;
     ep7 = lab[7] +", " ;
    ep8 = lab[8];
     ep9 = "";
 ep10 = "";
    ep11 = "";
    ep12 = "";
}
else if (lab.length ==10){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
     ep2 = lab[2] +", " ;
     ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
    ep5 = lab[5] +", " ;
    ep6 = lab[6] +", " ;
    ep7 = lab[7] +", " ;
    ep8 = lab[8] +", " ;
    ep9 = lab[9];
    ep10 = "";
    ep11 = "";
    ep12 = "";
}
else if (lab.length ==11){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
     ep2 = lab[2] +", " ;
     ep3 = lab[3] +", " ;
     ep4 = lab[4] +", " ;
     ep5 = lab[5] +", " ;
     ep6 = lab[6] +", " ;
    ep7 = lab[7] +", " ;
    ep8 = lab[8] +", " ;
     ep9 = lab[9] +", " ;
     ep10 = lab[10];
     ep11 = "";
     ep12 = "";
}
else if (lab.length ==12){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
    ep2 = lab[2] +", " ;
    ep3 = lab[3] +", " ;
    ep4 = lab[4] +", " ;
    ep5 = lab[5] +", " ;
    ep6 = lab[6] +", " ;
    ep7 = lab[7] +", " ;
    ep8 = lab[8] +", " ;
    ep9 = lab[9] +", " ;
    ep10 = lab[10] +", " ;
    ep11 = lab[11];
    ep12 = "";
}
else if (lab.length ==13){
    ep0 = lab[0] +", " ;
    ep1 = lab[1] +", " ;
    ep2 = lab[2] +", " ;
    ep3 = lab[3] +", " ;
    ep4 = lab[4] +", " ;
    ep5 = lab[5] +", " ;
    ep6 = lab[6] +", " ;
     ep7 = lab[7] +", " ;
     ep8 = lab[8] +", " ;
     ep9 = lab[9] +", " ;
     ep10 = lab[10] +", " ;
     ep11 = lab[11] +", " ;
    ep12 = lab[12];
}
else{
    ep0 = "";
    ep1 = "";
    ep2 = "";
    ep3 = "";
    ep4 = "";
    ep5 = "";
    ep6 = "";
    ep7 = "";
    ep8 = "";
    ep9 = "";
    ep10 = "";
    ep11 = "";
    ep12 = "";
}



let fill = d3.select(this).datum()['fill'];
d3.select("#label")
.attr("font-size", "13px")
.text(ep0 +ep1 + ep2+  ep3+  ep4 + ep5 + ep6 )

d3.select("#label2")
.attr("font-size", "13px")
.text(ep7+ ep8 +ep9  + ep10  + ep11  + ep12)

  }

  function mouseOut(){
d3.select(this)

.attr("stroke", "grey")
.attr("stroke-width", 1)
   
d3.select("#label")
.text(""); 

  }

//SCALES 
const seasonScale = d3.scaleLinear().domain([1, 31])
                        .range([0, bobmapWidth]); 

    const emojiScale = d3.scaleLinear().domain([1, 14])
                        .range([bobmapHeight-230,0]); // invert height for coord system!
    // const stateScale = d3.scaleOrdinal(d3.schemeCategory10);
   




// Labels of row and columns
var emojis = [ "🏔️", "☀️", "🌙", "🌊", "🌳","🌲", "🌿", "🌼", "☁️", "🏖️", "🌫️", "❄️", "🏚️", "🏘️" ]
var seasons = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30" , "31"]


// Build X scales and axis:
var x = d3.scaleBand()
  .range([ 50, bobmapWidth-32 ])
  .domain(seasons)
layer.append("g")
  .attr("transform", "translate(0," + 5 + ")")

  .attr("font-color", "black")

  .attr("font-size", "20px")
  .call(d3.axisBottom(x)
  .tickSize(0))
  .select(".domain").remove();

var y = d3.scaleBand()
  .range([ 0, bobmapHeight-95 ])
  .domain(emojis)
  .padding(0.01);
layer.append("g")

.attr("transform", "translate("+ 48+ "," +30 + ")")
  .call(d3.axisLeft(y))
  .attr("color", "white")
.attr("font-size", "17px");



}
  drawBobmap();

    </script>


<?php include("includes/footer.php"); ?>
</html>