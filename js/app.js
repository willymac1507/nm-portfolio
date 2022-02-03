$('.hamburger').click(function () {
    $('.navbar').slideToggle(500, function () {
        if ($('.navbar').attr('style') === 'display: none;') {
            $('.navbar').removeAttr('style');
        };
    });
    $('.hamburger').toggleClass('hamburger--open');
})