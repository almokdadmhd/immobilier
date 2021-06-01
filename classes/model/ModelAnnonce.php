<?php
require_once "connexion.php";
class ModelAnnonce
{
    public static function ajoutAnnonce($titre, $description, $surface, $photos, $adresse, $ville, $codpost, $prix, $type)
    {
        $idcon = connexion();

        $requete = $idcon->prepare("
                    INSERT INTO user VALUES (null,:titre, :description, :surface, :photos, :adresse, :ville, :codpost, :prix, :type)
                    
                ");
        $requete->execute([
            ':titre' => $titre,
            ':description' => $description,
            ':surface' => $surface,
            ':photos' => $photos,
            ':adresse' => $adresse,
            ':ville' => $ville,
            ':codpost' => $codpost,
            ':prix' => $prix,
            ':type' => $type,

        ]);
    }
    
}
