<?php
require_once "../model/MdelConnexion.php";


class ModelConnexion
{
    public static function ajoutConnexion()

    {

        isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
?>
        <div class="container">
            <div id="erreurs"></div>
            <form name="ajout_user" id="ajout_user" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="email" name="mail" id="mail" value="<?php echo $formSubmit ?  $_POST['mail'] : '' ?>" class="form-control" aria-describedby="mail" placeholder="Adresse mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" id="pass" value="<?php echo $formSubmit ?  $_POST['pass'] : '' ?>" class="form-control" aria-describedby="pass" placeholder="pass" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="ajout" class="btn btn-primary">Ajouter</button>
                    <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                    <div class="form-group">

            </form>
        </div>
        <?php

        ?>

<?php
    }
}
