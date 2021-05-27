<?php
require_once "connexion.php";
class ModelUser
{
    public static function ajoutUser($nom, $prenom, $mail, $pass, $tel, $token)
    {
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $data = connexion();
        $requt = $data->prepare("INSERT INTO user VALUES (null,:nom,:prenom,:mail,:pass,:tel,'0','0','0',:token)");
        $requt->execute([':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':pass' => $hash, ':tel' => $tel, ':token' => $token]);
    }
    public static function mailExistant($mail)
    {
        $data = connexion();
        $requt = $data->prepare("SELECT* from user WHERE mail=:mail");
        $requt->execute([':mail' => $mail]);
        return $requt->fetch(PDO::FETCH_ASSOC);
    }
    public static function confirmMail($mail,  $token)
    {
        $data = connexion();
        $requt = $data->prepare("UPDATE user set confirme ='1', actif='1'  WHERE mail =:mail AND token=:token");
        $requt->execute([':mail' => $mail, ':token' => $token]);
    }


    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $pass;
    private $tel;
    private $role;
    private $confirme;
    private $actif;
    private $token;
    private $annonces = [];
    private $favoris = [];

    public function __construct($id)
    {
        $donneeUser = $this->getById($id);
        $this->id = $id;
        $this->nom = $donneeUser['nom'];
        $this->prenom = $donneeUser['prenom'];
        $this->mail = $donneeUser['mail'];
        $this->pass = $donneeUser['pass'];
        $this->tel = $donneeUser['tel'];
        $this->role = $donneeUser['role'];
        $this->confirme = $donneeUser['confirme'];
        $this->actif = $donneeUser['actif'];
        $this->token = $donneeUser['token'];
        $this->annonces = [2];
        $this->favoris = [1];
    }


    // ajoute utilisateur via form CREATE
    public static function addUsere($nom, $prenom, $mail, $tel, $mdp, $code)
    {
        $datay = connexion();
        $rPrep = $datay->prepare("INSERT INTO user (nom,prenom,mail,pass,tel,token) VALUES (:nom,:prenom,:mail,:mdp,:tel,:code)");
        $rPrep->execute([':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':tel' => $tel, ':mdp' => $mdp, ':code' => $code]);
    }

    //recup user via mail

    public static function getByMail($mail)
    {
        $datay = connexion();
        $rPrep = $datay->prepare("SELECT * FROM user WHERE mail=?");
        $rPrep->execute([$mail]);
        return $rPrep->fetch(pdo::FETCH_ASSOC);
    }

    //recup user via id

    public static function getById($id)
    {
        $datay = connexion();
        $rPrep = $datay->prepare("SELECT * FROM user WHERE id=?");
        $rPrep->execute([$id]);
        return $rPrep->fetch(pdo::FETCH_ASSOC);
    }

    //confirme compte via token
    public static function confirmCompte($mail)
    {
        $datay = connexion();
        $rPrep = $datay->prepare("UPDATE user SET confirme='1' WHERE mail=? ");
        $rPrep->execute([$mail]);
    }
    //modif Colonne
    public static function modifColonneUser($colonne, $valeur, $mail)
    {
        $datay = connexion();
        $rPrep = $datay->prepare("UPDATE user SET $colonne=? WHERE mail=? ");
        $rPrep->execute([$valeur, $mail]);
    }

    //GETTER user
    public function getId()
    {
        return $this->id;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getPass()
    {
        return $this->pass;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getConfirme()
    {
        return $this->confirme;
    }
    public function getActif()
    {
        return $this->actif;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function getAnnonces()
    {
        return $this->annonces;
    }
    public function getFavoris()
    {
        return $this->favoris;
    }


    //SETTER User
    public function setNom($newNom)
    {
        $this->nom = $newNom;
        return $this;
    }
    public function setPrenom($newPrenom)
    {
        $this->prenom = $newPrenom;
        return $this;
    }
    public function setMail($newMail)
    {
        $this->mail = $newMail;
        return $this;
    }
    public function setPass($newPass)
    {
        $this->pass = $newPass;
        return $this;
    }
    public function setTel($newTel)
    {
        $this->tel = $newTel;
        return $this;
    }
    public function setRole($newRole)
    {
        $this->role = $newRole;
        return $this;
    }
    public function setConfirme($newConfirme)
    {
        $this->confirme = $newConfirme;
        return $this;
    }
    public function setActif($newActif)
    {
        $this->actif = $newActif;
        return $this;
    }
    public function setToken($newToken)
    {
        $this->token = $newToken;
        return $this;
    }
    public function setAnnonces($newAnnonces)
    {
        $this->annonces = $newAnnonces;
        return $this;
    }
    public function setFavoris($newFavoris)
    {
        $this->favoris = $newFavoris;
        return $this;
    }
}
