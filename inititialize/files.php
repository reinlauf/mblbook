<?php

$serialUser="";

$userarray=array();
$user=array("anton","1");
array_push($userarray,$user);
$user=array("berta","2");
array_push($userarray,$user);
$user=array("christian","3");
array_push($userarray,$user);
$user=array("dietmar","4");
array_push($userarray,$user);
$user=array("emil","5");
array_push($userarray,$user);
print_r($userarray);
echo("<br>");
echo("<br>");
foreach($userarray as $user)
{
  echo ($user[0]."<br>");
}
echo("<br>");
echo("<br>");

$serialUser=serialize($userarray);
echo ("<br>".$serialUser);
$filehandle=fopen("../../temp/user.txt","w+");
fwrite($filehandle,$serialUser);
fclose($filehandle);
echo("<br>");
echo("<br>");

$filehandle=fopen("../../temp/user.txt","r");
$serialUser=fread($filehandle,filesize("../../temp/user.txt"));
$userarray=unserialize($serialUser);
print_r($userarray);
echo("<br>");
echo("<br>");

$serialCD="";

$CDarray=array();
$CD=array("Jimi Hendrix","../temp/1.jpg");
array_push($CDarray,$CD);
$CD=array("Rolling Stones","../temp/2.jpg");
array_push($CDarray,$CD);
$CD=array("Aretha Franklin","../temp/3.jpg");
array_push($CDarray,$CD);
$CD=array("Bob Marley","../temp/4.jpg");
array_push($CDarray,$CD);
$CD=array("Renft Combo","../temp/5.jpg");
array_push($CDarray,$CD);
print_r($CDarray);
$serialCD=serialize($CDarray);
echo ("br".$serialCD);
$filehandle=fopen("../../temp/CD.txt","w+");
fwrite($filehandle,$serialCD);
fclose($filehandle);
echo("<br>");
echo("<br>");

$filehandle=fopen("../../temp/CD.txt","r");
$serialCD=fread($filehandle,filesize("../../temp/CD.txt"));
$CDarray=unserialize($serialCD);
print_r($CDarray);
echo("<br>");
echo("<br>");
echo ('<img src="../../temp/1.jpg" height="120" width="120">'); 
echo ('<img src="../../temp/2.jpg" height="120" width="120">');
echo ('<img src="../../temp/3.jpg" height="120" width="120">');
echo ('<img src="../../temp/4.jpg" height="120" width="120">');
echo ('<img src="../../temp/5.jpg" height="120" width="120">');
?>