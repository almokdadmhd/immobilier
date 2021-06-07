<?php
require_once "../model/ModelTypeBien.php";
class ViewTypeBien
{
    public static function ajoutTypeBien()
    {
        $typesBien = ModelTypeBien::listeTypeBien();
?>
        <div class="container">
            <form name="ajout_Type_bien" id="ajout_Type_bien" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <select name="type_bien_id" class="form-control" required>
                    <option value="" selected>Sélectionnez un type de bien</option>
                    <?php
                    foreach ($typesBien as $typesBien) {
                    ?>
                        <option value="<?php echo $typesBien['id'] ?>"><?php echo $typesBien['type_bien'] ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <div class=" form-group">
                    <input type="text" name="libelle" id="libelle" class="form-control" aria-describedby="libelle" placeholder="libelle">
                </div>

                <button type="submit" class="btn btn-success" name="ajout">Ajouter</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </form>
        </div>
        <div class="jumbotron text-center" style="margin-bottom: 0; background-color: #fbfcff">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Veuillez Choisir Votre Bien</h1>
                        <hr class="my-4" />
                        <div align="center">
                            <button class="btn btn-success filter-button" data-filter="appartement">
                                appartement
                            </button>
                            <button class="btn btn-success filter-button" data-filter="maison">
                                maison
                            </button>
                            <button class="btn btn-success filter-button" data-filter="villa">
                                villa
                            </button>
                            <button class="btn btn-success filter-button" data-filter="studio">
                                studio
                            </button>
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter appartement">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/appartement .jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/appartement .jpg" alt="appartement" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter maison">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/maison.jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/maison.jpg" alt="maison" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter villa">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/villa.jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/villa.jpg" alt="villa" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter studio">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/studio.jpeg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/studio.jpeg" alt="studio" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter appartement">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/appartement .jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/appartement .jpg" alt="appartement" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter maison">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="i../../images/maison.jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/maison.jpg" alt="maison" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter villa">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/villa.jpg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/villa.jpg" alt="villa" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter studio">
                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="../../images/studio.jpeg" data-target="#image-gallery">
                                            <img class="img-thumbnail" src="../../images/studio.jpeg" alt="studio" />
                                        </a>
                                    </div>
                                </div>
                                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img id="image-gallery-image" class="img-responsive col-md-12" src="" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                                                    <i class="fa fa-arrow-left"></i>
                                                </button>

                                                <button type="button" id="show-next-image" class="btn btn-secondary float-right">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        public static function listeTypeBien()
        {
            $listeTypeBien = ModelTypeBien::listeTypeBien()
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#ID User</th>
                            <th scope="col">libelle</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listeTypeBien as $bien) {
                        ?>
                            <tr>
                                <td><?php echo $bien['user_id'] ?></td>
                                <td><?php echo $bien['libelle'] ?></td>
                                <td>
                                    <a class="btn btn-info" href="ModifTypeBien.php?id=<?php echo $bien['ref_id'] ?>" role="button">Modifier</a>
                                    <a class="btn btn-danger" href="SuppressionTypeBien.php?id=<?php echo $bien['ref_id'] ?>" role="button">Supprimer</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
        }
        public static function modifTypeBien($id)
        {
            $typesBien = ModelTypeBien::ajoutTypeBien();
            $selectedType = ModelTypeBien::ajoutTypeBien();
            ?>
                <div class="container">
                    <form name="modif_ref" id="modif_ref" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <input type="hidden" name="id" name="id" value="<?php echo $id; ?>" />
                        <select name="type_ref_id" class="form-control" required>
                            <?php
                            foreach ($typesBien as $typesBien) {
                            ?>
                                <option value="<?php echo $typesBien['id'] ?>" <?php echo $typesBien['id'] == $selectedType['type_ref_id'] ? "selected" : "" ?>>
                                    <?php echo $typesBien['type_ref'] . " - " . $typesBien['support'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class=" form-group">
                            <input type="text" name="nom" id="nom" value="<?php echo $selectedType['nom'] ?>" class="form-control" aria-describedby="nom" placeholder="Nom" required>
                        </div>
                        <div class=" form-group">
                            <input type="text" name="libelle" id="libelle" value="<?php echo $selectedType['libelle'] ?>" class="form-control" aria-describedby="techno" placeholder="Libelle" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="modif">Modifier</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </form>
                </div>
        <?php
        }
    }
