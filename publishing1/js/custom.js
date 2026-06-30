window.addEventListener("load", function(event) {
  VirtualSelect.init({
      ele: '.virtual-select'
  });

});

$(document).ready(function () {
    $(".service-carousel").owlCarousel({
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        dots: false,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".client-logo").owlCarousel({
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        mouseDrag: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            768: {
                items: 5
            },
            1000: {
                items: 6
            }
        }
    });
        
})

$('.slider-for').slick({
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows:true,
  nextArrow: '<i class="fas fa-arrow-right"></i>',
  prevArrow: '<i class="fas fa-arrow-left"></i>',
  centerMode: false,
  focusOnSelect: false
});

AOS.init({
    disable: function() {
        return window.innerWidth < 800;
    }
});

$(window).width() <= 480 && 0 != ".counter-responsive-slider".length && ($(".counter-responsive-slider").addClass("owl-carousel owl-theme"), $(".counter-responsive-slider").owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,  
                    }
                }
            }));

$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("i:last-child")
    .toggleClass("fa-minus fa-plus");
});

// step-form

var currentTab = 0;

function showTab(t) {
    var e = document.getElementsByClassName("tab");
    e[t].style.display = "block", 0 == t ? (document.getElementById("prevBtn").style.display = "none", document.getElementById("signupBtn").style.display = "none", document.getElementById("nextBtn").style.display = "inline") : document.getElementById("prevBtn").style.display = "inline", t == e.length - 1 ? (document.getElementById("nextBtn").style.display = "none", document.getElementById("signupBtn").style.display = "inline") : document.getElementById("nextBtn").innerHTML = "Next"
}

function nextPrev(t) {
    var e = document.getElementsByClassName("tab");
    if (1 == t && !validateForm()) return !1;
    e[currentTab].style.display = "none", showTab(currentTab += t)
}

function validateForm() {
    var t, e, a = !0;
    for (t = document.getElementsByClassName("tab")[currentTab].getElementsByTagName("input"), e = 0; e < t.length; e++) "" == t[e].value && (t[e].className += " invalid", a = !1);
    return a
}

// services-slider


$('.serv-slider').slick({
    centerMode: true,
    slidesToShow: 3,
    centerPadding: '0',
    autoplay: false,
    autoplaySpeed: 2000,
    loop:true,
    arrow:true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

  ]

  });
  

//   portfolio carousel

// $('.portfolio .work-slider').owlCarousel({
//     loop:true,
//     nav:true,
//     margin:25,
//     center:true,
//     dots:false,
//     autoplay:false,
//     autoplayTimeout:3500,
//     autoplayHoverPause:false,
//     responsive:{
//         0:{
//             items:1
//         },
//         576:{
//             items:2
//         },
//         992:{
//             items:3
//         },
//         1200:{
//             items:5
//         }
//     }
// });

$('.work-slider').slick({
    slidesToShow: 2,
    // infinite: true,
    slidesToScroll: 1,
    arrows: false,
    // fade: true,
    asNavFor: '.work-slider-nav',
    responsive: [
            {
            breakpoint: 768,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
      }
    ]
  });
  $('.work-slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.work-slider',
    dots: true,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
      }
    ]
  });

// testimonioal


$(".testimonial .testi-wrap").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
    dots: true,
    mouseDrag: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1,
            dots: true
        },
        1000: {
            items: 1,
            dots: false
        }
    }
});

 // Responsive Slider
 if($(window).width() <=991){
    if(('.set-serv-slider').length != 0){
        $('.set-serv-slider').addClass('owl-carousel owl-theme');
        $('.set-serv-slider').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots: true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            mouseDrag: true,
            responsive:{

                0:{

                    items:1
                },
                577:{

                    items:1
                },
                767:{

                    items:1
                },
                991:{

                    items:2
                },
            }
        });
    }
}
      


var canvas = document.getElementById('canvas')
var ctx = canvas.getContext('2d')
canvas.width = innerWidth
canvas.height = innerHeight

var party = smokemachine(ctx, [255, 255, 255])
party.start() // start animating
party.setPreDrawCallback(function(dt){
    party.addSmoke(outerWidth/2, outerHeight, .5)
    canvas.width = outerWidth
    canvas.height = outerHeight
})

party.addSmoke(50,50,50)

// party.addsmoke(innerWidth/2, innerHeight, 100)
// onclick=e => {
// 	console.log(e)
// 	party.step()
// }

onmousemove = function (e) {
    var x = e.clientX
    var y = e.clientY
    var n = .5
    var t = Math.floor(Math.random() * 200) + 3800
    party.addsmoke(x, y, n, t)
}