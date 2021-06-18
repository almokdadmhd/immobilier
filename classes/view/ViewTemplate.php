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
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary mb-4">
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
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="LesPrixs.php"> Les Prixs
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                            </li>
                        </ul>
                    </div>
                </nav>


            <?php
        }
        public static function footer()
        {
            ?>

                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget">
                                    <h5 class="widgetheading">Our Contact</h5>
                                    <address>
                                        <strong>Bootstrap company Inc</strong><br>
                                        JC Main Road, Near Silnile tower<br>
                                        Pin-21542 NewYork US.
                                    </address>
                                    <p>
                                        <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                                        <i class="icon-envelope-alt"></i> email@domainname.com
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h5 class="widgetheading">Quick Links</h5>
                                    <ul class="link-list">
                                        <li><a href="#">Latest Events</a></li>
                                        <li><a href="#">Terms and conditions</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Career</a></li>
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
                                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h5 class="widgetheading">Recent News</h5>
                                    <ul class="link-list">
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sub-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="copyright">
                                        <p>
                                            <span>&copy; BELLEVUE IMMOBILIER </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank">WebThemez</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="social-network">
                                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Twitter"></a><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
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
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>




        </body>

        </html>
<?php
        }
    } ?>