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
if (!empty($_POST['search_term']) && !empty($_POST['postcode']))
if (!empty($_POST['search_term']) && !empty($_POST['postcode']))

if (!empty($_POST['search_term']) && !empty($_POST['postcode']))

  require_once "../view/ViewUser.php";
  require_once "../view/ViewTemplate.php";
  require_once "../model/ModelUser.php";
  require_once "../utils/Utils.php";
  
ViewTemplate::menu();
if (isset($_POST['mail']))  {                                          // 1
  $token = uniqid();
  ModelUser::modifToken ($token);                            // maj token 
  viewTemplate::alert('La modification a été bien fait, pour confirmer votre modification cliker ic', 'success ', 'ModifMdp.php?mail=' . $_POST['mail'] . '&token=' . $token);  //afich lien (mail + token)
  } elseif                                                         // 2
  (isset($_GET['mail']) &&  isset ($_GET['token'])) {
      ViewUser::formMdp ();                                           //affich form mdp
      ModelUser::confirmCnx ($_POST ['mail'], $_POST['token']);              //confirm (mail et token en hidden)
    }else {
      viewTemplate::alert('Erreur');
    }
    }elseif{                                                                          // 3
    if (isset ($_PSOT['mail']) &&  isset ($_PSOT['pass']) && isset($_PSOT['token'])); {   // test post mdp + mail + token
      ModelUser::modifPass ($_POST['pass']);                                           //maj mdp bdd
                                                             
    } else {
      viewTemplate::alert('Erreur');
    }
  }

}else {
  ViewUser::formMail () ;                                                    //affich form @mail        //4 
}
ViewTemplate::footer();






  ?>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/all.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/ctrl.js"></script>


</body>

</html>