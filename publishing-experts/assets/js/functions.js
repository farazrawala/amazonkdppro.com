$.mCustomScrollbar.defaults.theme = 'light-1';
$('.list-scroll').mCustomScrollbar({
  scrollButtons: {
    enable: !0,
  },
  callbacks: {
    onTotalScroll: function () {
      addContent(this);
    },
    onTotalScrollOffset: 100,
    alwaysTriggerOffsets: !1,
  },
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
      settings: {
        dots: !1,
        arrows: !1,
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// $('.portsliderrr').slick({
//   dots: !0,
//   arrows: !1,
//   infinite: !0,
//   speed: 1e3,
//   slidesToShow: 4,
//   autoplay: !1,
//   adaptiveHeight: !0,
// });

var portSliderConfig = {
  dots: true,
  arrows: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
};

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
      settings: {
        dots: !0,
        arrows: !1,
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
  ],
});

function initPortfolioSlider($slider) {
  if (!$slider.length) return;

  if ($slider.hasClass('slick-initialized')) {
    $slider.slick('unslick');
  }

  $slider.slick(portSliderConfig);
}

initPortfolioSlider($('.tabs .portsliderrr'));

$('[data-targetit]').on('click', function (e) {
  e.preventDefault();

  var target = $(this).data('targetit');

  $('[data-targetit]').removeClass('current');
  $(this).addClass('current');

  $('.tabs').removeClass('current');

  var $panel = $('.' + target);

  $panel.addClass('current');

  initPortfolioSlider($panel.find('.portsliderrr'));

  $('.slick-slider').slick('setPosition', 0);
});

function closeAllAccordion() {
  $('.accordion .quest-title').removeClass('active');
  $('.accordion .quest-content')
    .stop(true, true)
    .slideUp(300)
    .removeClass('open');
}

// Sync initial state: collapse everything except any pre-opened item.
$('.accordion .quest-content').not('.open').hide();

$(document).on('click', '.accordion .quest-title', function (e) {
  e.preventDefault();
  var $title = $(this);
  // Target the sibling content (avoids duplicate id="accordion-5" clashes).
  var $content = $title.siblings('.quest-content');
  if ($title.hasClass('active')) {
    $title.removeClass('active');
    $content.stop(true, true).slideUp(300).removeClass('open');
  } else {
    closeAllAccordion();
    $title.addClass('active');
    $content.stop(true, true).slideDown(300).addClass('open');
  }
});
