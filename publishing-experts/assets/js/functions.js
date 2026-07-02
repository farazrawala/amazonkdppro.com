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

$('.portsliderrr').slick({
  dots: !0,
  arrows: !1,
  infinite: !0,
  speed: 1e3,
  slidesToShow: 4,
  autoplay: !1,
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
      settings: {
        dots: !0,
        arrows: !1,
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
  ],
});

$('[data-targetit]').on('click', function () {
  $(this).siblings().removeClass('current');
  $(this).addClass('current');
  var e = $(this).data('targetit');
  var $panel = $('.' + e);
  $panel.siblings('[class^="tabs"]').removeClass('current');
  $panel.addClass('current');

  // Lazy images inside a hidden tab never loaded, so the slides are empty.
  // Force them to load now that the tab is visible.
  $panel.find('img.lazy').each(function () {
    var src = this.getAttribute('data-src');
    if (src && this.getAttribute('src') !== src) {
      this.setAttribute('src', src);
    }
  });

  // The slider was initialized while this tab was hidden (0 width). Recalculate
  // its layout after the browser applies the now-visible dimensions.
  window.requestAnimationFrame(function () {
    $panel.find('.slick-slider').slick('setPosition');
  });
});

function closeAllAccordion() {
  $('.accordion .quest-title').removeClass('active');
  $('.accordion .quest-content').stop(true, true).slideUp(300).removeClass('open');
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
