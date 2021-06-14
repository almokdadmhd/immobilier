
    <?php
    require_once "../view/ViewAnnonce.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelAnnonce.php";
    require_once "../utils/Utils.php";


    ViewTemplate::fichierCss();
    ViewTemplate::menu();
    if (isset($_POST['ajout'])) {
        $doonees = [
            $_POST['titre'],
            $_POST['description'],
            $_POST['surface'],
            $_POST['photos'],
            $_POST['adresse'],
            $_POST['ville'],
            $_POST['codpost']  ,
            $_POST['prix'] ,
            $_POST['type'],
            $_POST['type_bien_id']
        ];
        $types = ["id", "titr", "description", "surface", "photos", "adresse", "ville", "codpost", "prix", "type", "type_bien_id"];

        $datat = Utils::valider($doonees, $types);

        if ($data) {
            $extensions = ["jpg", "jpeg", "png", "gif"];
            $upload = Utils::upload($extensions, $_FILES['fichier']);
            if ($upload['uploadOk']) {
                $file_name = $upload['file_name'];
                ModelAnnonce::ajoutAnnonce ($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $type_bien_id[10]);
                ViewTemplate::alert("Les données sont insérées avec succès", "success", "ListeAnnonce.php");
            } else {
                ViewTemplate::alert($upload['errors'], "danger", htmlspecialchars($_SERVER['PHP_SELF']));
            }
        } else {
            ViewAnnonce::ajoutAnnonce();
        }
    } else {
        ViewAnnonce::ajoutAnnonce ();
    }
    ViewTemplate::footer();
    ViewTemplate::fichierJS();
    ?>
    