<?php include '../include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Publishing |
        <?php echo WEBSITE_NAME ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Unlock your writing potential with   <?php echo WEBSITE_NAME ?>! Tap into expert book publishing services for a bestseller journey.">
    <link rel="icon" type="image/webp" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/all.min.css" media="all">
    <link rel="stylesheet" href="assets/css/custom.min.css" media="all">
    <link rel="stylesheet" href="assets/css/responsive.min.css" media="all">
    <link rel="stylesheet" href="assets/css/virtual-select.min.css" media="all">
    <?php // include '../include/chat-code.php'; ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/68cb3f80ba858d1923b11d9c/1j5cv03ql';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17548581026"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17548581026');
</script>


    <!--End of Tawk.to Script-->
</head>

<body>
    <header class="lpHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4"><a class="logo" href="javascript:;"><img src="assets/images/logo.png"
                            alt="logo header" class="img-fluid"></a></div>
                <div class="col-8">
                    <ul class="btnOpt">
                        <li><a href="<?php echo PHONE_HREF ?> " class="themeBtn themeBtn2"><i
                                    class="fas fa-phone-alt"></i>
                                Call Now</a></li>
                        <li><a href="<?php echo EMAIL_HREF ?>" class="themeBtn themeBtn2"><i
                                    class="fas fa-envelope"></i> Contact Us</a></li>
                        <li><a href="javascript:;" class="themeBtn themeBtn2 chat"><i class="fas fa-headphones"></i>
                                Live
                                Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Begin: Main Slider -->
    <section class="mainBanner lpBanner publishLpOne"
        style="background: #2d343f url(assets/images/banner/lpBanner.webp) center/cover no-repeat;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="bannerContnt">
                        <h6 style="font-size: 20px;">Be The Next Best-Selling Author!</h6>
                        <h1 class="h3 fw-bold mb-3 text-white" style="font-size: clamp(30px, 1vw, 35px);">Get your book
                            published on 40+ Book Publishing Platforms</h1>
                        <!--<h6>Let the Journey Begin!</h6>-->
                        <ul class="listStyled mb-3">
                            <li>
                                <i class="fa fa-check-square"></i>
                                <p><strong>Keep 100% Royalty </strong> and Ownership of Book</p>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <p>Simple and Smooth Process – <strong>Enjoy 50% Discount </strong></p>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <p>Publish on amazon and<strong> 40+ renowned platforms </strong> like Amazon Kindle,
                                    Kobo, Barnes & Noble and many others.</p>
                            </li>

                            <li>
                                <i class="fa fa-check-square"></i>
                                <p><strong>Expedite your journey</strong> to the world's largest online marketplace.</p>
                            </li>
                        </ul>
                        <div class="btnSec mt-4 px-5 px-lg-0">
                            <!--<a href="sequence/step1" class="themeBtn">Get Started</a>-->
                            <a href="javascript:;" class="themeBtn themeBtn2 chat">Live Chat</a>
                        </div>

                        <div class="brandimages d-flex align-items-center gap-2 mt-3 mt-md-5">
                            <img loading="lazy" src="assets/images/brands/1.svg" alt="image" width="130" height="55"
                                class=" " style="width: clamp(70px, 20vw, 130px); max-width: 100%;">
                            <img loading="lazy" src="assets/images/brands/2.svg" alt="image" width="130" height="55"
                                class=" " style="width: clamp(70px, 20vw, 130px); max-width: 100%;">
                            <img loading="lazy" src="assets/images/brands/3.svg" alt="image" width="130" height="55"
                                class=" " style="width: clamp(70px, 20vw, 130px); max-width: 100%;">
                            <img loading="lazy" src="assets/images/brands/4.svg" alt="image" width="130" height="55"
                                class=" " style="width: clamp(70px, 20vw, 130px); max-width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contactBoxs leadLp">
                        <!-- <img loading="lazy" src="assets/images/bulbtwo.png" class="schtech" alt="schtech"> -->
                        <div class="signupForm" id="banner-form">
                            <h4 class=" text-uppercase">Sign up now and lock <span class=" text-uppercase">50%
                                    Discount</span></h4>

                            <form class="gap-1 form_submission" method="POST">

                                <!-- Custom Fields -->
                                <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
                                    "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                                <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                                <input type="hidden" name="subject"
                                    value="Signup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
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
                                <input type="text" name="name" required class="form-control name"
                                    placeholder="Your Name">
                                <input type="email" name="email" required class="form-control email"
                                    placeholder="Your Email">
                                <div class="phone-container">
                                    <input type="number" class="phone1" required name="phone"
                                        placeholder="Enter Your Phone">
                                </div>
                                <div>
                                    <select name="data[service]" class="lpService virtual-select banner-select"
                                        multiple="" data-search="false" data-placeholder="Services I Need">
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
                        <!-- <img loading="lazy" src="assets/images/bulbone.png" class="schtech1" alt="schtech"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Main Slider -->

    <section class="logoSec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Publishing Partners</h3>
                    <div class="logoSlider">
                        <div>
                            <img loading="lazy" src="assets/images/logo/1.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/2.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/3.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/4.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/5.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/6.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/7.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/logo/8.webp" alt="logo images" width="168"
                                height="98" style="object-fit: contain; height: clamp(50px, 10vw, 98px);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolioSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Our Distinctive Portfolio</h4>
                    <p>Explore our curated collection of Premier Publications.</p>
                </div>
                <div class="col-lg-12">
                    <div class="portfolioSlider">
                        <div>
                            <img loading="lazy" src="assets/images/books/1.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/2.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/3.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/4.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/5.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/6.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/7.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/8.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/9.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/10.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/11.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/12.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/13.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                        <div>
                            <img loading="lazy" src="assets/images/books/14.webp" alt="images" width="242" height="375"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <h3>Amplify Your Presence through Powerful Words!</h3>
                    <!-- <div class="btnSec ">
                        <a href="#" class="themeBtn roleback">Get Started</a>
                        <a href="javascript:;" class="themeBtn themeBtn-Black">Live
                            Chat</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="provideSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4>What We Provide</h4>
                    <h6>Transform Your Manuscript to a Marvel</h6>
                    <p>Explore Our Most Demanded Solutions!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="provideSlider">
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/77.webp" alt="images" width="60"
                                    height="60">
                                <h3>Copyright Registration</h3>
                                <h6>Enter the exclusive legal realm to give life to your literary masterpiece.</h6>
                                <!-- <ul>
                                        <li><i class="fas fa-chevron-right"></i>We ensure the Genuine Legitimacy of your
                                            Work.
                                        </li>
                                        <li><i class="fas fa-chevron-right"></i>We thoroughly review and edit your work.
                                        </li>
                                        <li><i class="fas fa-chevron-right"></i>We provide unlimited revision of each
                                            chapter.
                                        </li>
                                        <li><i class="fas fa-chevron-right"></i>The Client has 100 % ownership rights</li>
                                    </ul> -->
                                <p>Ensure the security of your creative work through our seamless copyright registration
                                    services. This process guarantees irrefutable and legally sound ownership.</p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/72.webp" alt="images" width="60"
                                    height="60">
                                <h3>Ghostwriting</h3>
                                <h6>Unleash the potential of your narrative with our team of expert ghostwriters. </h6>
                                <p>Elevate your story with the expertise of top-rated scribes—partner with us for
                                    affordable packages and comprehensive services tailored to each author's unique
                                    needs.</p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/73.webp" alt="images" width="60"
                                    height="60">
                                <h3>Editing & Proofreading</h3>
                                <h6>Refine Your Book for 100% Authenticity</h6>
                                <p>Our thorough process guarantees accuracy and excellence in the shortest time
                                    possible.
                                    Rigorous fact-checking ensures the utmost perfection in your final manuscript.
                                </p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/74.webp" alt="images" width="60"
                                    height="60">
                                <h3>Book Publishing</h3>
                                <h6>Introduce your words to the world through our book publication service. </h6>
                                <p>Our responsibility is to secure acceptance for your manuscript with publishing agents
                                    and houses. We provide practical strategies to increase the likelihood of your
                                    manuscript acceptance by the industry.</p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>

                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/75.webp" alt="images" width="60"
                                    height="60">
                                <h3>Book Marketing</h3>
                                <h6>Transform your books into bestselling publications.</h6>
                                <p>Whether you need book promotion, author publicity, or a comprehensive marketing plan,
                                    we've got you covered. Our specialists have dedicated years to decoding algorithms,
                                    unveiling the secrets that drive the success of holistic marketing campaigns.</p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/76.webp" alt="images" width="60"
                                    height="60">
                                <h3>Book Formatting</h3>
                                <h6>Ensure your books are not only well-written but perfect.</h6>
                                <p>We guarantee that your manuscript adheres to global formatting standards. Every
                                    detail, from font styles to margins, is meticulously handled to meet industry
                                    expectations.</p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                        <div>
                            <div class="provideBox">
                                <img loading="lazy" src="assets/images/icons/71.webp" alt="images" width="60"
                                    height="60">
                                <h3>Cover Design</h3>
                                <h6>Connect with us for a cover that captivates and engages viewers.</h6>
                                <p>Our collaborative team of designers and writers works to create enticing book covers
                                    that resonate with your target audience and align with market demands.
                                </p>
                                <a href="sequence/step1" class="themeBtn themeBtn2">Get 50% Off</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- <div class="btnSec ">
                        <a href="#" class="themeBtn roleback">Get Started</a>
                        <a href="javascript:;" class="themeBtn themeBtn-Black">Live
                            Chat</a>
                    </div> -->
                </div>
            </div>
        </div>

    </section>

    <section class="exceptionalSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>What Makes Us Exceptional?</h4>
                </div>
                <ul>
                    <li><img loading="lazy" src="assets/images/icons/4.webp" alt="image" width="40" height="40">
                        <p><span>Ensuring 100% Client Satisfaction</span>Unwavering commitment to quality, ensuring 100%
                            client satisfaction</p>
                    </li>
                    <li><img loading="lazy" src="assets/images/icons/5.webp" alt="image" width="40" height="40">
                        <p><span>Mastering Every Aspect</span>Our decade-long experience in the publishing industry
                            empowers us to excel in every aspect of
                            book publication</p>
                    </li>
                    <li><img loading="lazy" src="assets/images/icons/6.webp" alt="image" width="40" height="40">
                        <p>
                            <span>Retain Your Rights and Royalties</span>You own full ownership rights to your book and
                            keep all the royalties
                        </p>
                    </li>
                    <li><img loading="lazy" src="assets/images/icons/7.webp" alt="image" width="40" height="40">
                        <p><span>Global Trust</span>
                        <p>Trusted by bestselling authors and accomplished entrepreneurs all over the world</p>

                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contactSec contactBoxs lpContactSec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12">
                    <div class="logoForm">
                        <div class="logoRowOne">
                            <div class="logo logo5">
                                <img loading="lazy" src="assets/images/platforms/14.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                            <div class="logo logo2">
                                <img loading="lazy" src="assets/images/platforms/12.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="logoRowTwo">
                            <div class="logo logo6">
                                <img loading="lazy" src="assets/images/platforms/13.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                            <div class="logo logo1">
                                <img loading="lazy" src="assets/images/platforms/9.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="logoRowThree">
                            <div class="logo logo4">
                                <img loading="lazy" src="assets/images/platforms/10.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                            <div class="logo logo3">
                                <img loading="lazy" src="assets/images/platforms/11.webp" alt="images" width="116"
                                    height="73" style="object-fit: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reviewSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h4>Testimonials</h4>
                    <p>At <?php echo WEBSITE_NAME ?>, we stand out as the premier book publishers, dedicated to crafting
                        captivating stories and bringing your words to life. Publish a book on Amazon and discover why
                        we're the best in the business for publishing excellence.
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="reviewSlider">
                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user1.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Ann R. Hensley</h3>
                                </div>
                                <p>
                                    As someone whose mind is always buzzing with thoughts, putting them down on paper
                                    has
                                    been a bit tricky for me. However, the team's support has been beyond amazing. Their
                                    professionalism has shone through at every stage, and I genuinely feel I can trust
                                    them
                                    for my future book writing endeavors.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user2.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Emily Delgado</h3>
                                </div>
                                <p>The <?php echo WEBSITE_NAME ?> truly delivered for me when it came to crafting my
                                    first
                                    book.
                                    They quickly made the changes I requested and kept me in the loop at every step.
                                    Choosing them for my debut book was a great decision, and I'm genuinely thrilled
                                    with
                                    the results!
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user3.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Margaret Brown</h3>
                                </div>
                                <p>I've been collaborating with <?php echo WEBSITE_NAME ?> for a year and have already
                                    published one successful
                                    book with them. Even though there's more ground to cover with additional projects in
                                    the
                                    pipeline, I have full confidence in <?php echo WEBSITE_NAME ?>.</p>
                            </div>
                        </div>

                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user4.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Thomas Bower</h3>
                                </div>
                                <p>
                                    <?php echo WEBSITE_NAME ?> is the go-to place for anyone looking to kickstart their
                                    book
                                    publishing journey on various platforms, including KDP. They assisted me in getting
                                    my
                                    book out there for a reasonable fee. I highly recommend them.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user5.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Wilma Ford</h3>
                                </div>
                                <p>I'm truly grateful for Sarah's understanding of my publishing needs and her efforts
                                    to
                                    elevate the quality of my book. Thank you for turning my dream of becoming a
                                    published
                                    author into a reality.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="reviewBox">
                                <div class="reviewHead">
                                    <img loading="lazy" src="assets/images/mix/user6.webp" alt="image" width="75"
                                        height="75">
                                    <h3>Paul Giles</h3>
                                </div>
                                <p>I'm thrilled with <?php echo WEBSITE_NAME ?> and the fantastic job their team did
                                    with my
                                    book
                                    cover. They went above and beyond my expectations, creating an incredibly artistic
                                    and
                                    beautiful design. Everyone who has seen the cover is impressed!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ctaSec">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <h4>Kindle Your Book’s Triumph & Harness Our Publishing Prowess!</h4>
                    <!-- <h6>You Need for Publishing Success!</h6> -->
                    <!-- <div class="btnSec">
                        <a class="themeBtn roleback" href="#">Get Started</a>
                        <a class="themeBtn themeBtn2" href="javascript:;">Live
                            Chat</a>
                    </div> -->
                </div>
                <div class="col-lg-3">
                    <img loading="lazy" src="assets/images/mix/4.webp" alt="images" width="262" height="394"
                        style="object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

    <section class="faqSec">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 text-center">
                    <div class="headingStyleThree" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                        <h4>Frequently Asked Questions</h4>
                    </div>
                </div>
                <div class="col-lg-5"><img loading="lazy" src="assets/images/mix/3.webp" alt="image" width="452"
                        height="495" style="object-fit: contain;"></div>
                <div class="col-lg-6">
                    <div class="accordion accordionStyle" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Self-Publishing?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Self-publishing is the process where an author independently publishes their
                                        book, taking on responsibilities such as editing, formatting, and marketing.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What
                                    is Amazon publishing?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Amazon publishing refers to the platform provided by Amazon where authors can
                                        publish
                                        and sell their books through Kindle Direct Publishing (KDP) or other Amazon
                                        imprints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What
                                    is an ISBN?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>An ISBN (International Standard Book Number) is a unique identifier for books,
                                        facilitating their identification and distribution in the publishing industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How
                                    can you acquire the assistance of
                                    bookmarketeers?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can acquire the assistance of book marketers by hiring our professional
                                        marketing
                                        services that specialize in promoting books through various channels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class=" bg-dark py-5">
        <div class="container text-center">
            <a href="javascript:;" class=" user-select-none pe-none">
                <img loading="lazy" src="assets/images/logo.png" style="filter: brightness(0) invert(1);" alt="image"
                    width="250" height="90" style="object-fit: contain;" class=" mx-auto">
            </a>
            <p class=" text-white">Unlock Your Author Dreams with <?php echo WEBSITE_NAME ?>!</p>

            <ul
                class="d-inline-flex align-items-center justify-content-center gap-1 gap-md-3 bg-white p-3 rounded-4 flex-wrap my-3">
                <li><a href="<?php echo EMAIL_HREF ?>" class="d-flex align-items-baseline gap-2 fw-semibold"
                        style="color: var(--primary);"><i class="far fa-envelope"></i>
                        <?php echo EMAIL ?> </a></li>
                <li><a href="<?php echo PHONE_HREF ?>" class="d-flex align-items-baseline gap-2 fw-semibold"
                        style="color: var(--primary);"><i class="fas fa-phone-alt"></i>
                        <?php echo PHONE ?> </a></li>
                <li><a href="javascript:;" class="d-flex align-items-baseline gap-2 pe-none fw-semibold"
                        style="color: var(--primary);"><i class="fas fa-map-marker-alt"></i><?php echo ADDRESS ?></a>

                </li>
            </ul>
            <div class="row copyRigh py-2 align-items-center">
                <div class="col-12 text-center">
                    <p class=" m-0 text-white">© <?php echo date('Y'); ?> <?php echo WEBSITE_NAME ?> All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>


    </footer>

    <!--form Modal Popup-->
    <div class="modal fade" id="getQuote">
        <div class="modal-dialog modal-dialog-centered">
            <div class="entry-box">
                <form class="offr-frm form_submission" method="POST">

                    <!-- Custom Fields -->
                    <input type="hidden" name="url"
                        value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                    <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                    <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                    <input type="hidden" name="source" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                    <input type="hidden" name="price" data-name="price" value="">
                    <input type="hidden" name="title" data-name="title" value="">

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

                    <div class="col-sm-12 entry-left">
                        <button type="button" name="close" class="close" aria-label="close"
                            data-dismiss="modal">×</button>
                        <h1>Get up to 50% Christmas Discount </h1>
                    </div>
                    <div class="col-sm-12 entry-right">
                        <!-- <div class="text">  
                  <h2><span>50% off </span> till midnight</h2>
                  <p>Fill out this brief form to get your <strong>Discount reserved.</strong></p>
               </div> -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    required="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="number" class="form-control number" name="phone" placeholder="Phone"
                                    minlength="11" maxlength="12" required="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mb-0 mt-4">
                                <button type="submit" class="entery-submit" name="signupForm" aria-label="signupForm"
                                    id="signupBtn" value="1">
                                    Place your order
                                </button>
                                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                </div>
                                <div class="loader" style="display: none">
                                    <img alt="loader" src="loader.gif">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--form Modal Popup-->
    <!-- <a href="javascript:;" class="fixed_disc popUpBtn">
        <img src="assets/images/bigsale.png" alt="bigsale">
    </a> -->
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/virtual-select.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <?php include '../include/chat-code-script.php'; ?>

</body>

</html>