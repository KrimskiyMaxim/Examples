var slideNow = 1;
var slideCount = $('.slides').children().length;
var navBtnId = 0;
var translateWidth = 0;

$(document).ready(function() {
    $('.key').click(function() {
        navBtnId = $(this).index();
        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('.view').width() * (navBtnId);
            $('.slides').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
});