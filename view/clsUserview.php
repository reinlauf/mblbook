<?php

class clsUserview
{
  public static function Login()
  {
    $html='<form action="CD.php"><div>Bitte anmelden:<br><br><table><tr><td><label for="login">Name:&nbsp;</label></td><td><input type="text" id="login" name="login"></td></tr>
    <tr><td><label for="passwort">Passwort:&nbsp;</label></td><td><input type="text" id="passwort" name="passwort"></td></tr>
    <tr><td col="2"><div><button type="submit">anmelden</button></div></div></form></td></tr></table>';
    echo ($html);
  }

}
?>