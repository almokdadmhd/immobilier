<?php
require_once "../model/ModelUser.php";
class ViewUser
{
  public static function ajoutUser()
  {
    isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
?>
    <div class="container">
      <div id="erreurs"></div>
      <form name="ajout_user" id="ajout_user" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" name="nom" id="nom" value="<?php echo $formSubmit ?  $_POST['nom'] : '' ?>" class="form-control" aria-describedby="nom" placeholder="Nom" required>
        </div>
        <div class="form-group">
          <input type="text" name="prenom" id="prenom" value="<?php echo $formSubmit ?  $_POST['prenom'] : '' ?>" class="form-control" aria-describedby="prenom" placeholder="Prénom" required>
        </div>
        <div class="form-group">
          <input type="email" name="mail" id="mail" value="<?php echo $formSubmit ?  $_POST['mail'] : '' ?>" class="form-control" aria-describedby="mail" placeholder="Adresse mail" required>
        </div>
        <div class="form-group">
          <input type="password" name="pass" id="pass" value="<?php echo $formSubmit ?  $_POST['pass'] : '' ?>" class="form-control" aria-describedby="pass" placeholder="pass" required>
        </div>
        <div class="form-group">
          <input type="tel" name="tel" id="tel" value="<?php echo $formSubmit ?  $_POST['tel'] : '' ?>" class="form-control" aria-describedby="tel" placeholder="Tel" required>
        </div>
        <button type="submit" name="ajout" class="btn btn-success">Ajouter</button>
        <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
      </form>
    </div>
  <?php
  }
  public static function Connexion()
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
          <button type="submit" name="ajout" class="btn btn-success">Ajouter</button>
          <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
          <div class="form-group">
      </form>
    </div>
    <?php
    ?>
  <?php
  }
  public static function DeConnexion()
  {
    isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;

  ?>
    <div class="container">
      <div id="erreurs"></div>
      <form class="form-chanhing" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <!-- <input type="text" name="prenom" id="prenom" value="<?php echo $formSubmit ?  $_POST['prenom'] : '' ?>" class="form-control" aria-describedby="prenom" placeholder="Prénom" required>
        </div>
        <div class="form-group">
          <input type="email" name="mail" id="mail" value="<?php echo $formSubmit ?  $_POST['mail'] : '' ?>" class="form-control" aria-describedby="mail" placeholder="Adresse mail" required>
        </div>
        <div class="form-group"> -->
          <input type="password" name="pass" id="pass" value="<?php echo $formSubmit ?  $_POST['pass'] : '' ?>" class="form-control" aria-describedby="pass" placeholder="pass" required>
        </div>
        <div class="form-group">
          <input type="tel" name="tel" id="tel" value="<?php echo $formSubmit ?  $_POST['tel'] : '' ?>" class="form-control" aria-describedby="tel" placeholder="Tel" required>
        </div>
        <button type="submit" name="ajout" class="btn btn-success">Ajouter</button>
        <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
      </form>
    </div>
  <?php
  }
  public static function formMdp()
  {
    isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
  ?>
    <div class="container">
      <div id="erreurs"></div>
      <form name="mail" id="ajout_user" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
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
  }
  public static function formMail()
  {
    isset($_POST['ajout']) ? $formSubmit = true : $formSubmit = false;
  ?>
    <div class="container">
      <div id="erreurs"></div>
      <form name="mail" id="ajout_user" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
        <div class="form-group">
          <input type="email" name="mail" id="mail" value="<?php echo $formSubmit ?  $_POST['mail'] : '' ?>" class="form-control" aria-describedby="mail" placeholder="Adresse mail" required>
        </div>
        <div class="form-group">
          <button type="submit" name="ajout" class="btn btn-success">Ajouter</button>
          <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
          <div class="form-group">
      </form>
    </div>
  <?php
  }
  public static function formHome()
  {
  ?>


    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h2>Notre Organization</h2>
              <p>Vous cherchez à acheter ?
                Vous souhaitez vendre ?
                Nous sommes disponibles et nous nous engageons à vous répondre dans les meilleurs délais dès la réception de votre mail ou de votre message
                A bientôt ! <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="about-text">
              <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

              <ul class="withArrow">
                <li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
                <li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
                <li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
                <li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
              </ul>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="about-image">
              <img src="../../images/img5.jpg" alt="About Images">
            </div>
          </div>
        </div>
      </div>
    </section>


<?php

  }
}
