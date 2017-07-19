var animationDone = false
$(window).scroll(function() {
    var heightOfScreen = $(window).height();
    var scrollHeight = $(window).scrollTop();
    if (scrollHeight * 1.5 >= heightOfScreen && !animationDone) {
        animationDone = true;
        $("#logo-document, #message-document").animate({
            opacity: 1
        }, 300, function() {
            $("#logo-network, #message-network").animate({
                opacity: 1
            }, 300, function() {
                $("#logo-podium, #message-podium").animate({
                    opacity: 1
                }, 300, function() {

                });
            });
        });
    }
})

$(document).ready(function() {
    $("#landingPageGauche").animate({
        opacity : 1
    }, 500);
    window.setTimeout(function () {
        $("#landingPageDroite").animate({
            opacity : 1
        }, 500);
    },800);
});