<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <title> immobilier</title>
</head>

<body>
    <?php
    require_once "../view/ViewAnnonce.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelAnnonce.php";
    require_once "../utils/Utils.php";


    ViewTemplate::menu();
    if (isset($_POST['ajout'])) {
        $doonees = [
            $_POST['titre'],
            $_POST['description'],
            $_POST['surface'],
            $_POST['photos'],
            $_POST['adresse'],
            $_POST['ville'],
            $_POST['codpost'],
            $_POST['prix'],
            $_POST['type']
        ];
        $types = ["id", "titr", "description", "surface", "photos", "adresse", "ville", "codpost", "prix", "type",];

        $datat = Utils::valider($doonees, $types);

        if ($data) {
            $extensions = ["jpg", "jpeg", "png", "gif"];
            $upload = Utils::upload($extensions, $_FILES['fichier']);
            if ($upload['uploadOk']) {
                $file_name = $upload['file_name'];
                ModelTypeBien::ajoutTypeBien($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]);
                ViewTemplate::alert("Les données sont insérées avec succès", "success", "ListeTypeBien.php");
            } else {
                ViewTemplate::alert($upload['errors'], "danger", htmlspecialchars($_SERVER['PHP_SELF']));
            }
        } else {
            ViewTypeBien::ajoutTypeBien();
        }
    } else {
        ViewTypeBien::ajoutTypeBien();
    }
    ViewTemplate::footer();
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>