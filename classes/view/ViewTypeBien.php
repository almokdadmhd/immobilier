<?php
require_once "../model/ModelTypeBien.php";
class ViewTypeBien
{
    public static function ajouTypeBien()
    {
        isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
?>
        <div class="container">
            <div id="erreurs"></div>
            <form name="ajout_typebien" id="ajout_typebien" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="nom" id="nom" value="<?php echo $formSubmit ?  $_POST['nom'] : '' ?>" class="form-control" aria-describedby="nom" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <input type="text" name="libelle" id="libelle" value="<?php echo $formSubmit ?  $_POST['libelle'] : '' ?>" class="form-control" aria-describedby="libelle" placeholder="libelle" required>
                </div>
                <button type="submit" name="ajout" class="btn btn-primary">Ajouter</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
            </form>
        </div>
<?php
    }
}
