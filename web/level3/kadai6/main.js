jQuery(document).ready(function($){
    $('#alert-button').on('click',function(){
        alert('ボタンがクリックされました');
    });

    $('.box').mouseenter(function(){
        $(this).css('background-color','lightcoral');
    }).mouseleave(function(){
        $(this).css('background-color','lightblue');
    });

    $('.accordion-title').on('click',function(){
        $(this).next('.accordion-content').slideToggle();
    })
});
