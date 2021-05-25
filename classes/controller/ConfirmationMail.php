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
    require_once "../view/ViewInscreption.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/Modelnscreption.php";
    ViewTemplate::menu();
    if (isset($_GET['mail']) && isset($_GET['token'])) {
        ModelUser::confirmMail($_GET['mail'], $_GET['token']);
        ViewTemplate::alert("confirmation a été", "success", "CreatioInscription.php");
    } else {
        ViewTemplate::alert("confirmation impossible", "danger", "CreatioInscription.php");
    }

    ViewTemplate::footer();
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>