jQuery(document).ready(function($){
    $('.popup-trigger').on('click',function(){
        $('.popup-modal').fadeIn();
    });

    $('.close-popup').on('click',function(){
        $('.popup-modal').fadeOut();
    });

    $('.slide-section-title').on('click',function(){
        $(this).next('.slide-section-content').slideToggle('slow');
    });

    $('.custom-animation-box').on('click',function(){
        $(this).animate({
            width: 200,
            height: 80,
            opacity: 0.7,
            marginLeft: 50
        },600,'swing',function(){
            console.log('アニメーション完了');
        });
    });
});