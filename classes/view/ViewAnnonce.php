<?php
require_once "../model/ModelAnnonce.php";
class ViewAnnonce
{
    public static function ajoutAnnonce()
    {

        isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;

?>

        <div class="container">
            <div id="erreurs"></div>
            <form name="ajout_annonce" id="ajout_annonce" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="titre" id="titre" value="<?php echo $formSubmit ?  $_POST['titre'] : '' ?>" class="form-control" aria-describedby="nom" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <input type="text" name="description" id="description" value="<?php echo $formSubmit ?  $_POST['description'] : '' ?>" class="form-control" aria-describedby="description" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="surface" id="surface" value="<?php echo $formSubmit ?  $_POST['surface'] : '' ?>" class="form-control" aria-describedby="surface" placeholder="Surface" required>
                </div>
                <!-- <div class="form-group">
                    <input type="file" name="photos" id="photos" accept="image/*" class="form-control" aria-describedby="photos" placeholder="Photos">
                </div> -->
                <div class="form-group">
                    <input type="text" name="adresse" id="adresse" value="<?php echo $formSubmit ?  $_POST['adresse'] : '' ?>" class="form-control" aria-describedby="adresse" placeholder="Adresse" required>
                </div>
                <div class="form-group">
                    <input type="text" name="ville" id="ville" value="<?php echo $formSubmit ?  $_POST['ville'] : '' ?>" class="form-control" aria-describedby="ville" placeholder="Ville" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="codpost" id="codpost" value="<?php echo $formSubmit ?  $_POST['codpost'] : '' ?>" class="form-control" aria-describedby="codpost" placeholder="Codpost" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="prix" id="prix" value="<?php echo $formSubmit ?  $_POST['prix'] : '' ?>" class="form-control" aria-describedby="prix" placeholder="Prix" required>
                </div>
                <div class="form-group">
                    <input type="text" name="type" id="type" value="<?php echo $formSubmit ?  $_POST['type'] : '' ?>" class="form-control" aria-describedby="type" placeholder="Type" required>
                </div>

               

                <button type="submit" name="ajout" class="btn btn-success">Ajouter</button>
                <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
            </form>
        </div>
        <?php 
        } 
    
    public static function listeAnnonce()
    {
        $listeAnnonce = ModelAnnonce::listeAnnonce();

    ?>
        <table class="table" id="liste-bien">
            <thead>
                <tr>
                    <th scope="col">#ID user</th>
                    <th scope="col">titre</th>
                    <th scope="col">description</th>
                    <th scope="col">surface</th>
                    <th scope="col">photos</th>
                    <th scope="col">adresse </th>
                    <th scope="col">ville</th>
                    <th scope="col">codpost</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listeAnnonce as $bien) {
                ?>
                    <tr>
                        <td><?php echo $bien['bien_id'] ?></td>
                        <td><?php echo $bien['titre'] ?></td>
                        <td><?php echo $bien['description'] ?></td>
                        <td><?php echo $bien['surface'] ?></td>
                        <td><?php echo $bien['photos'] ?></td>
                        <td><?php echo $bien['adresse'] ?></td>
                        <td><?php echo $bien['ville'] ?></td>
                        <td><?php echo $bien['codpost'] ?></td>
                        <td><?php echo $bien['prix'] ?></td>
                        <td><?php echo $bien['type'] ?></td>
                        <td>
                            <a class="btn btn-info" href="ModifTypeBien.php?id=<?php echo $bien['type_bien_id'] ?>" role="button">Modifier</a>
                            <a class="btn btn-danger" href="SuppressionTypeBien.php?id=<?php echo $bien['type_bien_id'] ?>" role="button">Supprimer</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }
}
