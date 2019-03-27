$(function () {
    $(".delete-post").on("click", (e) => {
        e.preventDefault();
        $.ajax({
            type: 'DELETE',
            url: e.target.href,
            success: function(response){
                let test = JSON.parse(response);

                if (test === 'test') {
                    $(e.target).parent().remove()
                }
            }
        });
    });
});