jQuery(document).ready(function($) {
    alert('custom.jsが読み込まれました！');
    $('a').hover(
        function(){$(this).css('opacity','0.7');},
        function(){$(this).css('opacity','1');}
    )  ;
});