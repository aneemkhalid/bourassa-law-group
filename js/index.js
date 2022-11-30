

jQuery( document ).ready(function($) {

    $(".awards-wrap").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 992,
                settings: {
                  slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
          ]
    });

    $(".banner-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        fade: true,
        draggable:true,
        arrows: false,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
      
    $(".testimonial-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        fade: true,
        arrows: false,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $(".settlements-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        arrows:true,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
          ]
    });

    $( ".navbar-toggler" ).click(function() {
        $( "body" ).toggleClass('fixed');
    });

    $(document).on('click', '.page-template-video-faqs .faqs .card-header button', function () {
        $("iframe").each(function() { 
            var src= $(this).attr('src');
            $(this).attr('src',src);  
        });
    }); 
});