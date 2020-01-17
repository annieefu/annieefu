<?php
$linksarray = array (
    array("photo1.jpg"),
    array("photo2.jpg"),
    array("photo3.jpg"),
    array ("photo4.jpg"),
    array ("photo5.jpg"),
    array("photo6.jpg"),
    array("photo7.jpg"),
    array("photo8.jpg"),
    array("photo9.jpg"),
    array("photo10.jpg")
);

foreach ($linksarray as $img){
    echo ("<img src="."'images/"."$img[0]"."' alt = '"."$img[0]"."photo ' class = 'artbinimg'>");
}
?>
