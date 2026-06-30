<section class="footer-form-sec wow bounceInUp">
    <div class="container">
        <div class="footerbox">
            <div class="row">
                <div class="col-md-6 pad-r-zero p-0">
                    <div class="footer-left">
                       <h3>Trusted by Authors for Writing & Publishing Support</h3>
                        <p>We provide professional services to authors across different genres, helping them bring their ideas to a publish-ready stage.</p>


                        <img class="lazy" src="images/footer-img-01.webp" alt="">
                        <img class="lazy" src="images/footer-img-02.webp" alt="">

                        <ul>
                            <li> <img class="lazy" src="images/trs-img-1.webp" alt="images"></li>
                            <li> <img class="lazy" src="images/trs-img-2.webp" alt="images"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 pad-l-zero p-0">
                    <div class="footer-right">
                        <h4>Let&rsquo;s Get Your <span>Story </span> Out There!</h4>
                        <form class="form_submission" method="POST">
                            <!-- Custom Fields -->
                            <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                            <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                            <input type="hidden" name="subject" value="Footer Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">

                            <!--PPC parameters -->
                            <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
                            <input type="hidden" name="matchtype"  value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
                            <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
                            <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
                            <!--End PPC paramters -->
                            <div class="footer-form">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="footer-form-input">
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="footer-form-input">
                                            <input type="number" name="phone" placeholder="Phone Number" minlength="11" maxlength="12" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-form-input">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="footer-form-textarea">
                                            <textarea name="Message" placeholder="Project Details"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="footer-form-submit">
                                            <input type="submit" value="Submit Now">
                                            <!-- Button fields -->
                                            <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                            <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                            <div class="loader" style="display: none">
                                                <img alt="loader" src="loader.gif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="contact-lst2 styl1">
                                <li class="first"><a href="javascript:;" class="chat"><span><img class="lazy"
                                                src="images/chat-icon.webp"></span>Live Chat </a>
                                </li>
                                <li class="last"><a href="<?php echo PHONE_HREF ?>"><span><img class="lazy"
                                                src="images/tele-icon.webp"></span><?php echo PHONE ?></a></li>

                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-logos text-center wow bounceIn"> <img class="lazy" src="images/footer-logos.webp" alt="">
        </div>
    </div>
</section>