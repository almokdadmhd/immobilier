
   <?php session_start() ?>

<?php
 require_once "../view/ViewLesPrixs.php";
 require_once "../view/ViewTemplate.php";
 require_once "../controller/LesPrixs.php";



 ViewTemplate::fichierCss();
 ViewTemplate::menu();
 LesPrix::ajoutLesPrix();
 
 
 ViewTemplate::footer();
 ViewTemplate::fichierJS();
 ?>
 