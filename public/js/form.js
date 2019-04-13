$(function () {
    $('#form-comment').on('submit', function (e) {
        let regexAuthor = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{3,60}$/;
        let $author = $('#author');
        let $authorVal = $author.val();
        let $spanAuthor = $('.error-author-comment');

        let $comment = $('#comment');
        let $commentVal = $comment.val();
        let $spanComment = $('.error-comment');

        if (!regexAuthor.test($authorVal)){
            $spanAuthor.show();
            e.preventDefault();
            $author.css("border", "1px solid red")
        }else{
            $spanAuthor.css('display','none');
            $author.css("border", "1px solid green");
        }

        if ($commentVal.length<1){
            $spanComment.show();
            e.preventDefault();
            $comment.css("border", "1px solid red")
        }else{
            $spanComment.css('display','none');
            $comment.css("border", "1px solid green");
        }
    });
});