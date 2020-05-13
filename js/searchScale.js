window.onload = function(){
    $('#hInput').bind('focus', function(){
        $('#loupe').css('transform' , 'translateX(40px)');
    });
    $('#hInput').bind('focusout', function(){
        $('#loupe').css('transform' , 'translateX(0)');
    });
}