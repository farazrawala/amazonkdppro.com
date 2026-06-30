<footer>
    <div class="container">
<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="logo-fot">
            <img src="images/logo.png" alt class="lazy">
            <p>
                We provide professional ghostwriting, editing, and publishing support services to help authors develop and prepare their manuscripts.
            </p>

            <p class="disclaimer">
                We are an independent service provider and are not affiliated with Amazon or Kindle Direct Publishing (KDP).
            </p>
        </div>
    </div>

    <div class="col-md-6 col-lg-2">
        <div class="srvs-fot">
            <h4>Services</h4>
            <ul>
                <li><a href="editing.php">Editing</a></li>
                <li><a href="ghost-writing-services.php">Ghostwriting</a></li>
                <li><a href="book-publishing.php">Publishing Guidance</a></li>
                <li><a href="formating.php">Formatting</a></li>
                <li><a href="book-marketing.php">Book Marketing</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="srvs-fot-lnk">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="suport">
            <h4>Support</h4>
            <ul>
                <li><a href="<?php echo PHONE_HREF ?>"><span>Call Us:</span>
                        <?php echo PHONE ?>
                    </a></li>
                <li><a href="<?php echo EMAIL_HREF ?>"><span>Email Us:</span>
                        <?php echo EMAIL ?>
                    </a></li>
                <li><a href="javascript:;"><span>Address: </span>
                        <?php echo ADDRESS ?>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
    </div>
</footer>



<!-- <a href="https://wa.me/18884092959" class="float">
   
    <i class="fab fa-whatsapp my-float"></i>
</a> -->

<div class="overlay" style="display: none;"></div>
<div class="popupMain LoginPopup" id="pop-form" style="display: none;">
    <div class="popup-inner">
        <a class="closePop" href="javascript:;">X</a>
    </div>
    <div class="popform-holder">
        <div class="popTxt">
            <h6>Sign Up To Avail 50% Discount</h6>

        </div>
        <form class="form_submission" method="POST">

            <!-- Custom Fields -->
            <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
                                                        "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
            <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
            <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
            <input type="hidden" name="source" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

            <!--PPC parameters -->
            <input type="hidden" name="keyword"
                value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
            <input type="hidden" name="matchtype"
                value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
            <input type="hidden" name="msclkid"
                value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
            <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
            <!--End PPC paramters -->

            <div class="popup-bdy">
                <div class="row">
                    <div class="col-md-6">
                        <div class="frmicon-box">
                            <input type="text" placeholder="Name" name="name" required="" minlength="2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="frmicon-box">
                            <input type="email" placeholder="Email" name="email" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="frmicon-box phonecode">

                            <input type="text" name="phone" required="" placeholder="Phone Number" maxlength="10"
                                minlength="10">

                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="footer-form-textarea">
                            <select name="manuscript" class="large gfield_select form-select" required="">
                                <option value="" selected="selected" class="gf_placeholder"> Do you have a manuscript
                                    ready?* </option>
                                <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish today</option>
                                <option value="Yes, I'll be ready to publish in 1 to 3 months">Yes, I'll be ready to
                                    publish in 1 to 3 months</option>
                                <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be ready to
                                    publish in 3 to 6 months</option>
                                <option value="No, I do not have a book or manuscript ready">No, I do not have a book or
                                    manuscript ready</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="footer-form-textarea">
                                <select name="published" class="large gfield_select form-select here-you" required="">

                                    <option value="" selected="selected" class="gf_placeholder"> Have you published
                                        before?*</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio lele">
                                <select name="type_of_book " id="input_2_7" class="large gfield_select form-select"
                                    aria-required="true" aria-invalid="false">
                                    <option value="" selected="selected" class="gf_placeholder ">What type of your book?
                                    </option>
                                    <option value="Business">Business</option>
                                    <option value="Biography">Biography</option>
                                    <option value="Inspirational">Inspirational</option>
                                    <option value="Non-Fiction">Non-Fiction</option>
                                    <option value="How-To">How-To</option>
                                    <option value="Autobiography/Memoir">Autobiography/Memoir</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Children's">Children's</option>
                                    <option value="Spiritual/Religious">Spiritual/Religious</option>
                                    <option value="Fiction">Fiction</option>
                                    <option value="Art/Photography">Art/Photography</option>
                                    <option value="Cookbook">Cookbook</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <p class="pop-p">What services are you looking for?</p>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Self Publishing<br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Cover Design<br>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Illustration<br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Editing<br>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Formating<br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-form-textarea tick-radio">
                                <input
                                    style="width: 20%;height: auto;margin-top: 12;margin-top: 16px;margin-bottom: 15px;"
                                    type="checkbox" value="Bike">Book Marketing<br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="popup-btn">Get Started</button>
            <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
            <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
            <div class="loader" style="display: none">
                <img alt="loader" src="loader.gif">
            </div>
        </form>
    </div>
    <!-- <span class="uptownloader"></span> -->
</div>
<!-- footer strat  -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script src="js/plugin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/customs.js"></script>
<script src="https://kit.fontawesome.com/743fc22ee9.js"></script>

<script src="js/jquery.validate.min.js"></script>
<!-- <script src="js/form-submit.js"></script> -->

<?php include 'include/chat-code-script.php'; ?>



<script>
    function toggleMobileMenu() {
        const menuBar = document.querySelector('.menu-Bar');
        const mobileMenu = document.querySelector('.menuWrap');

        menuBar.classList.toggle('active');
        mobileMenu.classList.toggle('open');
    }
    $(function() {
        // Handle dropdown toggle (caret or parent link)
        $('.menu-item-has-children > .dropdown-toggle').on('click', function(e) {
            const $li = $(this).closest('.menu-item-has-children');

            if (!$li.hasClass('open')) {
                // prevent navigation, just open
                e.preventDefault();
                e.stopPropagation();

                // close others
                $li.siblings('.menu-item-has-children').removeClass('open')
                    .children('.sub-menu').slideUp(200);

                // open current
                $li.addClass('open').children('.sub-menu').slideDown(200);

                $(this).attr('aria-expanded', true);
            } else {
                // already open → allow normal navigation on <a>
                if ($(this).is('a')) {
                    return true; // follow link
                }
                // caret clicked → toggle close
                e.preventDefault();
                e.stopPropagation();
                $li.removeClass('open').children('.sub-menu').slideUp(200);
                $(this).attr('aria-expanded', false);
            }
        });

        // Close when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.menu-item-has-children').length) {
                $('.menu-item-has-children.open')
                    .removeClass('open')
                    .children('.sub-menu').slideUp(200);

                $('.menu-item-has-children > .dropdown-toggle').attr('aria-expanded', 'false');
            }
        });
    });
</script>

</body>
</html>