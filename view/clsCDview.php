<?php

class clsCDview
{
  public static function selectCD($CDarray)
  {
      $nr=999;
      $innerhtml="";
      $lauf=0;
      foreach($CDarray as $CD)
      {
        $innerhtml.='<br><input type="checkbox" id="'.$lauf.'" name="'.$lauf.'" value="'.$lauf.'"><label for="'.$lauf.'">'.$CD[0].'</label>';
        $lauf++;
      }
      $html='Auswahl CDs:<br><br><form action="CDController.php"><div>';
      $html.=$innerhtml;
      $html.='  <div><button type="submit">zeige</button></div><br></div></form>';
      echo ($html);
  }

 public static function putImages($CDImagesarray)
 {
      $html="das wurde ausgew&auml;lt:<br><table>";
      foreach($CDImagesarray as $CDImage)
      {
        $html.='<tr><td><img src="'.$CDImage.'" height="120" width="120"></td></tr>';
      }
      $html.='</table><br><form action="CD.php"><div><button type="submit">nochmal</button></div><br></div></form>';
      echo ($html);
 }

}




?>