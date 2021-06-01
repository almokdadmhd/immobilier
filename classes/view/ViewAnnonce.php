<?php
require_once "../model/ModelAnnonce.php";

class ViewUser
{
    public static function ajoutAnnonce()
    {

        isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
?>
        <div class="container">
            <div id="erreurs"></div>
            <form name="ajout_annonce" id="ajout_annonce" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="titre" id="titre" value="<?php echo $formSubmit ?  $_POST['titre'] : '' ?>" class="form-control" aria-describedby="titre" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <input type="text" name="discription" id="discription" value="<?php echo $formSubmit ?  $_POST['discription'] : '' ?>" class="form-control" aria-describedby="discription" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="surface" id="surface" value="<?php echo $formSubmit ?  $_POST['surface'] : '' ?>" class="form-control" aria-describedby="surface" placeholder="Surface " required>
                </div>
                <div class="form-group">
                    <input type="file" name="fichier" id="fichier" accept="image/*" class="form-control" aria-describedby="fichier" placeholder="fichier">
                </div>
                <div class="form-group">
                    <input type="text" name="discription" id="discription" value="<?php echo $formSubmit ?  $_POST['discription'] : '' ?>" class="form-control" aria-describedby="discription" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="surface" id="surface" value="<?php echo $formSubmit ?  $_POST['surface'] : '' ?>" class="form-control" aria-describedby="surface" placeholder="Surface " required>
                </div>
                <div class="form-group">
                    <input type="text" name="titre" id="titre" value="<?php echo $formSubmit ?  $_POST['titre'] : '' ?>" class="form-control" aria-describedby="titre" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <input type="text" name="discription" id="discription" value="<?php echo $formSubmit ?  $_POST['discription'] : '' ?>" class="form-control" aria-describedby="discription" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input type="numbre" name="surface" id="surface" value="<?php echo $formSubmit ?  $_POST['surface'] : '' ?>" class="form-control" aria-describedby="surface" placeholder="Surface " required>
                </div>



        <?php
    }
}
