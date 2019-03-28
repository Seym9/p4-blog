$(function () {

    $(".delete-post, .delete-com").on("click", function (e)  {
        e.preventDefault();
        let targetEvent = $(e.target).parent().parent();
        let deleteClass = "";
//changer le nom deleteClass
        if (e.target.href.includes("post")){
            deleteClass = "cet article";
        } else {
            deleteClass = "ce commentaire";
        }

        let choice = confirm('Voulez vous vraiment effacer ' + deleteClass);

        if (choice){
            $.ajax({
                type: 'DELETE',
                url: e.target.href,
                success: function (response) {
                    let test = JSON.parse(response);
                    if (test === 'success') {
                        targetEvent.fadeTo(600, 0.00, function(){
                            targetEvent.slideUp(400, function() {
                                targetEvent.remove();
                            });
                        });
                        if (test === "success" && deleteClass.includes("article")){
                            actionStatus("success","Cet article à bien été supprimé");
                        } else if (test === "success" && deleteClass.includes("commentaire"))
                            actionStatus("success","Ce commentaire à bien été supprimé");
                        }else{
                            actionStatus("error","Une erreur s'est produite");
                        }
                    }
                });
            }
    });
});