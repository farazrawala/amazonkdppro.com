<?php
require_once "../include/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Make your dream of becoming a bestselling author come true by availing 70% off on our ghostwriting services.
   </title>
   <meta name="description"
      content="Want to write a book and can't find the right words to do so? Hire our professional ghostwriting services and get the perfect book under your name. ">
   <link rel="canonical" href="https://www.amazonkdpexperts.com/publishing1" />
      <link rel="shortcut icon" href="images/favicon.png" type="image/png">
   <link rel="stylesheet" href="css/plugin.css">
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/virtual-select.min.css" media="all">
   <script type="text/javascript">
      var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
      (function () {
         var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
         s1.async = true;
         s1.src = 'https://embed.tawk.to/68cb3f80ba858d1923b11d9c/1j5cv03ql';
         s1.charset = 'UTF-8';
         s1.setAttribute('crossorigin', '*');
         s0.parentNode.insertBefore(s1, s0);
      })();

      // // Wait for the widget to load, then hide it initially
      // Tawk_API.onLoad = function () {
      //    Tawk_API.hideWidget();
      // };

      // Add event listener for the "CHAT NOW" button
      document.addEventListener("DOMContentLoaded", function () {
         var chatButton = document.querySelector(".btn-talk.chat");
         if (chatButton) {
            chatButton.addEventListener("click", function () {
               Tawk_API.maximize(); // Open the chat popup
            });
         }
      });
   </script>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17548581026"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'AW-17548581026');
   </script>
</head>

<body>

   <!--form Modal Popup-->
   <div class="modal modal-form fade" id="popup_form">
      <div class="modal-dialog modal-dialog-centered">
         <div class="entry-box col-xl-7 col-lg-8 col-md-9 col-sm-8" data-form-type="popup_form">
            <div class="signupForm col-lg-6" id="banner-form">
               <h4 class="text-uppercase">Sign up now and lock <span class=" text-uppercase">50%
                     Discount</span></h4>

               <form class="gap-1 form_submission" method="POST">
                  <button type="button" name="close" class="close halloween-modal-btn" aria-label="close"
                     data-dismiss="modal">×</button>
                  <!-- Custom Fields -->
                  <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
                     "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                  <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Signup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                  <input type="hidden" name="source" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

                  <!--PPC parameters -->
                  <input type="hidden" name="keyword"
                     value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
                  <input type="hidden" name="matchtype"
                     value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
                  <input type="hidden" name="msclkid"
                     value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
                  <input type="hidden" name="gclid"
                     value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
                  <!--End PPC paramters -->
                  <input type="text" name="name" required class="form-control name" placeholder="Your Name">
                  <input type="email" name="email" required class="form-control email" placeholder="Your Email">
                  <div class="phone-container">
                     <input type="number" class="phone1" required name="phone" placeholder="Enter Your Phone">
                  </div>
                  <div>
                     <select name="data[service]" class="lpService virtual-select banner-select" multiple=""
                        data-search="false" data-placeholder="Services I Need">
                        <option value="Ghostwriting">Ghostwriting</option>
                        <option value="Book Editing">Book Editing</option>
                        <option value="Book Publishing">Book Publishing</option>
                        <option value="Book Marketing">Book Marketing</option>
                     </select>
                  </div>
                  <button type="submit" value="Submit" class="themeBtn themeBtn-Black lp1formsubmit">Get
                     Started</button>

                  <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none">
                  </div>
                  <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                  </div>
                  <div class="loader" style="display: none">
                     <img alt="loader" src="loader.gif">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!--form Modal Popup-->



   <!-- header start -->
   <header class="main-header">
      <div class="container">
         <div class="row align-items-center justify-content-around">
            <div class="header-logo">
               <img src="images/logo.png" alt="logo.png" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 col-12 header-btn-sec">
               <div class="top-head-box">
                  <div class="tell-info-box">
                     <a href="tel:">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="spn_set">
                           <span class="C-text"><?php echo PHONE ?></span>
                           <span class="C-num"> </span>
                        </div>
                     </a>
                  </div>
                  <div class="header-btn">
                     <a href="javascript:;" class="btn btn-talk" data-toggle="modal" data-target="#popup_form">LET'S GET
                        STARTED</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </header>
   <!-- header end -->

   <!-- banner section start -->
   <section class="banner-sec">
      <div class="set_cartoon">
         <div class="mouth_anims">
            <span class="firts_anim"><img src="images/cart-1.png" alt=""></span>
            <span class="second_anims"><img src="images/cart-trans.png" alt=""></span>
         </div>
      </div>
      <div class="bat-cart">
         <span class="bat_anims"><img src="images/bat.png" alt=""></span>
         <span class="bat01_anims"><img src="images/bat002.png" alt=""></span>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="inner-sec">
                  <div class="timmer_content" data-aos="fade-down" data-aos-duration="1500">
                     <ul class="flip-clock-container flip-2">
                        <div class="clock-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                           <li class="flip-item-seconds">20</li>
                           <span style="color:white;">Seconds</span>
                        </div>
                        <div class="clock-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                           <li class="flip-item-minutes">20</li>
                           <span style="color:white;">Minutes</span>
                        </div>
                        <div class="clock-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                           <li class="flip-item-hours">20</li>
                           <span style="color:white;">Hours</span>
                        </div>
                        <div class="clock-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                           <li class="flip-item-days">13</li>
                           <span style="color:white;">Days</span>
                        </div>

                        
                        
                        
                     </ul>
                  </div>
               </div>
               <div class="banner-content">
                  <h1 class="main-heading" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="500">
                     BECOME A BEST SELLING AUTHOR!
                  </h1>
                  <h2 class="sub-heading" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="900">
                     Hire Top <span>Ghostwriters At 50% Off</span>
                     To Create Your Timeless Work
                  </h2>


               </div>
               <div class="list-1" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="1300">
                  <ul class="li-list">
                     <li> <img src="images/dot-img.png" alt=""> Trusted By 400+ Authors Globally </li>
                     <li> <img src="images/dot-img.png" alt=""> 86% Of Customers Rehire </li>
                     <li> <img src="images/dot-img.png" alt=""> 2.5k+ Writers And Editors </li>
                     <li> <img src="images/dot-img.png" alt=""> 100% Satisfaction Guaranteed </li>
                     </u>
               </div>
               <div class="banner_step_form" data-form-type="signup_form" data-aos="fade-down" data-aos-duration="1500"
                  data-aos-delay="1700">
                  <a href="javascript:;" class="btn btn-talk" data-toggle="modal" data-target="#popup_form"
                     style="width:auto !important;">LET'S GET
                     STARTED</a>
                  <a href="javascript:;" class="btn btn-talk chat"
                     style="width:auto !important; background-color: black !important; color: white !important;">CHAT
                     NOW</a>
                  <!-- <form action="javascript:void(0)" class="leadForm form_submission" enctype="multipart/form-data"
                     id="regForm" method="post" name="regForm">
                     <input id="formType" name="formType" type="hidden"> <input id="referer" name="referer"
                        type="hidden">
                     <div class="input-group justify-content-center">
                        <div class="form-group tab" style="display: block;">
                           <input class="form-control" data-validation="required" name="name" placeholder="Your Name"
                              type="text">
                        </div>
                        <div class="form-group tab">
                           <input class="form-control" data-validation="required" name="email"
                              placeholder="Enter your email address" type="text">
                        </div>
                        <div class="form-group tab">
                           <input class="form-control" data-validation="required" name="phone"
                              placeholder="Enter your phone no" type="text">
                        </div>
                        <div class="form_btn_wrap">

                           <button class="banner_form_btn" id="prevBtn" onclick="nextPrev(-1)" style="display: none;"
                              type="button">Previous</button> <button class="banner_form_btn" id="nextBtn"
                              onclick="nextPrev(1)" style="display: inline;" type="button">NEXT</button> <button
                              class="learn-more-tab" id="signupBtn" name="signupForm" style="display: none;"
                              type="submit" value="1">Submit</button>
                        </div>
                        <div id="formResult"></div>
                     </div>
                  </form> -->
               </div>
               <!-- <div class="footer-img1">
                     <img class="img-fluid" src="images/footer-img1.png" alt="">
                  </div> -->

            </div>
         </div>
      </div>
      <div class="cap-img">
         <img src="images/cart-cap.png" alt="">
      </div>
   </section>
   <!-- banner section end -->

   <!-- service section start -->
   <section class="service-sec">
      <span class="text-gradient">Services</span>
      <div class="container-fluid">
         <div class="row ">
            <div class="col-md-12">
               <h2 class="serv-heading">
                  Our service
               </h2>

               <div class="serv-slider">
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img1.png" alt="">
                        <h4> Blogs & Articles </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img2.png" alt="">
                        <h4> Ghost Writing </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img3.png" alt="">
                        <h4> Proofreading </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img4.png" alt="">
                        <h4> Wikipedia Writing </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img5.png" alt="">
                        <h4> Seo Writing </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img6.png" alt="">
                        <h4> Book Publishing </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img7.png" alt="">
                        <h4> Editing </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img8.png" alt="">
                        <h4> book cover design </h4>
                     </div>
                  </div>
                  <div class="serv-item">
                     <div class="serv-inner">
                        <img src="images/serv-img9.png" alt="">
                        <h4> Web copywriting </h4>
                     </div>
                  </div>
               </div>
               <div class="serv-content">
                  <p> We are a creative content agency, crafting noteworthy wikipedia pages & ghostwritten content and
                     working towards becoming a top-class content creation service. </p>
               </div>

            </div>
         </div>
      </div>
   </section>
   <!-- service section end -->

   <!-- W-C-U  section start -->
   <section class="why-us">
      <h2 class="main-heading3" data-aos="fade-down" data-aos-duration="2000"> Why Choose Us<spna>?</spna>
      </h2>
      <div class="girl_cartoon">
         <div class="girls_parent">
            <span class="choose_anims"><img src="images/girls02.png" alt=""></span>

            <div class="eye_set">
               <img src="images/eyes01.png" alt="">
               <img src="images/eyes01.png" alt="">
            </div>
         </div>



      </div>
      </div>
      <div class="container">
         <div class="row set-serv-slider">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon1.png" alt="">
                     <h6> COVER <br> DESIGN</h6>
                  </div>
                  <p>Receive original content that is purposely crafted in an engaging tone, with headlines that pop. We
                     use language that delivers your authority while amusing your prospects, making them long to get to
                     know more about you and your work.</p>
               </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon2.png" alt="">
                     <h6> EDITING <br>
                        & PROOFREADING
                     </h6>
                  </div>
                  <p>Place an order with us now, and our creative wordsmiths will be on it, with all the essential
                     resources at our fingertips to carry out any necessary research, craft your piece and get it
                     delivered to you in no time.</p>
               </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon3.png" alt="">
                     <h6> AFFORDABLE</h6>
                  </div>
                  <p>You know your customers better than anyone and whenever you feel like the content we created is
                     needs to be fine-tuned, let us know and we will be more than delighted to mold it as per your wish
                     until you are completely satisfied. </p>
               </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-down" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon4.png" alt="">
                     <h6> PROFITABLE</h6>
                  </div>
                  <p>With no contractual binders comes the freedom of having top quality content crafted whenever you
                     want and exactly the way you want. There are no compulsions and no hidden costs with our content
                     creation service.</p>
               </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-down" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon5.png" alt="">
                     <h6> QUALIFIED <br> EXPERTS</h6>
                  </div>
                  <p>Get in touch with us and an onboard consultant will be right with you. We are persistent in the
                     pursuit of your contentment and can be reached 24/7. Fail to believe us? We dare you to give our
                     services a try and see what our assurance to your satisfaction really looks like.</p>
               </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-down" data-aos-duration="2000">
               <div class="why-inner">
                  <div class="inn-part">
                     <img src="images/icon6.png" alt="">
                     <h6> SECURE <br> OWNERSHIP</h6>
                  </div>
                  <p> Our exclusive team of finest copywriters is second to none when it comes to owning the art of
                     picking rightly written words and converting them into a textual ornamentation that connects with
                     your consumers and persuades them that you are all they need.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- W-C-U end -->

   <!-- portfolio start -->
   <section class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-4 pl-lg-0" data-aos="fade-right" data-aos-duration="2000">
               <div class="port-content">
                  <h2 class="port-heading">
                     Our Work Samples
                  </h2>
                  <p class="port-para">
                     Have a look at some of our successful creations.
                  </p>
               </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-duration="2000">
               <div class="work-slider">
                  <div class="item">
                     <div class="work-item">
                        <img class="img-fluid" src="images/port-img1.png" alt="">
                     </div>
                  </div>
                  <div class="item">
                     <div class="work-item">
                        <img class="img-fluid" src="images/port-img2.png" alt="">
                     </div>
                  </div>
                  <div class="item ">
                     <div class="work-item">
                        <img class="img-fluid" src="images/port-img3.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row second-slider">
            <div class="col-md-6 offset-md-1" data-aos="fade-up" data-aos-duration="2000">
               <div class="work-slider-nav">
                  <div class="work-item">
                     <img class="img-fluid" src="images/port-img4.png" alt="">
                  </div>
                  <div class="work-item">
                     <img class="img-fluid" src="images/port-img3.png" alt="">
                  </div>
                  <div class="work-item">
                     <img class="img-fluid" src="images/port-img1.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="dark-house">
         <span class="house_anims"><img src="images/house.png" alt=""></span>
         <span class="house01_anims"><img src="images/house002.png" alt=""></span>
         <canvas id="canvas"></canvas>
      </div>

   </section>
   <!-- portfolio end -->



   <!-- testimonial start -->
   <section class="testimonial">
      <div class="container">
         <div class="row testi-row justify-content-space-between">
            <div class="col-md-6 " data-aos="fade-right" data-aos-duration="2000">
               <div class="testi-wrap owl-carousel owl-theme">
                  <div class="testi">
                     <img src="images/t-img1.png" alt="">
                     <p class="testi-para">
                        They really understood whatever I needed for my web content
                        strategy. Their skills of using simple yet persuasive English left
                        me pleased to the core. Hats off to the creative writers and
                        their services at Amazon KDP Experts.
                     </p>
                     <h4 class="testi-name">
                        Mike Walters
                     </h4>
                     <h5 class="testi-desig">
                        Managing Director
                     </h5>
                  </div>
                  <div class="testi">
                     <img src="images/t-img2.png" alt="">
                     <p class="testi-para">
                        " Working with Amazon KDP Experts was good, we value time, hence
                        getting quick responses with top-class content crafted has been
                        a great experience. Looking forward to a mutually valuable
                        relationship with them."
                     </p>
                     <h4 class="testi-name">
                        Jamie Brown
                     </h4>
                     <h5 class="testi-desig">
                        Social Media Strategist
                     </h5>
                  </div>
                  <div class="testi">
                     <img src="images/t-img3.png" alt="">
                     <p class="testi-para">
                        "Being in the client servicing business, we have to develop too
                        much content in very less time. Amazon KDP Experts has always been
                        there for us, to deliver their services. Thank you Amazon KDP Experts
                        for your persistent services."
                     </p>
                     <h4 class="testi-name">
                        Cornelius Stevenson
                     </h4>
                     <h5 class="testi-desig">
                        Business Unit Head
                     </h5>
                  </div>
               </div>
            </div>
            <div class="col-md-6 client-head">
               <div class="testi-heading" data-aos="fade-left" data-aos-duration="2000">
                  <h2 class="t-heading">
                     What Client Say About Us
                  </h2>
               </div>
            </div>
         </div>
      </div>
      <div class="testi-cart" data-aos="fade-left" data-aos-duration="2000">
         <span class="testi_anims"><img src="images/testi-cart.png" alt=""></span>
      </div>
   </section>
   </section>

   <!-- chat section -->
   <section class="main-contact">
      <div class="container">
         <div class="row contact-row justify-content-between no-gutters">
            <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="2000">
               <div class="footer-logo">
                  <img src="images/logo.png" alt="logo.png" class="img-fluid" width="70%" />
               </div>
               <div class="contact-list">
                  <ul>
                     <li>
                        <a href="<?php echo EMAIL_HREF ?>"><i class="fa fa-envelope"
                              aria-hidden="true"></i><span><?php echo EMAIL ?></span></a>
                     </li>
                     <li>
                        <a href="tel:" class="call_wrap">
                           <span class="fas fa-phone"></span>
                           <span> <?php echo PHONE ?></span>
                        </a>
                     </li>
                     <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <a href="javascript:void(0);"><?php echo ADDRESS ?></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12" data-aos="fade-left" data-aos-duration="2000">
               <div class="contact-form" data-form-type="footer_form">
                  <h2 class="form-heading">
                     Contact Form
                  </h2>
                  <form class="leadForm form_submission" method="post" enctype="multipart/form-data"
                     action="javascript:void(0)">
                     <!--hidden required values-->
                     <input type="hidden" id="formType" name="formType">
                     <input type="hidden" id="referer" name="referer">
                     <div class="contact-form">
                        <div class="row justify-content-end">
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Full Name"
                                    data-validation="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group contact-form-control">
                                 <input type="text" name="email" class="form-control" placeholder="Email Address"
                                    data-validation="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group contact-form-control">
                                 <input type="text" class="form-control" name="phone" maxlength="11"
                                    placeholder="Phone Number" aria-required="true" data-validation="required"
                                    autocomplete="off">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group contact-form-control">
                                 <input type="text" name="customers_meta[message]" class="form-control"
                                    placeholder="Message" data-validation="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="contact-form-control">
                                 <div id="formResult"></div>
                                 <button type="submit" id="signupBtn" class="btn contact-btn">Submit</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- footer -->
   <section class="footer">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-md-6">
               <div class="last-text">
                  <p>© 2025, <?php echo WEBSITE_NAME ?>, All right reserved.
               </div>
            </div>
            <div class="col-md-4 d-flex justify-content-around" style="gap:2rem;">
               <div class="last-text">
                  <a href="../privacy.php">Privacy Policy</a>
               </div>
               <div class="last-text">
                  <a href="../terms.php">Terms & Conditions</a>
               </div>
            </div>
         </div>
      </div>
   </section>



   <script type="text/javascript" src="js/plugin.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   <script src="js/virtual-select.min.js"></script>
   <script>
      function updateHalloweenCountdown() {
         const halloween = new Date('October 31, 2025 00:00:00').getTime();
         const now = new Date().getTime();
         const gap = halloween - now;

         if (gap <= 0) {
            document.querySelector(".flip-clock-container").innerHTML =
               "<li>🎃</li><li>Happy</li><li>Halloween!</li>";
            return;
         }

         const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

         const days = Math.floor(gap / day);
         const hours = Math.floor((gap % day) / hour);
         const minutes = Math.floor((gap % hour) / minute);
         const seconds = Math.floor((gap % minute) / second);

         document.querySelector('.flip-item-days').textContent = days.toString().padStart(2, '0');
         document.querySelector('.flip-item-hours').textContent = hours.toString().padStart(2, '0');
         document.querySelector('.flip-item-minutes').textContent = minutes.toString().padStart(2, '0');
         document.querySelector('.flip-item-seconds').textContent = seconds.toString().padStart(2, '0');
      }

      updateHalloweenCountdown();
      setInterval(updateHalloweenCountdown, 1000);
   </script>
   <!-- <script src="../js/form-submit.js"></script> -->
   <?php include '../include/chat-code-script.php'; ?>
</body>

</html>