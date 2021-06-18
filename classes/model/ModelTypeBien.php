<?php
require_once "connexion.php";
class ModelTypeBien
{
    public static function ajoutTypeBien( $libelle)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
                    INSERT INTO type_bien VALUES (null, :libelle)
                ");
        $requete->execute([
            ':libelle' => $libelle,
        ]);
    }
    public static function listeTypeBien()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_bien
        ");
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function getTypebien($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_bien where id=:id
        ");
        $requete->execute([':id' => $id,]);
        return $requete->fetch();
    }

    public static function ModifTypeBien($id, $leibelle)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("UPDATE libelle SET leibelle=:leibelle WHERE id = :id");
        $requete->execute([
            ':id' => $id, 
            ':leibelle' => $leibelle
        ]);
    }

    public static function SuppressionTypeBien($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("DELETE FROM libelle WHERE id  = :id");
        $requete->execute
        ([":id" => $id]);
    }
}
