<?php session_start() ?>

<?php
require_once '../view/ViewUser.php';
require_once '../view/ViewTemplate.php';
require_once '../model/ModelUser.php';
ViewTemplate::fichierCss();
viewTemplate::menu();
?>

<p class="h1"> </p>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" text-center">
                    <h2> Bienvenue Chez Bellevue Immobilier</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
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
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-image">
                    <div class="container">
                        <div class="row">
                            <input id="searchInput" class="controls" type="text" placeholder="https://www.google.fr/maps?hl=ar&tab=rl">
                            <div id="map"></div>
                            <ul id="geoData">
                                <li>Full Address: <span id="location"></span></li>
                                <li>Postal Code: <span id="postal_code"></span></li>
                                <li>Country: <span id="country"></span></li>
                                <li>Latitude: <span id="lat"></span></li>
                                <li>Longitude: <span id="lon"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
var_dump($_SESSION);



viewTemplate::footer();
ViewTemplate::fichierJS();


?>