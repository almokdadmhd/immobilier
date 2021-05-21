<?php
require_once "connexion.php";
class ModelInscreption
{
    public static function ajoutInscreption($nom, $prenom, $mail, $pass, $tel, $token)
    {
        $data = connexion();
        $requt = $data->prepare("INSERT INTO user VALUES (null,:nom,:prenom,:mail,:pass,:tel,0,0,0,0,:token) ");
        $requt-> execute([':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':pass' => $pass, ':tel' => $tel, ':token'=> $token]);
        
    }
    public static function mailPresent ($mail){
        $data = connexion();
        $requt = $data->prepare("SELECT* from user WHER mail=:mail");
        $requt-> execute([':mail' => $mail]);
        return $requt->fetch(PDO::FETCH_ASSOC);
    }
    
}
