$(function(){
    $('.search').on('click', function(){
    $('.main-menu .navbar-form .input-group').slideToggle();
});
    });

//автоматически задавать картинка необходимую ширину
$(window).load(function(){
   var carouselCaptionWidth = $('#carousel-sidebar .active img').width();
//    console.log(carouselCaptionWidth);
    $('#carousel-sidebar img').each(function(){
       $(this).attr('widtn', carouselCaptionWidth); 
    });
    $('#carousel-sidebar .sidebar-carousel-caption').css('max-width', carouselCaptionWidth + 'px');
    
    $('#carousel-sidebar .carousel-indicators').css('max-width', carouselCaptionWidth + 'px');
    
    $('.sidebar .banner').css('max-width', carouselCaptionWidth + 'px');
    
    
    
});