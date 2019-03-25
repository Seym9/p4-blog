$(function () {
    tinymce.init({
        selector: '#post',
        width: '100%',
        height: 300,
        plugins: "lists, textcolor, image, link, code, wordcount, autolink, autosave, table, hr",
        toolbar: "undo, redo | formatselect | bold, italic, underline, forecolor, blockquote",
        autosave_restore_when_empty: true,
        menu: {
            edit: {title: 'Edit', items: 'undo redo'},
        },
        mobile: {
            theme: 'mobile',
        },
        content_style: "* {font-family: 'Open Sans', sans-serif} p {font-size: 1.3em} a {color: #007bff} p, h1, h2, h3, h4, h5, h6 {color: #2b343d}",
        content_css: ['//fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i']
    });
});
