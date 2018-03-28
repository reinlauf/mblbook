<?php


class clsCD 
{
   public static function getCDs() 
   {
      $filehandle=fopen("../temp/CD.txt","r");
      $serialCD=fread($filehandle,filesize("../temp/CD.txt"));
      fclose($filehandle);
      return (unserialize($serialCD));
   } 
   public static function getImage($nr)
   {
      $filehandle=fopen("../temp/CD.txt","r");
      $serialCD=fread($filehandle,filesize("../temp/CD.txt"));
      fclose($filehandle);
      $CDarray=unserialize($serialCD);
      $CD=$CDarray[$nr];
      return($CD[1]);   
   }
   
   
}


?>