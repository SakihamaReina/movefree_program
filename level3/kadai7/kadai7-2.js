jQuery(document).ready(function($){
    $('.slide-section-title').on('click',function(){
        $(this).next('.slide-section-content').slideToggle('slow');
    });

});