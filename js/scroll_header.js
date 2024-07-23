//head fixed dinâmico
var lastPosition = 0;


$(window).scroll(function() {
    var menu = $('.head');
    var menuDesktop = $('header .menu-desktop');

    if ($(this).scrollTop() > lastPosition) {
        menu.fadeOut();
        menuDesktop.fadeOut();


    } else {
        menu.fadeIn();
        if ($(window).width() > 753) {
            menuDesktop.fadeIn();
        }

    }
    lastPosition = $(this).scrollTop();


})