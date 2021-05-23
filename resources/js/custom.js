$(document).ready(function () {
    $('.home-product-slick').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        lazyLoad: 'ondemand',
        arrows: true,
        speed: 1500,
        centerMode: false,
        slidesToShow: 4,
        adaptiveHeight: true,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll:4,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    })
});


$(document).ready(function () {
    $('.home-service-slick').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        lazyLoad: 'ondemand',
        arrows: true,
        speed: 1500,
        centerMode: false,
        slidesToShow: 4,
        adaptiveHeight: true,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll:4,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    })
});


$(document).ready(function () {
    $('.home-client-slick').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        lazyLoad: 'ondemand',
        arrows: true,
        speed: 1500,
        centerMode: false,
        slidesToShow: 4,
        adaptiveHeight: true,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll:4,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    })
});










$(document).ready(function () {
    $("#showuserotp").click(function () {
        $("#user-otp").show();
        $("#user-mobile").hide();
    });

});
$(".mini img").click(function(){  

    $(".maxi").attr("src",$(this).attr("src").replace("100x100","400x400"));
   
   });

 

//    product search filter
$(document).ready(function() {
    $('#filterOptions li a').click(function() {
      var ourClass = $(this).attr('class');
      $('#filterOptions li').removeClass('active');
      $(this).parent().addClass('active');

      if(ourClass == 'all') {
        $('#ourHolder').children('div.item').show();
      }
      else {
        $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
        $('#ourHolder').children('div.' + ourClass).show();
      }
      return false;
    });
  });
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#ourHolder div").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

//end product search filter