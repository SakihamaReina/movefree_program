jQuery(document).ready(function($){
     $('#toggle-highlight').on('click', function() {
        $('#class-box').toggleClass('highlight');
    });

    $('#toggle-round').on('click', function() {
        $('#class-box').toggleClass('round');
    });

});