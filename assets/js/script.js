$(document).ready(function(){
    $(window).scroll(function(){
        if($(document).scrollTop() > 20){
            $('.navbar').css("box-shadow","1px 1px 5px #495057");
        }
        else{
            $('.navbar').css('box-shadow','none');
        }
    });
    $('.navbar-toggler').click(function(){
        //change menu icon
        $('.bx-menu').toggle('fast');
        $('.bx-x').toggle('fast');
        //navbar style for small devices
        $('.logo').toggleClass('custom-logo');
        $('.collapse').toggleClass('custom-collapse');
    });
});