<?php
require_once "connexion.php";
class ModelInscreption
{
    public static function ajoutInscreption($nom, $prenom, $mail, $pass, $tel, $token)
    {
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $data = connexion();
        $requt = $data->prepare("INSERT INTO user VALUES (null,:nom,:prenom,:mail,:pass,:tel,'0','0','0',:token)");
        $requt->execute([':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':pass' => $hash, ':tel' => $tel, ':token' => $token]);
    }
    public static function mailPresent($mail)
    {
        $data = connexion();
        $requt = $data->prepare("SELECT* from user WHERE mail=:mail");
        $requt->execute([':mail' => $mail]);
        return $requt->fetch(PDO::FETCH_ASSOC);
    }
}      