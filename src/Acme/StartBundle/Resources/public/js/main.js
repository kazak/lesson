$(function() {

    $("#featured").on("ready.fndtn.orbit", function(event) {
        console.info("ready");
    });
    $("#featured").on("before-slide-change.fndtn.orbit", function(event) {
        console.info("before slide change");
    });
    $("#featured").on("after-slide-change.fndtn.orbit", function(event, orbit) {
        console.info("after slide change");
        console.info("slide " + orbit.slide_number + " of " + orbit.total_slides);
    });
    $("#featured").on("timer-started.fndtn.orbit", function(event, orbit) {
        console.info("timer started");
    });
    $("#featured").on("timer-stopped.fndtn.orbit", function(event, orbit) {
        console.info("timer stopped");
    });

    if (window.pluso)if (typeof window.pluso.start == "function") return;
    if (window.ifpluso==undefined) { window.ifpluso = 1;
        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
        var h=d[g]('body')[0];
        h.appendChild(s);
    }});
