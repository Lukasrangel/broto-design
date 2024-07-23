//head fixed dinâmico mobile

if ($(window).width() < 753) {
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
}

//header sticky desktop
if ($(window).width() > 753) {
    var headerDinamico = $('.header-dinamico');
    var position = 456;
    $(window).scroll(function() {

        if ($(this).scrollTop() > 456 && $(this).scrollTop() < position) {
            headerDinamico.fadeIn();

        } else {
            headerDinamico.fadeOut();
        }

        position = $(this).scrollTop();
    })

}
/*
//menu ul diminui
var ultimaPosition = 0;
var fontSize = 52;

if ($(window).width() > 800 && $(window).scrollTop() <= 80) {
    $(window).scroll(function() {

        position = $(window).scrollTop();

        if (position > ultimaPosition) {
            ultimaPosition = position;
            fontSize = fontSize - 0.1;
            fonte = $('header .menu-desktop ul li ').css('font-size', fontSize);
        } else {
            ultimaPosition = position
            fontSize = fontSize + 0.1;
            fonte = $('header .menu-desktop ul li ').css('font-size', fontSize);
        }


    })
}*/