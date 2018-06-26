// Плавный переход по ссылкам

$('a.smooth, #menu a').click(function(){
    var el = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(el).offset().top - 90}, 800);
    return false; 
});

// Меню

$(window).scroll(function () {
    if ($(this).scrollTop() > 30) {
        $('header').addClass('sticky');
    } 
    else {
        $('header').removeClass('sticky');
    }
});
$('.burger').on('click', function(e) {
    e.preventDefault();
    $('body').addClass('menu-open');
    $('#menu').show(300);
    $(document).mouseup(function (e) {
        var container = $(".menu-open #menu");
        if (container.has(e.target).length === 0){
            $('#menu').hide(300);
            $('body').removeClass('menu-open');
        }
    });
})
$('#menu a, #closeMenu').on('click', function(){
    $('#menu').hide(300);
    $('body').removeClass('menu-open');
})

// Кнопка вверх

$('.scroll-top').on('click',function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 800);
})
