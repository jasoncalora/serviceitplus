$(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $(".header").addClass('smaller');
            $(".dropdown-contents").addClass('smaller');
            $(".company-logo").addClass('smaller');
            $(".header-navigation a").addClass('smaller');            
            $(".header-avigation-small").addClass('smaller');
        } else {
            $(".header").removeClass("smaller");
            $(".dropdown-contents").removeClass("smaller");
            $(".company-logo").removeClass('smaller');
            $(".header-navigation a").removeClass('smaller');
            $(".header-avigation-small").removeClass("smaller");
        }
    });
});

