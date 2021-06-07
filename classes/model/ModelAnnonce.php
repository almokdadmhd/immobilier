<?php
require_once "connexion.php";
class ModelAnnonce
{
    public static function ajoutAnnonce($id, $titre, $description, $surface, $photos, $adresse, $ville, $codpost, $prix, $type, $type_bien_id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
                    INSERT INTO type_bien VALUES (null,:id, :titre, :description, :surface, :photos, :adresse, :ville, :codpost, :prix ,:type ,:type_bien_id)
                ");
        $requete->execute([
            'id' => $id,
            'titre' => $titre,
            ':description' => $description,
            ':surface' => $surface,
            ':photos' => $photos,
            ':adresse' => $adresse,
            ':ville' => $ville,
            ':codpost' => $codpost,
            ':prix' => $prix,
            ':type' => $type,
            ':type_bien_id' => $type_bien_id,
        ]);
    }
    public static function listeAnnonce()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_bien
        ");
        $requete->execute();
        return $requete->fetchAll();
    }
    public static function getAnnonce($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_bien where id=:id
        ");
        $requete->execute([':id' => $id,]);
        return $requete->fetch();
    }

    public static function ModifAnnonce($id, $type_bien)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("UPDATE type_bien SET type_bien=:type_bien WHERE id = :id");
        $requete->execute([
            ':id' => $id,
            ':type_bien' => $type_bien
        ]);
    }

    public static function SuppressioAnnonce($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("DELETE FROM type_bien WHERE id  = :id");
        $requete->execute([":id" => $id]);
    }
}
