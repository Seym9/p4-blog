$(function () {

    $(".delete-post, .delete-com").on("click", function (e)  {
        e.preventDefault();
        console.log(e);
        let targetEvent = $(e.target).parent().parent();
        let deleteClass = "";

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
                    }
                }
            });
        }
    });
});