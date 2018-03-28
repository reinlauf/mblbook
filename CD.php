<?php

include ("model/clsUser.php");
include ("model/clsCD.php");
include ("view/clsUserview.php");
include ("view/clsCDview.php");


$login="";
$passwort="";
if (array_key_exists('login', $_GET)) $login=$_GET['login'];
if (array_key_exists('passwort', $_GET)) $passwort=$_GET['passwort'];

if (!clsUser::isOK($login,$passwort))
  header('Location: index.php');      
else
{
  $CDarray=clsCD::getCDs();
  clsCDview::selectCD($CDarray);
}

?>