$(document).ready(function () {
  $('.dropdown-service-ic').click(function () {
    console.log('dropdown-service-ic clicked');
    $(this).parent('.menuWrap').find('.sub-menu').toggleClass('open');
  });
});

$('.package-scroll').slimScroll({
  height: '250px',
  color: '#3939399e',
});

// Slider testimonials
$('.testi-sldier').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  dots: false,
  arrows: true,
  lazyLoad: 'progressive',
  focusOnSelect: true,
  prevArrow: '<i class="fas fa-caret-left slick-prev key1"></i>',
  nextArrow: '<i class="fas fa-caret-right slick-next key2"></i>',
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$('.client_strip_slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});

$(window).width() <= 991 &&
  0 != '.process-responsive-slider'.length &&
  ($('.process-responsive-slider').addClass('owl-carousel owl-theme'),
  $('.process-responsive-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      576: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 3,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.service-responsive-slider'.length &&
  ($('.service-responsive-slider').addClass('owl-carousel owl-theme'),
  $('.service-responsive-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 2,
      },
      786: {
        items: 3,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.flip-cards-responsive-slider'.length &&
  ($('.flip-cards-responsive-slider').addClass('owl-carousel owl-theme'),
  $('.flip-cards-responsive-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.mb_slider'.length &&
  ($('.mb_slider').addClass('owl-carousel owl-theme'),
  $('.mb_slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$('.howitwork-carousel').owlCarousel({
  loop: true,
  nav: false,
  mouseDrag: false,
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  dots: true,
  items: 1,
  autoHeight: false,
});

$(window).width() <= 991 &&
  0 != '.testi-responsive-sldier'.length &&
  ($('.testi-responsive-sldier').addClass('owl-carousel owl-theme'),
  $('.testi-responsive-sldier').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.expertise-responsive-slider'.length &&
  ($('.expertise-responsive-slider').addClass('owl-carousel owl-theme'),
  $('.expertise-responsive-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.battled-best-sellers'.length &&
  ($('.battled-best-sellers').addClass('owl-carousel owl-theme'),
  $('.battled-best-sellers').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.we-get-resposnive-slider'.length &&
  ($('.we-get-resposnive-slider').addClass('owl-carousel owl-theme'),
  $('.we-get-resposnive-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$('.howitwork-carousel').owlCarousel({
  loop: true,
  nav: false,
  mouseDrag: false,
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  dots: true,
  items: 1,
  autoHeight: false,
});

$(window).width() <= 991 &&
  0 != '.about-box-slider'.length &&
  ($('.about-box-slider').addClass('owl-carousel owl-theme'),
  $('.about-box-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(window).width() <= 991 &&
  0 != '.expertise-section-slider'.length &&
  ($('.expertise-section-slider').addClass('owl-carousel owl-theme'),
  $('.expertise-section-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      786: {
        items: 2,
      },
      991: {
        items: 2,
      },
    },
  }));

$(document).ready(function () {
  $('#step1').addClass('hiw-active');

  $('#step1').click(function () {
    $('#step2, #step3, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step1').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 0);
  });

  $('#step2').click(function () {
    $('#step1, #step3, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step2').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 1);
  });

  $('#step3').click(function () {
    $('#step1, #step2, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step3').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 2);
  });
  $('#step4').click(function () {
    $('#step1, #step2, #step3, #step5, #step6').removeClass('hiw-active');
    $('#step4').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 3);
  });
  $('#step5').click(function () {
    $('#step1, #step2, #step3, #step4, #step6').removeClass('hiw-active');
    $('#step5').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 4);
  });
  $('#step6').click(function () {
    $('#step1, #step2, #step3, #step4, #step5').removeClass('hiw-active');
    $('#step6').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 5);
  });

  //
  $('.owl-dot:nth-child(1)').click(function () {
    $('#step2, #step3, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step1').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 0);
  });
  $('.owl-dot:nth-child(2)').click(function () {
    $('#step1, #step3, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step2').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 1);
  });
  $('.owl-dot:nth-child(3)').click(function () {
    $('#step1, #step2, #step4, #step5, #step6').removeClass('hiw-active');
    $('#step3').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 2);
  });
  $('.owl-dot:nth-child(4)').click(function () {
    $('#step1, #step2, #step3, #step5, #step6').removeClass('hiw-active');
    $('#step4').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 3);
  });
  $('.owl-dot:nth-child(5)').click(function () {
    $('#step1, #step2, #step3, #step4, #step6').removeClass('hiw-active');
    $('#step5').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 4);
  });
  $('.owl-dot:nth-child(6)').click(function () {
    $('#step1, #step2, #step3, #step4, #step5').removeClass('hiw-active');
    $('#step6').addClass('hiw-active');
    $('.howitwork-carousel').trigger('to.owl.carousel', 5);
  });
});

$('[href="#"]').attr('href', 'javascript:;');

$('.btn-popup').click(function () {
  $('.LoginPopup').fadeIn();
  $('.overlay').fadeIn();
});

$('.closePop,.overlay').click(function () {
  $('.popupMain').fadeOut();
  $('.overlay').fadeOut();
});

// $('.menu .menu-item-has-children').addClass('dropdown-nav ');
// $('.menu .menu-item-has-children ul.sub-menu').addClass('dropdown');

// Accordian
$('.accordian h4').click(function () {
  $('.accordian li').removeClass('active');
  $(this).parent('li').addClass('active');
  $('.accordian li div').slideUp();
  $(this).parent('li').find('div').slideDown();
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

// $(window).on('load', function () {
//   var currentUrl = window.location.href.substr(
//     window.location.href.lastIndexOf('index.html') + 1
//   );
//   $('ul.menu li a').each(function () {
//     var hrefVal = $(this).attr('href');
//     if (hrefVal == currentUrl) {
//       $(this).removeClass('active');
//       $(this).closest('li').addClass('active');
//       $('ul.menu li.first').removeClass('active');
//     }
//   });
//   if ($(window).width() > 767) {
//     // console.log("scroll 200")
//     // $(window).on("scroll touchmove", function() {
//     //     $(".side-bar,.side-bar-form,.side-bar-frm-head").addClass("active", $(document).scrollTop() > 12000);
//     // });
//     // $('.side-bar,.side-bar-form,.side-bar-frm-head').addClass('active');
//     // console.log($('.side-bar'));
//   }
// });

function goToScroll(e) {
  $('html, body').animate(
    {
      scrollTop: $('.' + e).offset().top,
    },
    1000
  );
}

$(document).ready(function () {
  if ($(window).width() > 980) {
    $('.perspectiv-carousel').PicCarousel({
      height: 400,
      width: 1000,
      posterWidth: 195,
      posterHeight: 282,
      scale: 0.9,
      speed: 1000,
      autoPlay: true,
      delay: 1000,
      verticalAlign: 'middle',
    });
  }
  if ($(window).width() < 980 && $(window).width() > 767) {
    $('.perspectiv-carousel').PicCarousel({
      height: 400,
      width: 700,
      posterWidth: 195,
      posterHeight: 282,
      scale: 0.9,
      speed: 1000,
      autoPlay: true,
      delay: 1000,
      verticalAlign: 'middle',
    });
  }
});

$('.btn-popup').click(function () {
  $('#pop-form').css('display', 'flex');
});

$('.closePop').click(function () {
  $('#pop-form').css('display', 'none');
});

// new pages js

$('.prr_slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

if ($(window).width() > 980) {
  $('.perspectiv-carousel').PicCarousel({
    height: 400,
    width: 1000,
    posterWidth: 195,
    posterHeight: 282,
    scale: 0.9,
    speed: 1000,
    autoPlay: true,
    delay: 1000,
    verticalAlign: 'middle',
  });
}
if ($(window).width() < 980 && $(window).width() > 767) {
  $('.perspectiv-carousel').PicCarousel({
    height: 400,
    width: 700,
    posterWidth: 195,
    posterHeight: 282,
    scale: 0.9,
    speed: 1000,
    autoPlay: true,
    delay: 1000,
    verticalAlign: 'middle',
  });
}
if ($(window).width() < 768) {
  $('.perspectiv-carousel').PicCarousel({
    height: 400,
    width: 300,
    posterWidth: 195,
    posterHeight: 282,
    scale: 0.9,
    speed: 1000,
    autoPlay: true,
    delay: 1000,
    verticalAlign: 'middle',
  });
}
