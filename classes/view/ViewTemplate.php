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
                                <a class="nav-link" href="CreationDeconnexion.php">Deconnexion<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="ModifMdp.php">Mdp oublie<span class="sr-only">(current)</span></a>
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
                                <h5 class="widgetheading">Nos Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong>
                                    <br>
                                    BELLEVUE IMMOBILIER <br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> 06 16 93 69 81 <br>
                                    <i class="icon-phone"></i> 09 51 25 76 14 <br>
                                    <i class="icon-envelope-alt"></i>chantalgesbert@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Nos Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong>
                                    <br>
                                    BELLEVUE IMMOBILIER <br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> 06 16 93 69 81 <br>
                                    <i class="icon-phone"></i> 09 51 25 76 14 <br>
                                    <i class="icon-envelope-alt"></i>chantalgesbert@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Nos Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong>
                                    <br>
                                    BELLEVUE IMMOBILIER <br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> 06 16 93 69 81 <br>
                                    <i class="icon-phone"></i> 09 51 25 76 14 <br>
                                    <i class="icon-envelope-alt"></i>chantalgesbert@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Nos Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong>
                                    <br>
                                    BELLEVUE IMMOBILIER <br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> 06 16 93 69 81 <br>
                                    <i class="icon-phone"></i> 09 51 25 76 14 <br>
                                    <i class="icon-envelope-alt"></i>chantalgesbert@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h5 class="widgetheading">Nos Contact</h5>
                                <address>
                                    <strong>Bellevue Immobilier </strong>
                                    <br>
                                    BELLEVUE IMMOBILIER <br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> 06 16 93 69 81 <br>
                                    <i class="icon-phone"></i> 09 51 25 76 14 <br>
                                    <i class="icon-envelope-alt"></i>chantalgesbert@gmail.com
                                </p>
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
            </footer>
        <?php
        }
        public static function fichierJS()
        { ?>

            <script src="../../js/jquery-3.5.1.min.js"></script>
            <script src="../../js/all.min.js"></script>
            <script src="../../js/bootstrap.bundle.min.js"></script>
            <script src="../../js/ctrl.js"></script>
            <script src="../../js/jquery.js"></script>
            <script src="../../js/jquery.easing.1.3.js"></script>
            <script src="../../js/bootstrap.min.js"></script>
            <script src="../../js/jquery.fancybox.pack.js"></script>
            <script src="../../js/jquery.fancybox-media.js"></script>
            <script src="../../js/jquery.flexslider.js"></script>
            <script src="../../js/animate.js"></script>
            <script src="../../js/modernizr.custom.js"></script>
            <script src="../../js/jquery.isotope.min.js"></script>
            <script src="../../js/jquery.magnific-popup.min.js"></script>
            <script src="../../js/animate.js"></script>
            <script src="../../js/custom.js"></script>
            <script src="../../js/owl-carousel/owl.carousel.js"></script>
            <script src="../../js/ctrl1.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>



        </body>

        </html>
    <?php
        }
        public static function fichierCss()
        { ?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/all.min.css" rel="stylesheet">
        <link href="../../css/styles.css" l="stylesheet" />
        <link href="../../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="../../css/jcarousel.css" rel="stylesheet" />
        <link href="../../css/flexslider.css" rel="stylesheet" />
        <link href="../../js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        </body>

        </html>
<?php
        }
    } ?>