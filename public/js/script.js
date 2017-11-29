$(document).ready(function(){
    // $(window).load(function() {
    //     $("#flexiselDemo3").flexisel({
    //         visibleItems: 4,
    //         itemsToScroll: 1,         
    //         autoPlay: {
    //             enable: true,
    //             interval: 5000,
    //             pauseOnHover: true
    //         }        
    //     });
    // });

    $('.mobile-menu .mobile-menu-article .button-m-menu').on('click',function(){
       $( ".mobile-menu .mobile-menu-article .m-menu" ).toggle();
    });

    $('.mobile-menu .mobile-menu-article .m-menu .sub-m-menu').on('click',function(e){
       // e.preventDefault();
       $(this).toggleClass('showMenu');
    });

    $(function () {
        $('#scrollToTop').bind("click", function () {
            $('html, body').animate({ scrollTop: 0 }, 1500);
            return false;
        });
    });

    $(".drinks").click(function(e){
        e.preventDefault(); 
    });

    $(".header-contact").click(function(e) { 
        e.preventDefault(); 
        $('html, body').animate({
            scrollTop: $(".article-contact-us").offset().top
        }, 1500);         
    });

    $(".footer-contact").click(function(e) { 
        e.preventDefault(); 
        $('html, body').animate({
            scrollTop: $(".article-contact-us").offset().top
        }, 1500);         
    });

    $('.yes').click(function(){
        $.get('/hiddePermissonMessages',{},function(data){
           if(data.status == 'success'){
                $('#exitpopup').removeClass('overflow');
                $("#exitpopup").hide();
           }
        },'json');
    });

    $('.close-message').click(function(){
    	$('.messageServices').css('display','none');
    })

});








