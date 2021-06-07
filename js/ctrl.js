function validation(str, type) {
  let valide = false;
  if (typesTab[type].test(str)) {
    valide = true;
  }
  valide === true
    ? (message = "")
    : (message = "Le champ " + type + " n'est pas au format demandé.<br/>");
  errorsTab = [valide, message];
  return errorsTab;
}

function valider(donnees, types, e) {
  let erreurs = "";

  for (i = 0; i < donnees.length; i++) {
    tab = validation(donnees[i], types[i]);
    if (!tab[0]) {
      erreurs += tab[1];
    }
  }
  if (erreurs) {
    const html =
      '<div class="alert alert-danger" role="alert">' + erreurs + "</div>";
    $("#erreurs").html(html);
    e.preventDefault();
  }
}

$("#ajout_user").submit(function (e) {
  let donnees = [$("#nom").val(), $("#prenom").val(), $("#tel").val()];
  let types = ["nom", "prenom", "tel"];
  valider(donnees, types, e);
});

$(".lien-modif").click(function (e) {
  e.preventDefault();
  const url = $(this).attr("href");
  let request = $.ajax({
    type: "GET",
    url: url,
    //                   data: data,    // donnes à transmettre au format d'un objet json
    dataType: "html",
  });
  request.done(function (response) {
    $(".modal-modif .modal-body").html(response);
    $("#modal-modif").modal();
  });
  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

$(".supp-user").click(function () {
  $(".lien-supp").attr("href", "SuppressionUser.php?id=" + $(this).attr("id"));
});

$(".lien-supp").click(function (e) {
  e.preventDefault();

  let request = $.ajax({
    type: "GET",
    url: $(this).attr("href"),
    dataType: "html",
  });

  request.done(function (response) {
    $(".annuler").click();
    listeUsers();
  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

function listeUsers() {
  let request = $.ajax({
    type: "GET",
    url: "ListeUsers.php",
    dataType: "html",
  });

  request.done(function (response) {
    $("body").html(response);
  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });

  $("#modif_user").submit(function (e) {
    var_dump(e);
    let donnees = [
      $("#id").val(),
      $("#nom").val(),
      $("#prenom").val(),
      $("#tel").val(),
    ];
    let types = ["id", "nom", "prenom", "tel"];
    valider(donnees, types, e);
  });
}
function midifUser(data) {
  let request = $.ajax({
    type: "POST",
    url: "ModifProfil.php",
    data: data,
    dataType: "html",
  });

  request.done(function (response) {
    listeUsers();
  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
  let modalId = $("#image-gallery");

  $(document).ready(function () {
    loadGallery(true, "a.thumbnail");
    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $("#show-previous-image, #show-next-image").show();
      if (counter_max === counter_current) {
        $("#show-next-image").hide();
      } else if (counter_current === 1) {
        $("#show-previous-image").hide();
      }
    }

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $("#show-next-image, #show-previous-image").click(function () {
        if ($(this).attr("id") === "show-previous-image") {
          current_image--;
        } else {
          current_image++;
        }

        selector = $('[data-image-id="' + current_image + '"]');
        updateGallery(selector);
      });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data("image-id");
        $("#image-gallery-title").text($sel.data("title"));
        $("#image-gallery-image").attr("src", $sel.data("image"));
        disableButtons(counter, $sel.data("image-id"));
      }

      if (setIDs == true) {
        $("[data-image-id]").each(function () {
          counter++;
          $(this).attr("data-image-id", counter);
        });
      }
      $(setClickAttr).on("click", function () {
        updateGallery($(this));
      });
    }
  });
}
