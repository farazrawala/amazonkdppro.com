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

var portSliderConfig = {
  dots: !0,
  arrows: !1,
  infinite: !0,
  speed: 1e3,
  slidesToShow: 4,
  autoplay: !1,
  adaptiveHeight: !0,
};

function loadLazyImages($scope) {
  $scope.find('img.lazy').each(function () {
    var src = this.getAttribute('data-src');
    if (src && this.getAttribute('src') !== src) {
      this.setAttribute('src', src);
    }
  });
}

// Initialize (or reposition) the portfolio slider inside a tab panel.
// Sliders are initialized lazily, the first time their tab becomes visible.
// We wait until the slider actually has a non-zero width, otherwise slick
// measures 0 and every slide collapses (shows one big overflowing image).
function activatePortSlider($panel) {
  var $slider = $panel.find('.portsliderrr');
  if (!$slider.length) return;
  loadLazyImages($slider);

  var tries = 0;
  function ensure() {
    // Not measurable yet (tab still transitioning/hidden) -> retry briefly.
    if ($slider.width() <= 0 && tries < 40) {
      tries++;
      setTimeout(ensure, 50);
      return;
    }
    if ($slider.hasClass('slick-initialized')) {
      $slider.slick('setPosition');
    } else {
      $slider.slick(portSliderConfig);
    }
    // Recompute once more after images/layout settle (portrait covers, etc.).
    setTimeout(function () {
      if ($slider.hasClass('slick-initialized')) {
        $slider.slick('setPosition');
      }
    }, 200);
  }
  // Defer so the tab's display:block change is fully applied before slick measures.
  setTimeout(ensure, 60);
}

// Only the tab visible on load can be measured correctly, so init just that one.
activatePortSlider($('.tabs.current'));

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
  // Init the slider the first time this tab opens (or reposition it if already
  // initialized). activatePortSlider waits until the panel has a real width.
  activatePortSlider($panel);
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
