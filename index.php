<?php
include("parcel.class.php");
$y = new parcel("style.css");



echo $y->find("color", "p");


?>