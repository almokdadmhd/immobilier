<?php
require_once "connexion.php";
class ModelTypeBien
{
    public static function ajoutTypeBien($id, $libelle)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
                    INSERT INTO type_bien VALUES (null,:typebienId)
                ");
        $requete->execute([
            'id' => $id,
            ':libelle' => $libelle,
        ]);
    }
}
