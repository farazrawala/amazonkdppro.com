<style>
    .dropdown-toggle svg {
        font-size: 20px;
    }

    .menu-item-has-children {
        position: relative;
    }

    .menu-item-has-children>a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        min-width: 200px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
        z-index: 1000;
    }

    .sub-menu li a {
        display: block;
        padding: 8px 12px;
        color: #333;
        text-decoration: none;
    }

    .sub-menu li a:hover {
        background: #f5f5f5;
    }

    /* caret */
    .dropdown-toggle {
        display: none;
        margin-left: 6px;
        cursor: pointer;
    }

    .dropdown-toggle i {
        transition: transform .25s ease;
    }

    .menu-item-has-children.open>.dropdown-toggle i {
        transform: rotate(180deg);
    }

    /* Desktop only: hover opens submenu */
    @media (hover: hover) and (pointer: fine) {
        .menu-item-has-children:hover>.sub-menu {
            display: block;
        }
    }

    /* Mobile: show caret and make submenu static */
    @media (max-width: 991px) {
        nav ul {
            flex-direction: column;
        }

        .dropdown-toggle {
            display: inline-flex;
            align-items: center;
        }

        .menu-item-has-children {
            position: static;
        }

        .sub-menu {
            position: static;
            box-shadow: none;
        }
    }
</style>
<!-- header start -->

<header>
    <div class="main-header">
        <div class="container">
            <div class="menu-Bar" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center wow slideInDown">
                <div class="col-md-3 col-lg-2 text-left">
                    <a href="/" class="logo">
                        <img class="lazy" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-md-9 d-md-block menuSec">
                    <div class="menuWrap">
                        <ul id="menu" class="menu">
                            <li><a href="/">Home</a></li>
                            
                            <li class="menu-item-has-children">
                                <a href="service.php">Services</a>
                                <span class="dropdown-toggle" aria-label="Toggle submenu" aria-expanded="false">
                                    <i class="fas fa-caret-down"></i>
                                </span>
                                <ul class="sub-menu">
                                    <li><a href="editing.php">Editing</a></li>
                                    <li><a href="ghost-writing-services.php">Ghostwriting</a></li>
                                    <li><a href="book-publishing.php">Publishing</a></li>
                                    <li><a href="formating.php">Formating</a></li>
                                    <li><a href="book-marketing.php">Book Marketing</a></li>
                                    <li><a href="book-cover-design.php">Book Cover Design</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 text-right">
                    <div class="contact">
                        <ul class="contact-lst">
                            <li class="first"><a href="javascript:;" class="chat"><span><img class="lazy"
                                            src="images/chat-icon.webp"></span>Live Chat Now</a></li>
                            <li class="last"><a href="<?php echo PHONE_HREF ?>"><span><img class="lazy"
                                            src="images/tele-icon.webp"></span><?php echo PHONE ?>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<script>

</script>