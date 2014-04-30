<?php
include("parcel.class.php");
$y = new parcel("style.css");

/* Add your own class */

$y->parseClass("myClass");

echo $y->find("font-size", "myClass");

/* Find the color of P. */

echo $y->find("color", "p");


?>