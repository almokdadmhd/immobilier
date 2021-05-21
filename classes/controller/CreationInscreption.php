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
  if (isset($_POST['ajout'])) {
    // generation de token avec la function mt_rand (11111,99999) 
    $dadta = $_POST["mail"];
    if (ModelInscreption::mailPresent($_post["mail"])) {
      ViewTemplate::alert("L'enregistrée avec succès", "success", "CreatioInscreption.php");
    } else {
      $token = uniqueid(11111, 99999);
      ModelInscreption::ajoutInscreption($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['pass'], $_POST['tel'], $toke);
      viewTemplate::alert('inscreption a été bien', 'CreatioInscreption.php');
      ViewInscreption::ajoutInscreption($toke, $_POST['mail']);
      // chiffrement de mot de pass password_hash
      $hash==password_hash($pass, PASSWORD_BCRYPT)
      $data1 =connexion();
      $requet =$data1->prepare("INSERT INTO user VALEU (null, :nom, :preonm, :mail, :pass, :tel, '0','0', '0','token' ")
      $requet-> execute([':nom'=>$nom, ':preonm'=>$preonm,':mail'=>$mail,':pass'=>$pass,':tel'=>$tel, 0,0,0, ':token=>$token'])

    }
  } else {
    ViewInscreption::ajoutInscreption();
  }
  ViewTemplate::footer();
  ?>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/all.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/ctrl.js"></script>
</body>

</html>