$(function () {
    $(".report").on("click", function (e) {
        e.preventDefault();
        let choice = confirm("Voulez vous signaler ce commentaire ?");

        if (choice) {
            $.post(e.target.href,function (response) {
                    let test = JSON.parse(response);
                    if (test === 'success') {
                        actionStatus("success", "Le commentaire a bien été signalé");
                    } else {
                        actionStatus("error", "Une erreur s'est produite");
                    }
            });
        }
    });
});
