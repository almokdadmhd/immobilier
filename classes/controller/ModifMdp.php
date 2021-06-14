
  <?php


  require_once "../view/ViewUser.php";
  require_once "../view/ViewTemplate.php";
  require_once "../model/ModelUser.php";
  require_once "../utils/Utils.php";

  ViewTemplate::fichierCss();
  ViewTemplate::menu();
  if (isset($_POST['mail'])) {                                          // 1
    $token = uniqid();
    ModelUser::modifToken($token);                            // maj token 
    viewTemplate::alert('La modification a été bien fait, pour confirmer votre modification cliker ic', 'success ', 'CreationConnexion.php');  //afich lien (mail + token)
  } elseif (isset($_GET['mail']) &&  isset($_GET['token'])) {                                                          // 2
    if (isset($_GET['mail']) &&  isset($_GET['token'])) {
      ViewUser::formMdp();                                           //affich form mdp
      ModelUser::confirmCnx($_POST['mail'], $_POST['token']);              //confirm (mail et token en hidden)
    } else {
      viewTemplate::alert('Aucune info transmise', 'danger ', 'ModifMdp.php');  //afich lien (mail + token)
    }
  } elseif (isset($_PSOT['mail']) &&  isset($_PSOT['pass']) && isset($_PSOT['token'])) {                                                                          // 3
    if (isset($_PSOT['mail']) &&  isset($_PSOT['pass']) && isset($_PSOT['token'])) {   // test post mdp + mail + token
      ModelUser::modifPass($_POST['pass']);                                           //maj mdp bdd

    } else {
      viewTemplate::alert('La modification a été bien fait', 'danger ', 'CreationConnexion.php');  //afich lien (mail + token)
    }
  } else {
    ViewUser::formMail();                                                    //affich form @mail        //4 
  }
  ViewTemplate::footer();
  ViewTemplate::fichierJS()






  ?>
  