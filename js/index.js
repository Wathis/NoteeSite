var animationDone = false
$(window).scroll(function() {

    $('.navBarMobile').css('position' , 'fixed');
    var heightOfScreen = $(window).height();
    var scrollHeight = $(window).scrollTop();
    if (scrollHeight * 1.7 >= heightOfScreen && !animationDone) {
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

    $(".container").css("visibility","visible");
    $(".loaderContainer").css("display","none");

    $("#landingPageGauche").animate({
        opacity : 1
    }, 1000);
    window.setTimeout(function () {
        $("#landingPageDroite").animate({
            opacity : 1
        }, 1000);
    },500);
});
