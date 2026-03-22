jQuery(document).ready(function($){
    $('.box').mouseenter(function(){
        $(this).css('background-color','lightcoral');
    }).mouseleave(function(){
        $(this).css('background-color','lightblue');
    });
});
