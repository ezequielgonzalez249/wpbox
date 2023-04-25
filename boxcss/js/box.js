$(document).ready(function(){
    $('.arrow-up').hide();
    $('.h-full').css('height', $(window).height());

    $('.arrow-up').click(function (){
        $("html, body").animate({ scrollTop: "0" });
    });

    //Popup
    $('#open-popup-1').click(function (){
        $('.popUp').show();
    });

    $('.close-popup').click(function (){
        $('.popUp').hide('fast');
    });
}); 

$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if(scroll > 300){
        $('.arrow-up').show('slow').addClass('fadeIn');
    } 

    if(scroll < 100){
        $('.arrow-up').hide('slow');
    } 
});