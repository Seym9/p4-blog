$(function() {


    $(".first").on("click", function () {
        let target = document.querySelector(".last");
        let targetPosition = target.getBoundingClientRect().top;
        let startPosition = window.pageYOffset || window.scrollY;
        let distance = targetPosition - startPosition;
        let startTime = null;

        function loop(currentTime) {
            if (startTime === null) startTime = currentTime;
            let timeElapsed = currentTime - startTime;
            let run = ease(timeElapsed, startPosition, distance, 2000);
            window.scrollTo(0, run);
            if (timeElapsed < 2000) requestAnimationFrame(loop);
        }

        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(loop);
    });
});