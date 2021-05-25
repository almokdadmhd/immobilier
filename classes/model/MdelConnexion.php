<?php
require_once "connexion.php";
class ViewIConnexion
{
    public static function connexion ($mail, $pass)
    {
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $data = connexion();
        $requt = $data->prepare("INSERT INTO user VALUES (:mail,:pass)");
        $requt->execute([ ':mail' => $mail, ':pass' => $hash]);
    }
  
}