jQuery(document).ready(function($){
    $('.popup-trigger').on('click',function(){
        $('.popup-modal').fadeIn();
    });

    $('.close-popup').on('click',function(){
        $('.popup-modal').fadeOut();
    });
});