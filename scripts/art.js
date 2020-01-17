//when the document is ready
$(document).ready(function(){
    var images= [
      "images/invisiblecities.png",//index 0
      "images/ins1.jpg",//index 1
      "images/ins2.jpg",//index 2
      "images/ins3.jpg",//index 3
      "images/ins4.jpg",//index 4
      "images/ins5.jpg",//index 5
      "images/ins6.jpg",//index 6
      "images/ins7.jpg"//index 7
    ];
    var captions=[
      "The Invisible Cities",
      "River Sun",
      "Two Cities",
      "The Cold Spring",
      "Camping Table",
      "Have U Ever Feel Blue",
      "Typical Woods",
      "Long Sun Down River"
    ]

    var currentIndex = 0;
    var content = currentIndex.outerHTML;


    $("#slideNext").on("click", function () {
      currentIndex = currentIndex + 1;

      if (currentIndex >= images.length-1) {
        currentIndex = 0;
      }


       $("#slideImage").attr("src",images[currentIndex]);
    });

    $("#slidePrevious").on("click",function(){
      currentIndex = currentIndex -1;

      if(currentIndex <= 0){
        currentIndex = images.length-1
      }

      $("#slideImage").attr("src",images[currentIndex]);
    });


  })
