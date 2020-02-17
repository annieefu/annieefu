<?php
// DO NOT REMOVE!
include("includes/init.php");
// // DO NOT REMOVE!


$projects = "notcurrentpage";
$writing = "notcurrentpage";
$resume = "notcurrentpage";
$about = "currentpage"


?>

<?php include("includes/header.php"); ?>
<script>


jQuery(document).ready(function($){
  
  var $overlay = $('<div id="overlay" class="hero-img"></div>')
  var $image = $('<img>');
  
  $overlay.append($image);
  
  $('body').append($overlay);


  function vidPlay() {  
  $("#video1").get(0).play();  
};
function vidPause() {
	$("#video1").get(0).pause();
};

function vid2Play() {  
  $("#video2").get(0).play();  
};
function vid2Pause() {
	$("#video2").get(0).pause();
};

  //Hover and show in big image
  $('#link1').hover(function(){
    $('#img1').show()

    $("#photodiv").hide();
    $("#vidplayer").hide();
    $("#img2").hide();
    $("#img3").hide();
    $("#img4").hide();
    $("#artdiv").hide();
    vidPause();
    vid2Pause();
});

$('#link2').hover(function(){
    $("#img2").show();

    $('#img1').hide()
    $("#img3").hide();
    $("#img4").hide();
    $("#photodiv").hide();
    $("#vidplayer").hide();
    
    $("#artdiv").hide();
    vidPause();
    vid2Pause();
});

$('#link3').hover(function(){
    $("#img3").show();

    $("#photodiv").hide();
    $("#vidplayer").hide();
    
    $("#img1").hide();
    $("#img2").hide();
    $("#img4").hide();
    $("#artdiv").hide();
    vidPause();
    vid2Pause();
});

$('#link4').hover(function(){
    $("#img4").show();
    
    
    
    $("#img2").hide();
    $("#img3").hide();
    $("#artdiv").hide();
    $("#img1").hide();
    $("#photodiv").hide();
    $("#vidplayer").hide();
    vidPause();
    vid2Pause();
  
});

$('#link5').hover(function(){

    $("#photodiv").show();
    $("#vidplayer").hide();
    
    $("#img1").hide();
    $("#img2").hide();
    $("#img3").hide();
    $("#img4").hide();
    $("#artdiv").hide();
    vidPause();
    vid2Pause();

});


$('#link6').hover(function(){ /************    PIANO VID       ************/
    $("#img1").hide();
    $("#img2").hide();
    $("#img3").hide();
    $("#img4").hide();
    $("#photodiv").hide();
    $("#artdiv").hide();
    $("#vidplayer").show();
    $('#vidplayer video').attr('class', "thumb-img");
    vidPlay();
    vid2Pause();
    $( "#cap6" ).show();


    
  
});


$('#link7').hover(function(){
    $("#artdiv").show();
    
    
    $("#vidplayer").hide();

    $("#photodiv").hide();
    $("#div").hide();
    $("#img1").hide();
    $("#img2").hide();
    $("#img3").hide();
    $("#img4").hide();
    vidPause();
    vid2Play();
});
  
  




});

</script>


<body class="home">
<h2 class="headingabout container">About Me
    <a href="mailto:af397@cornell.edu" class="aboutnav fas fa-envelope sm fa-fw" target="_blank" ></a>
    <a href="https://linkedin.com/in/annie--fu/" class="aboutnav fab fa-linkedin sm fa-fw" target="_blank"></a>
    <a href="https://medium.com/@annie99fu" class="fab fa-medium-m med fa-fw" target="_blank"></a>
    <a href="https://instagram.com/annieefu" class="fab fa-instagram med fa-fw" target="_blank"></a>
    <a href="https://twitter.com/annieefu" class="fab fa-twitter med fa-fw" target="_blank"></a>
</h2>
<div class="container">
<hr width= "100%" class="border03"></div>
<div class = "container hero">
      <div class="row">
        <div class="col-sm-12 col-lg-8">
<p> Hello! Thanks for browsing my work. I'm a designer and developer who loves to use code and creavity 
    to enrich the human experience. I believe well-designed technology holds the capability to <strong>heal, strengthen, and educate communities.</strong></p>

    <p>My work is often inspired by my favorite <strong> <a href="#" id="link1" class="hoverlink"> literature,</a>
    <a href="#" id="link2" class="hoverlink"> artists,</a> and <a href="#" id="link3" class="hoverlink">my friends and family.</a></strong></p>
    

<p> In my free time, I like to <strong><a href="#" id="link4" class="hoverlink">run,</a> <a href="#" id="link5" class="hoverlink"> shoot film,</a> <a href="#" id="link6" class="hoverlink">play & teach piano,</a> <a href="#" id="link7" class="hoverlink"> and draw.</a></strong></p>
<div id="photodiv" style="display: none; text-align: center; margin-top: 10px;">
<img src="images/photo1.jpg" class="thumb2-img"></img>
<img src="images/photo3.jpg" class="thumb2-img"></img>
<img src="images/photo2.jpg" class="thumb2-img"></img>
<img src="images/photo4.jpg" class="thumb2-img"></img>
</div>





<div id="artdiv" style="display: none; margin-top: 10px;">
<img src="images/birdwater.jpg" style="display: inline-block;" class="thumb2-img"></img>
<img src="images/sleepintoday.jpg" style="display:inline-block;"  class="thumb2-img"></img>

<img src="images/invisiblecities.png" style="display:inline-flex; vertical-align: top;" class="thumb2-img"></img>


<video id="video2" class="thumb2-img" style="display:inline-flex"  loop>
      <source src="images/flight3.mov" type="video/mp4" ></video>

      <figcaption><i>Finch Study:</i> Watercolor</figcaption>
      <figcaption><i>Bike Dream:</i> Pencil + Pen</figcaption>
      <figcaption><i>Invisible Cities:</i> Multimedia</figcaption>
      <figcaption class="hidedis"><i>Flight 3</i> Paper, Pencil, Multimedia </figcaption>
</div>



<div>
<span id="vidplayer"  style="display: none;"><video id="video1" style="margin:auto;" loop>
      <source src="images/trimpiano.MP4" type="video/mp4">
      </video><figcaption id="cap6"> Fantaisie Impromptu by Chopin</caption></span></div>


      <div id="img1" style="display:none;"> <img src="images/titles.png" class="thumb1-img"></img></div>
      <div id = "img2" style="display:none;"><img src="images/fka1.png" class="thumb-img"></img><figcaption>FKA Twigs; musician, dancer, fashion icon</figcaption></div>
      <div id = "img3" style="display:none;"><img src="images/wcon.JPG" class="thumb-img"></img><figcaption>Me and my sister Connie (I'm on the right)</figcaption></div>
      <div id = "img4" style="display:none;"><img src="images/run.jpg" class="thumb-img"></img><figcaption>I love half marathons</figcaption></div>



</div>
<div class="col-sm-4 col-lg-4">
<img src="/images/prof2.JPG" class = "about-img" alt="A girl "></img>
</div>

</div>
</div>
</div>

</body>

<?php include("includes/footer.php"); ?>

</html>
