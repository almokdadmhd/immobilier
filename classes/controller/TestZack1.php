
    <?php
    require_once '../controller/.php';
    require_once '../TestZack2.php';

    
    ViewTemplate::menu();
    ?>

    <div class="container" id="zack">
        <a href="#">
            <h1 class="text-danger"><b> Hello Zack
                </b></h1>
        </a>
    </div>
    <div class="container" id="tay">
        <a href="#">
            <h1 class="text-danger"><b> Hello tay
                </b></h1>
        </a>
    </div>
    <div class="container" id="brahim">
        <a href="#">
            <h1 class="text-danger"><b> Hello brahim
                </b></h1>
        </a>
    </div>

    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
    <script>
        $("#zack").click(function(e) {
            let request =
                $.ajax({
                    method: "POST",
                    url: " http://portfolio/classes/controller/testzack2.php",
                    data: {
                        test: 'zack'
                    },
                    dataType: 'html',

                });

            request.done(function(retour) {


                console.log(retour);
                $("h1").html(retour)

            });
            request.fail(function(http_error) {
                //Code à jouer en cas d'éxécution en erreur du script du PHP

                let server_msg = http_error.responseText;
                let code = http_error.status;
                let code_label = http_error.statusText;
                alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
            });

            request.always(function() {
                //Code à jouer après done OU fail dans tous les cas 
            });

        })
        $("#tay").click(function(e) {
            let request =
                $.ajax({
                    method: "POST",
                    url: " http://portfolio/classes/controller/testzack2.php",
                    data: {
                        test: 'tay'
                    },
                    dataType: 'html',

                });

            request.done(function(retour) {


                console.log(retour);
                $(" #tay a h1").html(retour)

            });
            request.fail(function(http_error) {
                //Code à jouer en cas d'éxécution en erreur du script du PHP

                let server_msg = http_error.responseText;
                let code = http_error.status;
                let code_label = http_error.statusText;
                alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
            });

            request.always(function() {
                //Code à jouer après done OU fail dans tous les cas 
            });

        })
        $("#brahim").click(function(e) {
            let request =
                $.ajax({
                    method: "POST",
                    url: " http://portfolio/classes/controller/testzack2.php",
                    data: {
                        test: 'brahim'
                    },
                    dataType: 'html',

                });

            request.done(function(retour) {


                console.log(retour);
                $("h1").html(retour)

            });
            request.fail(function(http_error) {
                //Code à jouer en cas d'éxécution en erreur du script du PHP

                let server_msg = http_error.responseText;
                let code = http_error.status;
                let code_label = http_error.statusText;
                alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
            });

            request.always(function() {
                //Code à jouer après done OU fail dans tous les cas 
            });

        })
    </script>
</body>

</html>