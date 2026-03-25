jQuery(document).ready(function($){
    $('#change-color-size').on('click',function(){
        $('#dynamic-box').css({
            'background-color': 'purple',
            'width': '200px',
            'height': '80px',
            'color': 'yellow',
            'font-size': '24px',
        });
    });
    $('#reset-style').on('click',function(){
        $('#dynamic-box').css({
            'background-color': 'lightblue',
            'width': '150px',
            'height': '150px',
            'color': 'white',
            'font-size': 'inherit'
        });
    });
     $('#toggle-highlight').on('click', function() {
        $('#class-box').toggleClass('highlight');
    });

    $('#toggle-round').on('click', function() {
        $('#class-box').toggleClass('round');
    });

});