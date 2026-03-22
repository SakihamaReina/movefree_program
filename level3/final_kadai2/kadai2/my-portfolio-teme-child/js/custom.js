jQuery(document).ready(function($) {
    $('.details-button').on('click',function(){
        $(this).next().slideToggle();
    });

    $('.dark-mode-toggle').on('click', function() {
        $('body').toggleClass('dark-mode');
    });

    $(window).on('scroll',function(){
        if($(this).scrollTop()>100){
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    })

    $('#back-to-top').on('click',function(){
        $('html,body').animate({scrollTop:0},600);
    });
});

