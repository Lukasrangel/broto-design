//icone menu-mobile
$('.icone-mobile i').click(function() {
    var menu = $('.menu-mobile');
    if (menu.is(':hidden')) {
        menu.fadeIn();
        $('html, body').css('overflow', 'hidden');
        $(this).removeClass('fa-bars');
        $(this).addClass('fa-times') ////  colocar o xis 
    } else {
        menu.fadeOut();
        $('html, body').css('overflow', 'visible');
        $(this).removeClass('fa-times');
        $(this).addClass('fa-bars') //// devolve as barras 
    }
})


//janela fotos clientes
$('.projeto .banner-portfolio ').click(function() {
    var curSlide = 0;
    var maxSlide = $('.slide').length - 1;
    $('header').css('display', 'none');
    $('.fotos').css('display', 'block');
    $('.slide').hide()
    $('.slide').eq(curSlide).show()

    $('.setas .fas.fa-angle-right').click(function() {
        $('.slide').eq(curSlide).hide();
        curSlide++
        if (curSlide > maxSlide) {
            curSlide = 0;
        }
        $('.slide').eq(curSlide).show();
    })

    $('.setas .fas.fa-angle-left').click(function() {
        $('.slide').eq(curSlide).hide()
        curSlide = curSlide - 1;
        if (curSlide < 0) {
            curSlide = maxSlide;
        }
        $('.slide').eq(curSlide).show();
    })

})

//fecha fotos slide
$('.fotos i.fas.fa-times').click(function() {
    $('.fotos').css('display', 'none');
    $('header').css('display', 'block');
})

//carrosel página clientes
var scroll = 0;
var slider = $('.slider');
$('.fa.fa-chevron-right').click(function() {

    scroll += 300;

    slider.animate({ scrollLeft: scroll }, 1000);
})

$('.fa.fa-chevron-left').click(function() {
    scroll -= 300;

    slider.animate({ scrollLeft: scroll }, 1000);
})

//centralizar dinâmico clientes
if ($(window).width() > 1117) {
    var box_cliente = $('.clientes .comunicacao');
    box_cliente.css('margin-left', '13px');
}