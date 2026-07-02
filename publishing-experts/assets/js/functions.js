new WOW().init();

$(document).ready(function () {
  'use strict';
  function e() {
    (i.css({ width: '0%' }),
      clearTimeout(l),
      (o = 0),
      (t = !1),
      (l = setInterval(s, 10)));
  }
  function s() {
    !1 === t &&
      ((o += 1 / 4.1),
      i.css({ width: o + '%' }),
      o >= 100 && (a.slick('slickNext'), e()));
  }
  $('.salecrcle-btn').click(function () {
    $('.sale-blckfriday, .salecrcle-btn, .sale-box, .uppersale-bx').toggleClass(
      'open',
    );
  });
  window.setTimeout(function () {
    $('.salecrcle-btn, .salecrcle-btn, .sale-box, .uppersale-bx').toggleClass(
      'open',
    );
  }, 6e3);
  $('.mobile-nav-btn').click(function () {
    $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
  });
  $('.firstlevel li a').click(function () {
    $(this).hasClass('active')
      ? ($(this).removeClass('active'), $(this).siblings('ul').slideUp())
      : ($('.firstlevel li a').removeClass('active'),
        $(this).addClass('active'),
        $('.dropdown').slideUp(),
        $(this).siblings('ul').slideDown());
  });
  $('.mainnav > li > a').click(function () {
    $(this).hasClass('active')
      ? ($(this).removeClass('active'),
        $(this).parents('li').children('.firstlevel').slideUp())
      : ($(this).addClass('active'),
        $(this).parents('li').children('.firstlevel').slideDown(),
        $(this)
          .parents('li')
          .siblings('li')
          .children('a')
          .removeClass('active'),
        $(this).parents('li').siblings('li').children('.firstlevel').slideUp());
  });
  $('.cs-slider').slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 1e3,
    slidesToShow: 1,
    autoplay: !0,
    autoplaySpeed: 4e3,
    adaptiveHeight: !0,
  });
  $('.portslider').slick({
    dots: !0,
    arrows: !1,
    infinite: !0,
    speed: 1e3,
    slidesToShow: 6,
    autoplay: !1,
    adaptiveHeight: !0,
    responsive: [
      {
        breakpoint: 767,
        settings: { dots: !0, arrows: !1, slidesToShow: 3, slidesToScroll: 1 },
      },
    ],
  });
  $('.portsliderrr').slick({
    dots: !0,
    arrows: !1,
    infinite: !0,
    speed: 1e3,
    slidesToShow: 4,
    autoplay: !1,
    adaptiveHeight: !0,
  });
  $('.home-slider').slick({
    dots: !0,
    arrows: !0,
    infinite: !0,
    speed: 1e3,
    slidesToShow: 1,
    autoplay: !0,
    autoplaySpeed: 4e3,
    adaptiveHeight: !0,
    responsive: [
      {
        breakpoint: 767,
        settings: { dots: !0, arrows: !1, slidesToShow: 1, slidesToScroll: 1 },
      },
    ],
  });
  ($('.partnerslider').slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 1e3,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: !0,
    autoplaySpeed: 2e3,
    adaptiveHeight: !0,
  }),
    (a = $('.home-slider')),
    (i = $('.slider-progress .progress')),
    $('.slider-wrapper').on({
      mouseenter: function () {
        t = !0;
      },
      mouseleave: function () {
        t = !1;
      },
    }));
  e();
  var i,
    a,
    t,
    l,
    o,
    r = {
      dots: !0,
      arrows: !0,
      infinite: !0,
      speed: 1e3,
      slidesToShow: 1,
      autoplay: !0,
      autoplaySpeed: 4e3,
      adaptiveHeight: !0,
      prevArrow: $('.prev-btn'),
      nextArrow: $('.next-btn'),
      customPaging: function (e, s) {
        return '<a> 0' + (s + 1) + '</a>';
      },
    };
  $('.number-slider').slick(r);
  $('.sliderxs').slick({
    arrows: !1,
    dots: !0,
    autoplay: !0,
    adaptiveHeight: !0,
    responsive: [
      { breakpoint: 1e4, settings: 'unslick' },
      { breakpoint: 767, settings: { unslick: !0 } },
    ],
  });
  $('.testiwrprslider').slick({
    dots: !1,
    arrows: !0,
    infinite: !0,
    speed: 3e3,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: !0,
    autoplaySpeed: 2e3,
    adaptiveHeight: !0,
    responsive: [
      {
        breakpoint: 767,
        settings: { dots: !1, arrows: !1, slidesToShow: 1, slidesToScroll: 1 },
      },
    ],
  });
  $('.testwraper').slick({
    dots: !0,
    arrows: !0,
    infinite: !0,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    autoplay: !0,
    autoplaySpeed: 2e3,
    fade: !0,
    cssEase: 'linear',
    responsive: [{ breakpoint: 776, settings: { vertical: !1, arrows: !1 } }],
  });
  ($.each(
    { 1: { slider: '.packslider' }, 2: { slider: '.boxwrap' } },
    function () {
      $(this.slider).slick({
        arrows: !1,
        dots: !1,
        autoplay: !0,
        settings: 'unslick',
        responsive: [
          { breakpoint: 2e3, settings: 'unslick' },
          { breakpoint: 767, settings: { unslick: !0 } },
        ],
      });
    },
  ),
    $('.product-slider-gallery').slick({
      dots: !1,
      arrows: !1,
      infinite: !0,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplay: !0,
      autoplaySpeed: 3e3,
      asNavFor: '.product-gallery-nav',
    }),
    $('.product-gallery-nav').slick({
      dots: !1,
      arrows: !0,
      slidesToShow: 4,
      slidesToScroll: 1,
      speed: 800,
      autoplay: !0,
      autoplaySpeed: 3e3,
      vertical: !0,
      verticalSwiping: !0,
      focusOnSelect: !0,
      asNavFor: '.product-slider-gallery',
      responsive: [
        { breakpoint: 991, settings: { vertical: !1 } },
        { breakpoint: 776, settings: { vertical: !1 } },
        {
          breakpoint: 480,
          settings: { vertical: !1, slidesToShow: 2, slidesToScroll: 1 },
        },
      ],
    }),
    $('.thumb-slider').slick({
      centerMode: !0,
      centerPadding: '0px',
      arrows: !0,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: !1,
            dots: !1,
            centerMode: !0,
            centerPadding: '10px',
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 767,
          settings: {
            arrows: !1,
            dots: !1,
            centerMode: !1,
            centerPadding: '10px',
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: !1,
            dots: !1,
            centerMode: !0,
            centerPadding: '10px',
            slidesToShow: 1,
          },
        },
      ],
    }),
    $('.slider-for').slick({
      dots: !0,
      arrows: !1,
      infinite: !0,
      speed: 500,
      slide: 'li',
      fade: !1,
      cssEase: 'linear',
      centerMode: !0,
      slidesToShow: 1,
      variableWidth: !0,
      autoplay: !0,
      autoplaySpeed: 4e3,
      responsive: [
        {
          breakpoint: 800,
          settings: {
            arrows: !1,
            centerMode: !1,
            centerPadding: '40px',
            variableWidth: !1,
            slidesToShow: 1,
            dots: !0,
          },
          breakpoint: 1200,
          settings: {
            arrows: !1,
            centerMode: !1,
            centerPadding: '40px',
            variableWidth: !1,
            slidesToShow: 1,
            dots: !0,
          },
        },
      ],
      customPaging: function (e, s) {
        return (
          '<button class="tab">' +
          $('.thumbsmain li:nth-child(' + (s + 1) + ')').html() +
          '</button>'
        );
      },
    }),
    $('.gallery-slider-main').slick({
      dots: !1,
      arrows: !1,
      infinite: !0,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1e3,
      autoplay: !0,
      autoplaySpeed: 2e3,
      fade: !0,
      cssEase: 'linear',
      asNavFor: '.gallery-nav-main',
    }),
    $('.gallery-nav-main').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.gallery-slider-main',
      dots: !0,
      focusOnSelect: !0,
    }),
    $('.bid-slider-gallery').slick({
      dots: !1,
      arrows: !1,
      infinite: !0,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplay: !0,
      autoplaySpeed: 3e3,
      asNavFor: '.bid-gallery-nav',
    }),
    $('.bid-gallery-nav').slick({
      dots: !1,
      arrows: !1,
      slidesToShow: 5,
      slidesToScroll: 5,
      speed: 800,
      autoplay: !0,
      autoplaySpeed: 3e3,
      vertical: !0,
      focusOnSelect: !0,
      asNavFor: '.bid-slider-gallery',
      responsive: [{ breakpoint: 767, settings: { vertical: !1 } }],
    }),
    $('[data-targetit]').on('click', function () {
      ($(this).siblings().removeClass('current'), $(this).addClass('current'));
      var e = $(this).data('targetit');
      ($('.' + e)
        .siblings('[class^="tabs"]')
        .removeClass('current'),
        $('.' + e).addClass('current'),
        $('.slick-slider').slick('setPosition', 0));
    }));
  var n =
    decodeURIComponent(
      (RegExp('[?|&]pack=([^&;]+?)(&|#|;|$)').exec(location.search) || [
        null,
        '',
      ])[1].replace(/\+/g, '%20'),
    ) || null;
  function c() {
    (jQuery('.accordion .quest-title').removeClass('active'),
      jQuery('.accordion .quest-content').slideUp(300).removeClass('open'));
  }
  ('1' == n && $('#packages').val('Basic Website Packages - $244.00'),
    '2' == n && $('#packages').val('Startup Website Packages - $394.00'),
    '3' == n && $('#packages').val('Professional Website Packages - $844.00'),
    '4' == n && $('#packages').val('Basic Logo Package - $44.00'),
    '5' == n && $('#packages').val('Start Up Logo Package - $74.00'),
    '6' == n && $('#packages').val('Professional Logo Package - $124.00'),
    '7' == n && $('#packages').val('Startup SEO Plan - $1,000.00'),
    '8' == n && $('#packages').val('Scaling SEO Plan - $1,500.00'),
    '9' == n && $('#packages').val('Venture SEO Plan - $2,000.00'),
    '10' == n && $('#packages').val('Starter Video Package - $349.00'),
    '11' == n && $('#packages').val('Business Video Package - $599.00'),
    '12' == n && $('#packages').val('Premium Video Package - $999.00'),
    $('.tab-custom .tab-custom-nav a').click(function (e) {
      ($(this)
        .closest('li')
        .siblings('li')
        .children('a')
        .removeClass('current'),
        $(this).addClass('current'),
        $(this)
          .closest('.tab-custom')
          .children('div.tab-content-panel:not(:hidden)')
          .hide(),
        $(this.hash).show(),
        e.preventDefault(),
        $('.sliderxs').slick('setPosition'));
    }),
    $('.tabs-custom-nav a').click(function (e) {
      ($(this)
        .closest('li')
        .siblings('li')
        .children('a')
        .removeClass('current'),
        $(this).addClass('current'),
        $(this.hash)
          .closest('.general')
          .children('div.tab-content-panel:not(:hidden)')
          .hide(),
        $(this.hash).show(),
        e.preventDefault(),
        $('.sliderxs').slick('setPosition'));
    }),
    $('.accordion .quest-title.active1').addClass('active'),
    jQuery('.quest-title').click(function (e) {
      var s = jQuery(this).attr('href');
      (jQuery(e.target).is('.active')
        ? c()
        : (c(),
          jQuery(this).addClass('active'),
          jQuery('.accordion ' + s)
            .slideDown(300)
            .addClass('open')),
        e.preventDefault());
    }),
    $('[data-fancybox="swf-file"]').fancybox({
      iframe: { css: { width: '336px', height: '280px' } },
    }),
    $('[data-fancybox="video-file"]').fancybox({
      iframe: { css: { width: '580px', height: '340px' } },
    }));
  var d = jQuery('.car-top');
  (jQuery(window).scroll(function () {
    jQuery(window).scrollTop() >= 200
      ? (d.addClass('show'), d.addClass('car-down'))
      : (d.removeClass('show'),
        setTimeout(function () {
          d.removeClass('car-down');
        }, 300));
  }),
    d.on('click', function () {
      return (
        jQuery('html,body').animate({ scrollTop: 0 }, 800),
        jQuery(this).addClass('car-run'),
        setTimeout(function () {
          d.removeClass('car-run');
        }, 1e3),
        !1
      );
    }));
});
var $gallery = $('.gallery-slider-main'),
  slideCount = null;
function setSlideCount() {
  'use strict';
  $('.slide-count-wrap').find('.total').text(slideCount);
}
function setCurrentSlideNumber(e) {
  'use strict';
  $('.slide-count-wrap')
    .find('.current')
    .text(e + 1);
}
function setButtonURL() {
  javascript: $zopim.livechat.window.show();
}
($gallery.on('init', function (e, s) {
  'use strict';
  ((slideCount = s.slideCount),
    setSlideCount(),
    setCurrentSlideNumber(s.currentSlide));
}),
  $gallery.on('beforeChange', function (e, s, i, a) {
    'use strict';
    setCurrentSlideNumber(a);
  }),
  $(function () {
    'use strict';
    var e = new Date().getFullYear();
    $('#year').html(e);
  }),
  $(function () {
    (($.mCustomScrollbar.defaults.theme = 'light-1'),
      $('.list-scroll').mCustomScrollbar({
        scrollButtons: { enable: !0 },
        callbacks: {
          onTotalScroll: function () {
            addContent(this);
          },
          onTotalScrollOffset: 100,
          alwaysTriggerOffsets: !1,
        },
      }));
  }));
