$(document).ready(function(){
    $('a').on('click', function(e){
        e.preventDefault();
    });

    $('#ddmenu').hover(function () {
        $('#ddmenu').slideDown(200);
    });

    /*$('.menu').hover(function() {
        $('#downMenu').slideDown();
    });*/
});

