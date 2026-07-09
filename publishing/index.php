<?php include '../include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Achieve your author dreams! <?php echo WEBSITE_NAME ?> provides all-in-one publishing services, editing, formatting, marketing & more.">
    <title>Top-Rated Publishing Services | <?php echo WEBSITE_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="canonical" href="https://www.amazonkdppro.com/publishing" />

    <!-- Preload Bootstrap CSS (Already done) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Defer loading of Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    </noscript>

    <link rel="preload" href="assets/images/banner-2.webp" as="image">
    <!-- Non-critical styles: preload -> stylesheet -->
    <link rel="preload" href="assets/css/style.css?<?=rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="assets/css/style.css?<?=rand()?>">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </noscript>



    
   <?php include '../include/chat-code.php'; ?>
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17322707336"></script>-->
    <!--<script>-->
    <!--    window.dataLayer = window.dataLayer || [];-->

    <!--    function gtag() {-->
    <!--        dataLayer.push(arguments);-->
    <!--    }-->
    <!--    gtag('js', new Date());-->

    <!--    gtag('config', 'AW-17322707336');-->
    <!--</script>-->
    
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18140089343"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-18140089343'); </script>

    
</head>
<body>
    <!-- Top Info Bar -->
    <div class="top-bar d-none d-md-block d-lg-block">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-lg-4 col-md-4 text-start">
                <div><i class="bi bi-geo-alt me-1"></i> <?php echo ADDRESS ?></div>
            </div>

            <div class="top-btn">
                <button class="btn btn-sm btn-light mb-1 me-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">Submit your Manuscript</button>
            </div>
            <div class="d-flex align-items-center">

                <span>Mon - Fri 8AM – 6PM</span>
            </div>
        </div>
    </div>
    <!-- Logo + Quote -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo text-center">
                        <!--<img src="assets/images/logo.png" alt="logo">-->
                        <a href="https://amazonkdppro.com/publishing/"><img src="assets/images/logo.png" alt="logo"></a>

                        <!-- <span class="logo_name">Authors Book Hub</span> -->
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 d-none d-md-block d-lg-block">
                    <div class="global_btn module">
                        <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Get A Quote</button>
                        <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                            </a></button>

                    </div>
                </div>

            </div>

        </div>
    </header>
     <section class="main-banner text-white">
        <img src="assets/images/banner-2.webp" alt="Hero image" decoding="async" fetchpriority="high" />
        <div class="slider-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content content">
                            <h2>Your Dreams Are Big, And <br> So Is Our Vision <br>
                                <span class="text-info d-block">Together, We'll Make </span>Them Global </h2>
                            <p style="color: snow;">At <?php echo WEBSITE_NAME ?>, we're not just your publishing partner.
                                We are your dream team. Let's take your story from the heart of the USA
                                to worldwide recognition. With us, your book gets the expert touch it needs
                                to stand out, be noticed, and leave a legacy.</p>

                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="me-2">5.0 ⭐⭐⭐⭐⭐ Rating on</span>

                        </div>
                        <div class="trust-logos">
                            <ul>
                                <li><a href=""><img src="assets/images/images-banner-logo-02.webp"
                                            alt="banner-icon"></a>
                                </li>
                                <li><img src="assets/images/images-banner-logo-03.webp"
                                        alt="banner-icon"></li>
                                <li class="brownbook-logo">
                                    <img src="assets/images/images-banner-logo-05.webp"
                                        alt="banner-icon"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-5 col-md-12">
                        <div class="form-box text-white text-center  py-5 px-5">

                            <h3 class="fs-3 lh-base blinking-text">For <?php echo date('F'); ?> <?php echo date('Y'); ?> Only!<br>UP TO 50% OFF ON</h3>
                            <h4 class="mb-5 fs-6 text-info fw-bold mt-2 ">BOOK PUBLISHING PACKAGES</h4>
                            <form class="banner-form form_submission" method="post">
                                <div style="position: absolute; left: -9999px;">
                                    <input class="form-control" type="text" id="honeypot" name="honeypot">
                                </div>
                                <input type="hidden" name="link" value="https://casperpublications.com/lp">
                                <div class="mb-3">
                                    <input type="text" class="form-control" maxlength="255" name="name"
                                        placeholder="Enter Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" maxlength="255" name="email"
                                        placeholder="Enter email here" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" name="phone" maxlength="20"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" name="message" maxlength="65535" col="4" row="3"
                                        placeholder="Enter message here"></textarea>
                                </div>
                                <!--<button type="submit" class="btn btn-primary w-100 py-3" name="submit" value="submit">Submit</button>-->
                                <input type="submit" class="btn btn-primary w-100 py-3" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="py-5 services-sec ">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content (Tab Content) -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="tab-content contant_wrap" id="serviceTabContent">

                        <!-- Book Publishing -->
                        <div class="tab-pane fade show active" id="tab-publishing">
                            <h2 class="mb-4 text-center">
                                Book <span class="fw-bold text-primary">Publishing</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>At <?php echo WEBSITE_NAME ?>, we provide end-to-end publishing services designed to
                                        bring your story to life.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Publishing a book is a monumental achievement, and finding the right partner
                                        is key to your success. Our dedicated team is an expert in providing
                                        professional book services that meet the highest industry standards.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>This service is specially designed for authors who want complete control over
                                        their publishing journey. We make the process simple and stress-free with expert
                                        guidance, helping you at every step of the way.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>

                        <!-- Ghostwriting -->
                        <div class="tab-pane fade" id="tab-ghost">
                            <h2 class="mb-4 text-center">
                                Professional <span class="fw-bold text-primary">Ghost Writing</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Our expert ghostwriters will help you craft the perfect book, turning your
                                        ideas into a polished manuscript.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>At <?php echo WEBSITE_NAME ?>, every great book begins with a dream - a story waiting
                                        to be shared with the world. Our excellent ghostwriting service converts your
                                        vision into a beautifully crafted masterpiece.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>At the <?php echo WEBSITE_NAME ?>, we have an array of ghostwriting services designed
                                        to meet the unique needs of authors. Our team is expert at tackling every task
                                        or project of any size or complexity.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Whether you are a debut author or a seasoned writer, our ghostwriting services
                                        efficiently work to bring your vision to life.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>

                        <!-- Book Editing -->
                        <div class="tab-pane fade" id="tab-editing">
                            <h2 class="mb-4 text-center">
                                Book <span class="fw-bold text-primary">Editing</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Craft your best book with professional guidance from the <?php echo WEBSITE_NAME ?>.
                                        We offer excellent services that will enhance your work.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Every manuscript is one of a kind, and so it's editing. At Casper
                                        Publications, We offer customer support tailored to your book’s unique
                                        requirements, whether you need minor.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>At the <?php echo WEBSITE_NAME ?>, each script has best-seller potential, and it all
                                        begins with expert editing.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>The <?php echo WEBSITE_NAME ?> has helped hundreds of authors achieve their
                                        publishing goals.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>

                        <!-- Audio Book -->
                        <div class="tab-pane fade" id="tab-audio">
                            <h2 class="mb-4 text-center">
                                Audio <span class="fw-bold text-primary">Books</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>As a trusted book publisher, we focus on delivering top-quality audiobooks
                                        that enhance storytelling and ensure the author's message is conveyed with
                                        clarity.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>As a trusted book publisher, we focus on delivering top-quality audiobooks
                                        that enhance storytelling and ensure the author's message is conveyed with
                                        clarity.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Expanding into audiobooks is an excellent way for authors to grow their
                                        audience and connect with listeners worldwide.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Together, we explore new horizons, carving innovative paths and making a
                                        lasting impact on the book publishing industry.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>

                        <!-- Digital Marketing -->
                        <div class="tab-pane fade" id="tab-marketing">
                            <h2 class="mb-4 text-center">
                                Digital <span class="fw-bold text-primary">Marketing</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Our skilled marketing team develops tailored strategies designed to meet your
                                        unique goals and expand your reach.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>We understand the challenges of digital marketing and provide expert solutions
                                        to help you succeed online.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>No matter the scale of your business, we create personalized plans that drive
                                        tangible results through strategic execution, innovative approaches, and
                                        data-driven insights.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Our clients love the impact our book trailers have on their success! Here’s
                                        what they have to say about working with <?php echo WEBSITE_NAME ?>.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>

                        <!-- Book Trailer -->
                        <div class="tab-pane fade" id="tab-trailer">
                            <h2 class="mb-4 text-center">
                                Book <span class="fw-bold text-primary">Trailer</span>
                            </h2>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>Are you ready to make your book stand out even before its release? As a
                                        leading book publishing company, we ensure your work gets the spotlight it
                                        deserves.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>tep into the future of storytelling with <?php echo WEBSITE_NAME ?>, where your book
                                        meets the screen. Getting a book published is just the first step, let us help
                                        you publish your book</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span>At <?php echo WEBSITE_NAME ?>, we bring your book to life with a visually stunning
                                        trailer that captivates and excites.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="text-primary me-3 fw-bold"></span>
                                    <span><?php echo WEBSITE_NAME ?> has empowered countless authors in their publishing
                                        journey. Our passion for excellence, creativity, and integrity sets us apart,
                                        making us the go-to choice for writers around the globe.</span>
                                </li>

                            </ul>
                            <div class="global_btn module mb-5">
                                <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?>
                                    </a></button>
                                <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content (Tab Nav) -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4 text-center text-center">
                        Services We <span class="text-primary">Provide</span>
                    </h2>
                    <div class="row nav nav-pills" id="serviceTab" role="tablist">
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link active w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-publishing">Book Publishing</button>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-ghost">GhostWriting</button>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-editing">Book Editing</button>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-audio">Audio Book</button>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-marketing">Digital Marketing</button>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 mb-3">
                            <button class="service-card nav-link w-100" data-bs-toggle="pill"
                                data-bs-target="#tab-trailer">Book Trailer</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Slider section -->
    <!-- Bootstrap 5 CSS -->
    <section class="tabs_sec bg-grey py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="tabs_inner content text-center mb-4">
                        <h2 class="module come-in">Our Published
                            <span>Works</span>
                        </h2>
                        <p class="module come-in">Check out our portfolio to discover the books we have helped shape.
                            With a focus on
                            quality, each project reflects our commitment to excellence and the power of storytelling.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tabs_inner ">
                        <!-- Tabs -->
                        <div class="tabs">
                            <button class="tab-btn active" data-target="cat1">Children</button>
                            <button class="tab-btn" data-target="cat2">Fiction</button>
                            <button class="tab-btn" data-target="cat3">Horror</button>
                            <button class="tab-btn" data-target="cat4">Mystery</button>
                            <button class="tab-btn" data-target="cat5">Action</button>
                            <button class="tab-btn" data-target="cat6">Auto
                                Biography</button>
                            <button class="tab-btn" data-target="cat7">Biblical</button>
                            <button class="tab-btn" data-target="cat8">Self
                                Help</button>
                        </div>

                        <!-- Sliders -->
                        <div class="swiper mySwiper" id="cat1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="book_slider_img" src="assets/images/cover-41.webp"
                                        alt="">
                                </div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-40.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/ch-1.webp" alt=""></div>
                                <div class="swiper-slide">
                                    <img class="book_slider_img" src="assets/images/cover-43.webp"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat2" style="display:none;">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/fic-main-1.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/fic-main-2.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/fic-main-3.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/fic-main-4.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/faic-main-5.webp" alt=""></div>

                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat3" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-20.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-21.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-22.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-23.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-24.webp" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat4" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-25.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/mys-4.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/mys-3.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/mys-2.webp" alt=""></div>
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/mys-1.webp" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat5" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-30.webp" alt=""></div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-31.webp" alt=""></div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-32.webp" alt=""></div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-33.webp" alt=""></div>
                                <!-- Slide 5 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-34.webp" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat6" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/a2.webp" alt=""></div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/a1.webp" alt=""></div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/a3.webp" alt=""></div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/a4.webp" alt=""></div>
                                <!-- Slide 5 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/a5.webp" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat7" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-45.webp" alt=""></div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-46.webp" alt=""></div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-48.webp" alt=""></div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-47.webp" alt=""></div>
                                <!-- Slide 5 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-49.webp" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper mySwiper" id="cat8" style="display:none;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-50.webp" alt=""></div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-51.webp" alt=""></div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-52.webp" alt=""></div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-53.webp" alt=""></div>
                                <!-- Slide 5 -->
                                <div class="swiper-slide"><img class="book_slider_img"
                                        src="assets/images/cover-54.webp" alt=""></div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Bootstrap 5 & Icons -->
    <section class="hero-section text-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Left: Text -->
                <div class="col-lg-7">
                    <h2 class="fs-2 fw-bold mb-4"><span style="color:#f6921e">Ready To Make Your<br></span> Story <span
                            style="color:#f6921e;"> Unforgettable?
                        </span>
                    </h2>
                    <p class=" mb-4">
                        Our team of experienced professionals is here to support you in every stage
                        of the publishing process. Whether it’s editing, formatting, or proofreading,
                        we ensure that every aspect of your manuscript is meticulously perfected.
                        With <?php echo WEBSITE_NAME ?>, you get expert services that turn your ideas into
                        polished books, ready for the market.
                    </p>

                    <div class="global_btn">
                        <button type="button" class="btn module come-in"><a href="<?php echo PHONE_HREF ?>">
                                <?php echo PHONE ?> </a></button>
                        <button type="button" class="btn module btn-primary blink come-in" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Get A Quote</button>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="col-lg-5 text-center">
                    <img src="assets/images/expert-edition.webp" class="img-fluid hero-mock"
                        alt="Book Mockup" />
                </div>
            </div>
        </div>
    </section>


    <section class="bg-grey">

        <section class="category-two-section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="tabs_inner content text-center mb-5">
                            <h2 class="module come-in">Ignite Your Author <span> Career With </span> <?php echo WEBSITE_NAME ?>
                            </h2>
                            <p class="module come-in">
                                Unlock your potential as an author with <?php echo WEBSITE_NAME ?>. Our expert team
                                provides the tools, support, and marketing strategies needed to turn your manuscript
                                into a bestselling masterpiece.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="publishing-tab" data-bs-toggle="tab"
                            data-bs-target="#publishing" type="button" role="tab" aria-controls="publishing"
                            aria-selected="true">Book Publishing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="editing-tab" data-bs-toggle="tab" data-bs-target="#editing"
                            type="button" role="tab" aria-controls="editing" aria-selected="false">Book Editing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="formatting-tab" data-bs-toggle="tab" data-bs-target="#formatting"
                            type="button" role="tab" aria-controls="formatting" aria-selected="false">Book
                            Formatting</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="proofreading-tab" data-bs-toggle="tab"
                            data-bs-target="#proofreading" type="button" role="tab" aria-controls="proofreading"
                            aria-selected="false">Book Proofreading</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ebook-tab" data-bs-toggle="tab" data-bs-target="#ebook"
                            type="button" role="tab" aria-controls="ebook" aria-selected="false">Ebook Writing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing"
                            type="button" role="tab" aria-controls="marketing" aria-selected="false">Book
                            Marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cover-tab" data-bs-toggle="tab" data-bs-target="#cover"
                            type="button" role="tab" aria-controls="cover" aria-selected="false">Book Cover
                            Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website"
                            type="button" role="tab" aria-controls="website" aria-selected="false">Author Website
                            Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="trailer-tab" data-bs-toggle="tab" data-bs-target="#trailer"
                            type="button" role="tab" aria-controls="trailer" aria-selected="false">Book Video
                            Trailer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="audiobook-tab" data-bs-toggle="tab" data-bs-target="#audiobook"
                            type="button" role="tab" aria-controls="audiobook" aria-selected="false">Audiobook
                            Narration</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="publishing" role="tabpanel"
                        aria-labelledby="publishing-tab">
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-publishing.webp"
                                            alt="Book Publishing" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Publishing</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            At <?php echo WEBSITE_NAME ?>, we guide you through every step of the
                                            publishing journey.
                                            From manuscript evaluation to global distribution, we ensure your book
                                            reaches
                                            readers worldwide. Our expert team handles editing, design, and
                                            marketing,
                                            allowing you to focus on what you do best: writing. Trust us to help you
                                            publish
                                            your book with professional care, making sure it stands out in today's
                                            competitive market.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="editing" role="tabpanel" aria-labelledby="editing-tab">
                        <!-- Content for Book Editing -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5 flex-md-row-reverse">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-editing.webp"
                                            alt="Book Editing" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Editing</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Every great story begins with great editing. Our book editing service
                                            ensures your
                                            manuscript is polished to perfection. We work closely with you to
                                            enhance your
                                            narrative flow, refine your voice, and ensure clarity. From content
                                            editing to
                                            line-by-line proofreading, our goal is to elevate your writing while
                                            preserving
                                            your unique style.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="formatting" role="tabpanel" aria-labelledby="formatting-tab">
                        <!-- Content for Book Formatting -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-formating.webp"
                                            alt="Book Formatting" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Formatting</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Perfect book formatting is key to creating a seamless reading
                                            experience. We
                                            offer professional formatting for both print and digital books, ensuring
                                            your
                                            manuscript looks stunning across all platforms. Whether you're
                                            publishing an ebook
                                            or a physical copy, we make sure your book is visually appealing,
                                            consistent, and
                                            easy to navigate.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="proofreading" role="tabpanel" aria-labelledby="proofreading-tab">
                        <!-- Content for Book Proofreading -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5 flex-md-row-reverse">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-proofreading.webp"
                                            alt="Book Proofreading" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Proofreading</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            A flawless manuscript is essential for a successful book launch. Our
                                            book
                                            proofreading service carefully reviews your work, correcting grammar,
                                            punctuation,
                                            and typographical errors. Our team ensures that every sentence flows
                                            naturally while
                                            adhering to professional standards.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ebook" role="tabpanel" aria-labelledby="ebook-tab">
                        <!-- Content for Ebook Writing -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/ebook-writing.webp"
                                            alt="Ebook Writing" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Ebook <span
                                                style="color:#f6921e">Writing</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Transform your ideas into a captivating ebook with <?php echo WEBSITE_NAME ?>.
                                            Whether
                                            you're new to the world of digital publishing or looking to expand your
                                            reach, we
                                            provide expert writing services tailored to the unique demands of ebook
                                            readers.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                        <!-- Content for Book Marketing -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-marketing.webp"
                                            alt="Book Marketing" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Marketing</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Marketing your book is just as important as writing it. Our book
                                            marketing services
                                            are designed to maximize your reach. From social media strategies to
                                            press releases
                                            and targeted advertising, we help you build an engaged readership and
                                            promote your
                                            book in the most effective ways.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cover" role="tabpanel" aria-labelledby="cover-tab">
                        <!-- Content for Book Cover Design -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5 flex-md-row-reverse">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-cover-design.webp"
                                            alt="Book Cover Design" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Cover Design</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Your book cover is the first thing readers will notice, and it's
                                            essential
                                            to make a memorable first impression. Our design team specializes in
                                            creating
                                            visually stunning, genre-appropriate covers that tell your story before
                                            the
                                            reader even opens the book.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="website" role="tabpanel" aria-labelledby="website-tab">
                        <!-- Content for Author Website Design -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy"
                                            src="assets/images/author-website-design.webp"
                                            alt="Author Website Design" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Author <span
                                                style="color:#f6921e">Website Design</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            A strong online presence is crucial for any modern author. We offer
                                            author website
                                            design services that showcase your work, connect with readers, and build
                                            your personal brand.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="trailer" role="tabpanel" aria-labelledby="trailer-tab">
                        <!-- Content for Book Video Trailer -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5 flex-md-row-reverse">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/book-video-trailer.webp"
                                            alt="Book Video Trailer" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-5 fw-bold mb-4 text-dark">Book <span
                                                style="color:#f6921e">Video Trailer</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Bring your book to life with a captivating book video trailer. Our
                                            creative team
                                            produces engaging trailers that highlight your story and characters.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audiobook" role="tabpanel" aria-labelledby="audiobook-tab">
                        <!-- Content for Audiobook Narration -->
                        <div>
                            <div class="row g-0 rounded-3 mb-5">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="author_tabs_img">
                                        <img class="myLazy" src="assets/images/audiobook-naration.webp"
                                            alt="Audiobook Narration" fetchpriority="high" width="470" height="400">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="p-4 p-md-5">
                                        <h3 class="display-6 fw-bold mb-4 text-dark">Audiobook <span
                                                style="color:#f6921e">Narration</span></h3>
                                        <p class="text-secondary mb-4 lh-lg">
                                            Let your story be heard with our audiobook narration services. We
                                            provide professional voice narration, giving your book the audio
                                            experience it deserves.
                                        </p>
                                        <div class="global_btn module mb-5">
                                            <button type="button" class="btn over-btns"><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></button>
                                            <button type="button" class="btn btn-primary blink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get A
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- teams -->
        <section class="team-section pb-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold display-6 text-dark">The Faces Behind Your <span
                        style="color:#f6921e">Best–Selling Success </span></h2>

                <div class="row justify-content-center g-4 g-md-5 mb-5">
                    <!-- Team Member 1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                        <div class="team-member">
                            <div class="member-image rounded-circle mx-auto mb-3" style="
                                    background-image: url('assets/images/team-1.webp');
                                    width: 220px; height: 220px;">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name h4 fw-semibold mb-1 " style="color:#f6921e">Sean Marcus</h3>
                                <p class="member-role text-dark lead fw-medium">St. Book Consultant</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                        <div class="team-member">
                            <div class="member-image rounded-circle mx-auto mb-3" style="
                                    background-image: url('assets/images/image-08.webp');
                                    width: 220px; height: 220px;">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name h4 fw-semibold mb-1 " style="color:#f6921e">Michelle Parker</h3>
                                <p class="member-role text-dark lead fw-medium">Book Consultant</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                        <div class="team-member">
                            <div class="member-image rounded-circle mx-auto mb-3" style="
                                    background-image: url('assets/images/images-team3.webp');
                                    width: 220px; height: 220px;">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name h4 fw-semibold mb-1 " style="color:#f6921e">Ethan Daniels</h3>
                                <p class="member-role text-dark lead fw-medium">Book Consultant</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                        <div class="team-member">
                            <div class="member-image rounded-circle mx-auto mb-3" style="
                                    background-image: url('assets/images/image-06.webp');
                                    width: 220px; height: 220px;">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name h4 fw-semibold mb-1 " style="color:#f6921e">Angela Taylor</h3>
                                <p class="member-role text-dark lead fw-medium">Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  justify-content-center ">
                    <div class="col-md-6">
                        <div class="global_btn justify-content-center ">
                            <button type="button" class="btn module come-in"><a href="<?php echo PHONE_HREF ?>">
                                    <?php echo PHONE ?> </a></button>
                            <button type="button" class="btn module btn-primary blink come-in" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Get A Quote</button>
                        </div>
                    </div>
                </div>
        </section>
    </section>

    <!-- testimonials -->

    <section class="py-5" style="background:#0e2a3b;">
        <div class="container">
            <h2 class="text-center text-white fw-bold mb-5 display-6">
                What Our Authors <span style="color:#f6921e">Are Saying</span>
            </h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                <!-- Dots (Carousel Indicators) -->
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-4 text-center">
                                <div class="team-img">
                                    <img src="assets/images/003.webp"
                                        class="img-fluid rounded shadow-lg" alt="Book cover" loading="lazy">
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-7 text-white text-center text-lg-start">
                                <div class="testi-content">
                                    <img src="assets/images/Cullen_women.webp"
                                        class="rounded-circle mb-3" alt="Ripley Ford"
                                        style="width:78px;height:78px;object-fit:cover;" loading="lazy">
                                    <h3 class="fw-bold display-6 mb-3">Malika Walker</h3>
                                    <div class="mb-3">
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i class="bi bi-star-fill fs-4 p-2"></i>
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i>
                                    </div>
                                    <p class="lead mb-0" style="color:#d7e8f5;">
                                        "I was nervous about self-publishing, but <?php echo WEBSITE_NAME ?> made the process
                                        so
                                        seamless. Their book editing and proofreading team ensured my story was
                                        polished. Thanks
                                        to their marketing expertise, I've gained an amazing readership."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-4 text-center">
                                <div class="team-img">
                                    <img src="assets/images/ch-1.webp"
                                        class="img-fluid rounded shadow-lg" alt="Book cover" loading="lazy">
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-7 text-white text-center text-lg-start">
                                <div class="testi-content">
                                    <img src="assets/images/Brendan-man.webp"
                                        class="rounded-circle mb-3" alt="Alex Rivera"
                                        style="width:78px;height:78px;object-fit:cover;" loading="lazy">
                                    <h3 class="fw-bold display-6 mb-3">Tony Ball</h3>
                                    <div class="mb-3">
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i class="bi bi-star-fill fs-4 p-2"></i>
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i>
                                    </div>
                                    <p class="lead mb-0" style="color:#d7e8f5;">
                                        "From the very beginning, <?php echo WEBSITE_NAME ?> provided personalized attention
                                        that made
                                        all the difference. Their team helped me craft a best-selling book and supported
                                        me every
                                        step of the way. I highly recommend them to any aspiring author!"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 3 -->
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-4 text-center">
                                <div class="team-img">
                                    <img src="assets/images/005.webp"
                                        class="img-fluid rounded shadow-lg" alt="Book cover" loading="lazy">
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-7 text-white text-center text-lg-start">
                                <div class="testi-content">
                                    <img src="assets/images/p1.webp" class="rounded-circle mb-3"
                                        alt="Sophia Lee" style="width:78px;height:78px;object-fit:cover;"
                                        loading="lazy">
                                    <h3 class="fw-bold display-6 mb-3">Derrick Hart</h3>
                                    <div class="mb-3">
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i class="bi bi-star-fill fs-4 p-2"></i>
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i>
                                    </div>
                                    <p class="lead mb-0" style="color:#d7e8f5;">
                                        "Working with <?php echo WEBSITE_NAME ?> was a dream come true. They helped me with
                                        everything
                                        from book formatting to audiobook narration, and the results were beyond my
                                        expectations.
                                        Their author website design service was just the cherry on top!"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE 4 -->
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-4 text-center">
                                <div class="team-img">
                                    <img src="assets/images/001.webp"
                                        class="img-fluid rounded shadow-lg" alt="Book cover" loading="lazy">
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-7 text-white text-center text-lg-start">
                                <div class="testi-content">
                                    <img src="assets/images/Brendan-man.webp"
                                        class="rounded-circle mb-3" alt="Sophia Lee"
                                        style="width:78px;height:78px;object-fit:cover;">
                                    <h3 class="fw-bold display-6 mb-3">Johnathan</h3>
                                    <div class="mb-3">
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i class="bi bi-star-fill fs-4 p-2"></i>
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i>
                                    </div>
                                    <p class="lead mb-0" style="color:#d7e8f5;">
                                        "I couldn't have asked for a better team. <?php echo WEBSITE_NAME ?> took my manuscript
                                        and
                                        transformed it into a polished, professional book. Their editing and book
                                        marketing
                                        expertise helped me achieve best-seller status. I'm beyond grateful for their
                                        support!"

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE 5 -->
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-4 text-center">
                                <div class="team-img">
                                    <img src="assets/images/008.webp"
                                        class="img-fluid rounded shadow-lg" alt="Book cover" loading="lazy">
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-7 text-white text-center text-lg-start">
                                <div class="testi-content">
                                    <img src="assets/images/Shokeir_man.webp"
                                        class="rounded-circle mb-3" alt="Sophia Lee"
                                        style="width:78px;height:78px;object-fit:cover;">
                                    <h3 class="fw-bold display-6 mb-1">Ripley Ford</h3>
                                    <div class="mb-3">
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i class="bi bi-star-fill fs-4 p-2"></i>
                                        <i class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i><i
                                            class="bi bi-star-fill fs-4 p-2"></i>
                                    </div>
                                    <p class="lead mb-0" style="color:#d7e8f5;">
                                        ""The journey with <?php echo WEBSITE_NAME ?> has been incredible! From book formatting
                                        to book
                                        cover design, their team handled everything. The book marketing strategies they
                                        implemented helped my book reach readers far beyond my expectations.""

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>



        </div>
    </section>
    
    <section class="sec_3 sec_7 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="contant_wrap module come-in">
                        <h2 class="fw-bold">Keep Writing, We'll Take Care Of <span
                                style="color:#f6921e">Publishing</span></h2>
                        <p class="pt-3 mb-3"> At <?php echo WEBSITE_NAME ?>, we understand the dedication it takes to craft a
                            compelling manuscript. Writing requires creativity, passion, and commitment, and we believe
                            that your focus should be entirely on your writing. Let us take care of the rest, from book
                            publishing to marketing, ensuring your literary masterpiece reaches the right readers.</p>
                        <ul>
                            <li class="mb-3 me-3">
                                Our team of
                                experienced professionals is here to support you
                                in every stage of the publishing process. Whether it’s editing, formatting, or
                                proofreading, we
                                ensure that every aspect of your manuscript is meticulously perfected. With Casper
                                Publications,
                                you get expert services that turn your ideas into polished books, ready for the market.


                            </li>
                            <li class="mb-3">
                                From designing
                                captivating book covers to creating
                                personalized marketing campaigns, we focus on the details so you can stay focused on
                                what
                                matters most: writing your next bestseller. We provide the tools and strategies to
                                maximize your
                                book’s success, ensuring it stands out in a competitive market.
                            </li>
                            <li class="mb-3">
                                Partner with
                                <?php echo WEBSITE_NAME ?>, and together, we’ll
                                transform your manuscript into a finished product that not only meets but exceeds your
                                expectations. Trust us with the rest so you can concentrate on creating your best work.

                                <!--<li> We provide the tools and strategies to maximize your book's success, ensuring it stands out in a competitive market and reaches its full potential.</li>-->
                            </li>
                        </ul>
                        <div class="global_btn">
                            <button type="button" class="btn module come-in"><a href="<?php echo PHONE_HREF ?>">
                                    <?php echo PHONE ?> </a></button>
                            <button type="button" class="btn module btn-primary blink come-in" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Get A Quote</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="content_wrap">
                        <img class="myLazy" src="assets/images/world-of-literature.webp"
                            alt="world-img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us py-5" style="background:#0e2a3b;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tabs_inner content text-center py-5">
                        <h2 class="module come-in">Editing. Formatting. Marketing. <span>We Make Publishing Easy</span>
                        </h2>
                        <p class="module come-in">At <?php echo WEBSITE_NAME ?>, we're here to help your book soar from
                            manuscript to market.
                            Our team is with you every step of the way, from editing and book formatting to strategic
                            marketing. Let us worry about the details while you focus on doing what you do best,
                            writing.
                            Together, we'll make sure your book gets the attention it deserves!
                        </p>
                    </div>
                </div>
            </div>
            <div class=" rounded-3 bg-white shadow-sm p-4 p-lg-5">
                <div class="row g-4 align-items-center">
                    <!-- Left: Heading + Copy + Form -->
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2" style="color:#1c2230;">
                            Start Your Publishing Journey
                            <span class="ms-1" style="color:#f6921e;">With A Free Consultation</span>
                        </h2>
                        <p class="text-secondary mb-4">
                            Let's talk about your book! Reach out for a free consultation and get
                            personalized advice on bringing your manuscript to market with professional
                            support and expertise.
                        </p>

                        <form class="form_submission" method="post">
                            <div style="position: absolute; left: -9999px;">
                                <input class="form-control" type="text" id="honeypot" name="honeypot">
                            </div>
                            <input type="hidden" name="link" value="https://casperpublications.com/lp">
                            <div class="row g-3">
                                <!-- Left column: inputs -->
                                <div class="col-md-6 d-flex flex-column gap-3">
                                    <div>

                                        <input maxlength="255" name="name" type="text" class="form-control"
                                            placeholder="Name" required>

                                    </div>

                                    <div>
                                        <input type="email" maxlength="255" class="form-control" name="email"
                                            placeholder="Your Email" required>


                                    </div>

                                    <div>

                                        <input name="phone" maxlength="20" type="tel"
                                            class="form-control" placeholder="Phone Number" required>

                                    </div>
                                </div>

                                <!-- Right column: textarea -->
                                <div class="col-md-6">


                                    <textarea name="message" class="form-control h-100"
                                        placeholder="Talk About Your Project" rows="8"></textarea>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <input type="submit" class="btn w-100 py-2 btn-deep btn-primary" name="submit"
                                        value="Submit">

                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Right: Image -->
                    <div class="col-lg-4">
                        <img src="assets/images/contact-form.webp" class="img-fluid rounded-3"
                            alt="Consultation" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* match the light grey inputs from your design */
        .consult-form .form-control {
            background: #f1f3f5;
            border-color: #e6e9ee;
            padding: .9rem 1rem;
        }

        .consult-form .form-control:focus {
            background: #ffffff;
            border-color: #b6d9f2;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .1);
        }

        .btn-deep {
            background: #f6921e;
            color: #fff;
            border: none;
            border-radius: .5rem;
        }

        .btn-deep:hover {
            filter: brightness(1.1);
        }

        /* make textarea visually balanced with the three stacked inputs */
        @media (min-width: 768px) {
            #project {
                min-height: 232px;
            }
        }
    </style>

    <section class="faq-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold display-6 mb-2">
                            Confused About The Process? <span class="text-info">Our FAQs Can Help</span>
                        </h2>
                        <p class="text-muted mb-0">
                            Got questions? Find answers in our Frequently Asked Questions section. Let Casper
                            Publications guide you through the process of publishing success!


                        </p>
                    </div>

                    <div class="accordion accordion-flush" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 border-top">
                            <h3 class="accordion-header" id="faq-heading-1">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="false"
                                    aria-controls="faq-collapse-1">
                                    What services do you offer?
                                </button>
                            </h3>
                            <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-0 px-0 text-muted">
                                    We offer full-suite support: book publishing, editing, formatting, proofreading,
                                    eBook writing, book cover design, marketing, author websites, and audiobook
                                    narration.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 border-top">
                            <h3 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false"
                                    aria-controls="faq-collapse-2">
                                    How long does the publishing process take?
                                </button>
                            </h3>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-0 px-0 text-muted">
                                    Timelines vary by scope. Typical projects run 6–12 weeks from editing to launch,
                                    with faster options available for simpler manuscripts.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0 border-top">
                            <h3 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false"
                                    aria-controls="faq-collapse-3">
                                    Will I retain the rights to my book?
                                </button>
                            </h3>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-0 px-0 text-muted">
                                    Yes, with <?php echo WEBSITE_NAME ?>, you retain full rights to your book. We only provide
                                    expertise and support to bring your manuscript to market.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 border-top">
                            <h3 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false"
                                    aria-controls="faq-collapse-4">
                                    How do I get started with <?php echo WEBSITE_NAME ?>?
                                </button>
                            </h3>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-0 px-0 text-muted">
                                    Simply reach out to us through our contact form, or schedule a free consultation.
                                    We'll
                                    explore the best way to bring your manuscript to life with <?php echo WEBSITE_NAME ?>.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0 border-top border-bottom">
                            <h3 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false"
                                    aria-controls="faq-collapse-5">
                                    Do you help with marketing my book?
                                </button>
                            </h3>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-0 px-0 text-muted">
                                    Absolutely! <?php echo WEBSITE_NAME ?> offers comprehensive book marketing services,
                                    including
                                    social media campaigns, press releases, book reviews, and advertising.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <footer class="main-footer">
        <div class="container">
            <div class="row cta_row align-items-center">
                <div class="col-md-8">
                    <div class="footer_cta">
                        <h2>Reach The Top Of The Charts<br>With<span> <?php echo WEBSITE_NAME ?>!
                            </span></h2>
                        <p>Take the leap from a passionate writer to a bestselling author with our self-publishing
                            solutions
                            and targeted marketing efforts. <?php echo WEBSITE_NAME ?> make your author's dreams a reality.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_cta_btn">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Lets Get Started</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="footer_inner">
                        
                        <a href="https://amazonkdppro.com/publishing/" class="d-block">
                            <img src="assets/images/logo_white.png" alt="footer">
                        </a>
                        <p> <?php echo WEBSITE_NAME ?> offers a full range of publishing services designed to make your journey
                            simple, clear, and effective. Get your book into the hands of readers with cutting-edge
                            solutions.
                        </p>
                    </div>
                    <!-- <div class="social-icons d-flex align-items-center gap-3">
                        <ul class="d-flex align-items-center gap-3 mt-3">
                            <li><a href="https://www.facebook.com/Casper.Publication/ " target="_blank">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/casper.publications/ " target="_blank">
                                    <i class="bi bi-instagram"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/casperpublications/" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li><a href="https://www.trustpilot.com/review/casperpublications.com" target="_blank">
                                    <i class="bi bi-star-fill"></i></a>
                            </li>

                        </ul>
                    </div> -->

                </div>
                <div class="col-md-6">
                    <div class="footer_info">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <div class="icon_wrap">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="infor_wrap">
                                    <h5>Street Address</h5>






                                    <p><?php echo ADDRESS ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_wrap">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="infor_wrap">
                                    <h5>Phone:</h5>
                                    <p><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?> </a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_wrap">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="infor_wrap">
                                    <h5>Email:</h5>
                                    <p>
                                        <a href="<?php echo EMAIL_HREF ?>">
                                            <?php echo EMAIL ?></a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <img class="badges mb-4" src="assets/images/badge.webp" alt="footer-badge">
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-md-4">
                    <div class="privacy">
                        <a href="
                  https://www.amazonkdppro.com/privacy.php">Privacy-Policy</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="privacy text-end">
                        <a href="https://www.amazonkdppro.com/terms.php">Terms and Conditions</a>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="bottom_line">
                        <p> © <?php echo date('Y') ?> <?php echo WEBSITE_NAME ?> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal">
                <!-- Close Button -->
                <button type="button" class="custom-close" data-bs-dismiss="modal" aria-label="Close">×</button>

                <div class="modal-body text-center">
                    <!-- Heading -->
                    <h2 class="popup-title">
                        You Dream It, We Publish It
                        <br>
                        <span class="popup-subtitle">Get Up To 50% OFF Our Premium Services!</span>
                    </h2>

                    <!-- Form -->
                    <form method="post" class="popup-form mt-3 form_submission">
                        <div style="position:absolute;left:-9999px;">
                            <input type="text" name="honeypot">
                        </div>

                        <input type="hidden" name="zf_referrer_name" value="">
                        <input type="hidden" name="zf_redirect_url" value="">
                        <input type="hidden" name="link" value="https://www.amazonkdppro.com/publishing/">
                        <input type="hidden" name="pageurl" class="form-1-url">

                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" placeholder="message"></textarea>

                        <input type="submit" cite="Submit" data-hover="Submit" class="submit-btn" name="submit"
                            value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal">
                <!-- Close Button -->
                <button type="button" class="custom-close" data-bs-dismiss="modal" aria-label="Close">×</button>

                <div class="modal-body text-center">
                    <!-- Heading -->
                    <h2 class="popup-title">
                        You Dream It, We Publish It
                        <br>
                        <span class="popup-subtitle">Get Up To 50% OFF Our Premium Services!</span>
                    </h2>

                    <!-- Form -->
                    <form method="post" class="popup-form mt-3 form_submission" enctype="multipart/form-data">
                        <div style="position:absolute;left:-9999px;">
                            <input type="text" name="honeypot">
                        </div>

                        <input type="hidden" name="zf_referrer_name" value="">
                        <input type="hidden" name="zf_redirect_url" value="">
                        <input type="hidden" name="link" value="https://casperpublications.com/lp">
                        <input type="hidden" name="pageurl" class="form-1-url">

                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" placeholder="Message"></textarea>
                        <!-- <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="uploaded_file"
                                accept=".pdf,.doc,.docx,.webp,.webp">
                            <div id="file-error" style="color: red;"></div>
                        </div> -->
                        <input type="submit" cite="Submit" data-hover="Submit" class="submit-btn" name="submit"
                            value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../js/jquery.validate.min.js"></script>
    <?php include '../include/chat-code-script.php'; ?>





    <script>
        document.getElementById('formFile').addEventListener('change', function () {
            const file = this.files[0];
            const allowedTypes = ['application/pdf', 'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'image/jpeg',
                'image/png'
            ];
            const maxSize = 3 * 1024 * 1024; // 3 MB
            document.getElementById('file-error').textContent = '';

            if (!file) return;

            // Check file type
            if (!allowedTypes.includes(file.type)) {
                document.getElementById('file-error').textContent =
                    'Invalid file type. Allowed: PDF, DOC, DOCX, .webp, PNG.';
                this.value = ''; // Clear the file input
                return;
            }

            // Check file size
            if (file.size > maxSize) {
                document.getElementById('file-error').textContent = 'File is too large. Max size is 3MB.';
                this.value = ''; // Clear the file input
                return;
            }
        });
    </script>



    

    <script>
        const MAX_SPV = 4; // desktop max slides per view
        const swipers = {};

        // Function to duplicate slides if there are too few for the loop
        function ensureEnoughSlides(swiperEl) {
            if (swiperEl.dataset.duplicated === "1") return;
            const wrapper = swiperEl.querySelector('.swiper-wrapper');
            const original = Array.from(wrapper.children);
            if (!original.length) return;

            const minNeeded = Math.max(MAX_SPV + 1, MAX_SPV * 2); // ~8
            let current = wrapper.children.length;
            let i = 0;
            while (current < minNeeded && i < 50) {
                const clone = original[i % original.length].cloneNode(true);
                wrapper.appendChild(clone);
                current++;
                i++;
            }
            swiperEl.dataset.duplicated = "1";
        }

        // Create Swiper instance
        function createSwiper(selectorOrEl) {
            console.log("Creating Swiper for", selectorOrEl);
            return new Swiper(selectorOrEl, {
                slidesPerView: 4, // Number of slides per view (default for large screens)
                spaceBetween: 20, // Space between slides
                loop: true, // Enable looping
                speed: 4000, // Animation speed
                autoplay: {
                    delay: 0, // Disable delay to keep slides moving continuously
                    disableOnInteraction: false // Don't stop autoplay when interacting
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1 // For mobile devices
                    },
                    420: {
                        slidesPerView: 2 // For small tablets
                    },
                    640: {
                        slidesPerView: 2 // For small tablets
                    },
                    768: {
                        slidesPerView: 3 // For medium screens (768px) showing 2 slides
                    },
                    1024: {
                        slidesPerView: 4 // For large screens showing 4 slides
                    }
                }
            });
        }

        // Initialize all swipers
        document.querySelectorAll('.mySwiper').forEach((el) => {
            ensureEnoughSlides(el); // Ensure there are enough slides
            const id = el.id;
            swipers[id] = createSwiper('#' + id); // Create swiper for each swiper element
            if (getComputedStyle(el).display === 'none') {
                swipers[id].autoplay.stop(); // Stop autoplay if swiper is hidden
            }
        });

        // Tabs switching logic
        const tabs = document.querySelectorAll('.tab-btn');
        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active')); // Remove active class from all tabs
                tab.classList.add('active'); // Add active class to clicked tab

                const targetId = tab.dataset.target;
                document.querySelectorAll('.mySwiper').forEach((s) => {
                    s.style.display = 'none'; // Hide all swiper elements
                });

                const activeEl = document.getElementById(targetId);
                activeEl.style.display = 'block'; // Show the active swiper element

                const sw = swipers[targetId];
                if (sw) {
                    sw.update(); // Update swiper instance
                    sw.slideToLoop(0, 0); // Reset swiper to the first slide
                    sw.autoplay.start(); // Start autoplay
                }
            });
        });
    </script>
</body>
</html>