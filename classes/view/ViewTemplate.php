<?php
class ViewTemplate
{
    public static function alert($message, $type, $lien = null)
    {
?>
        <div class="container my-4">
            <div class="alert alert-<?php echo $type; ?> text-center" role="alert">
                <?php echo $message;
                if ($lien) {
                ?>
                    <br />Cliquez <a href="Accueil.php"> ici</a> pour continuer la navigation.
                    <!-- <?php echo $lien ?>-->
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    public static function menu()
    {
    ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-info mb-4">
            <a class="navbar-brand" href="Accueil.php">Accueil </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="CreationUser.php">Inscreption <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CreationConnexion.php">Connexion <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Accueil.php">Deconnexion<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">

                </ul>
            </div>

        </nav>

    <?php
    }

    public static function footer()
    {
    ?>
        <footer class="bg-info text-center mt-4 py-2">
            Immobilier Zack © <?php echo date("Y"); ?>
        </footer>

<?php
    }
}
