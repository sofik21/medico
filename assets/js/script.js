jQuery( document ).ready(function($){


    // ------------Programs Page Template----------------

  

    // $(".programs-details-list").clone().prependTo(".mobile-menu");

     //$(".menu-items").clone().prependTo(".mobile-menu");

    $(".programs-details-one").on('click', function(){
        $(this).parent().siblings().children(".programs-details-content-one").slideUp();
        $(this).next().slideToggle();
        $(this).toggleClass("active");
       
    })



    // $(".programs-details-list li").on('click', function(){
    //     console.log('clicked');
    //     $(this).toggleClass("active");
    // })

    // $(".programs-details-list li").on('click', function(){
    //     $(this).addClass("active").siblings().removeClass("active");
       
    // })

    // jquery dynamic tabs
    $('.nav-link').on( 'click', function(){
        $(this).addClass('active').siblings().removeClass('active');

        var sel = $(this).data('tab');
        $(".tab-content").removeClass('active').filter(sel).addClass('active');
    } );
    
 
  


 // owl carousel

 $(".owl-carousel").each(function (index) {
    var items = $(this).data('items'),
        autoplay = $(this).data('autoplay'),
        responsive = $(this).data('responsive'),
        animateout = $(this).data('animateout'),
        dots = $(this).data('dots'),
        nav = $(this).data('nav'),
        margin = $(this).data('margin'),
        autoheight = $(this).data('autoheight'),
        loop = $(this).data('loop');
        center = $(this).data('center');

    $(this).owlCarousel({
        smartSpeed: 400,
        items: items,
        responsiveClass: true,
        responsive: responsive,
        autoplay: autoplay,
        animateOut: animateout,
        dots: dots,
        nav: nav,
        margin: margin,
        autoHeight: autoheight,
        loop: loop,
        center: true,
        navText: ['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>'],
    });
});





});