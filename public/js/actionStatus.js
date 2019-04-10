function actionStatus (status,message){
    let container = document.createElement("div");
    container.textContent = message;
    //$("body").append(container);
    $(".status-message").append(container);

    if (status === "success") {
        console.log(container);
        container.classList.add("status-success");
        $(container).fadeTo(1000, 0.50);
        $(container).animate({
            top: '-100px'
        }, 3000, function () {
            container.remove();
        });

    } else {
        container.classList.add("status-error");
        $(container).animate({
            top: '-100px'
        }, 3000, function () {
            container.remove();
        });
    }

}