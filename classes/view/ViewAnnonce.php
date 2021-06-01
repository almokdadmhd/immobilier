<?php
require_once "../model/ModelAnnonce.php";
class ViewTypeBien
{
    public static function ajoutTypeBien()
    {
        $typesTypeBien = ModelTypeBien::listeTypeBien();
?>
        <div class="container">
            <form name="ajout_typebien" id="ajout_typebien" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <select name="type_bien_id" class="form-control" required>
                    <option value="" selected>Sélectionnez un type de bien</option>
                    <?php
                    foreach ($typesTypeBien as $typesTypeBien) {
                    ?>
                        <option value="<?php echo $typesTypeBien['id'] ?>"><?php echo $typesTypeBien['type_bien'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <div class=" form-group">
                    <input type="url" name="lien" id="lien" class="form-control" aria-describedby="lien" placeholder="Lien" required>
                </div>
                <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </form>
        </div>
    <?php
    }
    public static function listeTypeBien()
    {
        $listeTypeBien = ModelTypeBien::listeTypeBien();
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">titre</th>
                    <th scope="col">description</th>
                    <th scope="col">surface</th>
                    <th scope="col">photos</th>
                    <th scope="col">ville</th>
                    <th scope="col">adresse</th>
                    <th scope="col">codpost</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col">lien</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>


                <?php
                foreach ($listeTypeBien as $bien) {
                ?>
                    <tr>
                        <td><?php echo $bien['bien_id'] ?></td>
                        <td><?php echo $bien['titre'] ?></td>
                        <td><?php echo $bien['prenom'] ?></td>
                        <td><?php echo $bien['type_soc'] ?></td>
                        <td><?php echo $bien['lien'] ?></td>
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
