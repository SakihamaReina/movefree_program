jQuery(document).ready(function($) {
    $('.dark-mode-toggle').on('click', function() {
        $('body').toggleClass('dark-mode');
    });

    $('a.nav-btn').on('click', function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 600);
    });

    $(window).on('scroll',function(){
        if($(this).scrollTop()>100){
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }

        reveal();
    })

    $('#back-to-top').on('click',function(){
        $('html,body').animate({scrollTop:0},600);
    });

    function reveal(){
        $('.fade-section').each(function(){
            var top = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > top - windowHeight + 100){
                $(this).addClass('show');
            }
        });
    }

    reveal();

    setTimeout(function(){
        $('.welcome-message').addClass('show');
    },500);

    $('.work-item img').on('click', function(){
        const imgSrc = $(this).attr('src');
        $('.modal-img').attr('src', imgSrc);
        $('.modal').css('display','flex').hide().fadeIn();
    });

    $('.close').on('click', function(){
        $('.modal').fadeOut();
    });

});
