<?php
class ViewTemplate
{
    public static function alert($message, $type, $lien = null)
    {
?>

        </head>

        <body>
            <div class="container my-4">

                <div class="alert alert-<?php echo $type; ?> text-center" role="alert">
                    <?php echo $message;
                    if ($lien) {
                    ?>
                        <br />Cliquez <a href="<?php echo $lien ?>"> ici</a> pour continuer la navigation.
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
            <div id="wrapper" class="home-page">
                <div class="topbar">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">


                                <a class="navbar-brand" href="index.html"><img src="../../images/logo1.png" alt="logo" /></a>
                                <h2>
                                    <p class="pull-left hidden-xs centre ">La Clé de votre Univers !</p>
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-success mb-4">

                    <header>
                        <div class="navbar navbar-default navbar-static-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse ">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">

                                </div>
                            </div>
                        </div>
                    </header>
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
                                <a class="nav-link" href="ModifMdp.php">Mot de pass oublie<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="CreationTypeBien.php">CreationTypeBien<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="ListeTypeBien.php">ListeTypeBien<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="CreationAnnonce.php">CreationAnnonce<span class="sr-only">(current)</span></a>
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

            </div>
            <footer class="bg-success text-center mt-4 py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Our Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong><br>
                                    Al mokdad Mhd <br>
                                    France Lille.
                                </address>
                                <p>
                                    <i class="icon-phone"></i> +33.7.82.57.98.84 <br>
                                    <i class="icon-envelope-alt"></i> almokdad.mhd@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Quick Links</h5>
                                <ul class="link-list">
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <h5 class="widgetheading">Latest posts</h5>
                                <ul class="link-list">
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <h5 class="widgetheading">Recent News</h5>
                                <ul class="link-list">
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-3">
                                <ul class="social-network">
                                    <h5 class="widgetheading">Réseux socio</h5>

                                    <li><a href="#" data-placement="top" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#" data-placement="top" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" data-placement="top" title="instagram"> <i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#" data-placement="top" title="linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" data-placement="top" title="pinterest"><i class="fab fa-pinterest"></i></a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="sub-footer">
                        <div class="container fluide">
                            <div class="row">
                                <div class="copyright">
                                    <p>
                                        Immobilier Zack © <?php echo date("Y"); ?>
                                    </p>
                                </div>

                            </div>

            </footer>
    <?php
        }
    }
