<?php

class clsUser
{
   public static function isOK($name,$pw) 
   {
      $filehandle=fopen("../temp/user.txt","r");
      $serialUser=fread($filehandle,filesize("../temp/user.txt"));
      $userarray=unserialize($serialUser);
      $ok=false;
      foreach($userarray as $user)
      {
        if ($user[0] === $name)
        {
          if ($user[1] === $pw)
          {
            $ok=true;
            break;
          }
        }
      }
      return ($ok);
   }
}

?>