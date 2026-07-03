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

// Portfolio tab sliders use Owl Carousel (it re-measures reliably on tab show).
var portOwlConfig = {
  items: 4,
  margin: 20,
  loop: true,
  nav: false,
  dots: true,
  autoplay: false,
  smartSpeed: 600,
  responsive: {
    0: { items: 1 },
    576: { items: 2 },
    768: { items: 3 },
    992: { items: 4 },
  },
};

// Lazy images inside a hidden tab never load; force them so slides aren't empty.
function loadLazyImages($scope) {
  $scope.find('img.lazy').each(function () {
    var src = this.getAttribute('data-src');
    if (src && this.getAttribute('src') !== src) {
      this.setAttribute('src', src);
    }
  });
}

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

// Initialize (or refresh) the Owl Carousel inside a tab panel. Owl must be
// initialized while the panel is visible, otherwise it measures a width of 0.
function initPortfolioOwl($slider) {
  if (!$slider.length) return;
  loadLazyImages($slider);
  $slider.each(function () {
    var $s = $(this);
    if ($s.hasClass('owl-loaded')) {
      $s.trigger('refresh.owl.carousel');
    } else {
      $s.addClass('owl-carousel owl-theme').owlCarousel(portOwlConfig);
    }
  });
}

// Only the tab visible on load can be measured correctly, so init just that one.
initPortfolioOwl($('.tabs.current .portsliderrr'));

$('[data-targetit]').on('click', function (e) {
  e.preventDefault();

  var target = $(this).data('targetit');

  $('[data-targetit]').removeClass('current');
  $(this).addClass('current');

  $('.tabs').removeClass('current');

  var $panel = $('.' + target);
  $panel.addClass('current');

  // Defer so the panel's display:block is applied before Owl measures its width.
  setTimeout(function () {
    initPortfolioOwl($panel.find('.portsliderrr'));
  }, 60);
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
