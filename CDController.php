<?php

include ("model/clsCD.php");
include ("view/clsCDview.php");

  $CDarray=clsCD::getCDs();
  $html="";
  $CDImagesarray=array();
  foreach($_GET as $nr)
  {
    $CDimage=clsCD::getImage($nr); 
    array_push($CDImagesarray,$CDimage);
  }
  clsCDview::putImages($CDImagesarray);


?>