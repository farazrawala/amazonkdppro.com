<!DOCTYPE html>
<html lang="en">
<title>Contact a KDP Book Publishing Company</title>
<meta name="description"
    content="Have a book idea? Reach out to Amazon KDP Experts, your trusted KDP book publishing company. We listen, plan, and get your book moving fast. Start today.">
<link rel="canonical" href="https://www.amazonkdpexperts.com/contact" />
<?php include __DIR__ . '/include/header.php' ?>

<div class="contact-detail-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contat-box">
                    <i class="fas fa-solid fa-phone"></i>
                    <h6>Phone</h6>
                    <p><a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contat-box">
                    <i class="fas fa-solid fa-envelope"></i>
                    <h6>Email</h6>
                    <p><a href="<?php echo EMAIL_HREF ?>"><?php echo EMAIL ?></a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contat-box borders">
                    <i class="fas fa-map-marker-alt"></i>
                    <h6>Location</h6>
                    <p>
                        <?php echo ADDRESS ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="form-contact">
                    <h3>Get in Touch with Us Today!</h3>
                    <p>Need help in your writing? We use our magic to sculpt your book into the stuff of legends.</p>
                    <form class="form_submission" method="POST">

                        <!-- Custom Fields -->
                        <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . 
                        "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                        <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                        <input type="hidden" name="subject" value="Contact Us Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                        <input type="hidden" name="source" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

                        <!--PPC parameters -->
                        <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
                        <input type="hidden" name="matchtype" value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
                        <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">    
                        <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
						<!--End PPC paramters -->

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name" name="name" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" name="email" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="number" name="phone" placeholder="Phone" minlength="11" maxlength="12" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="Message" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" value="submit">Send</button>
                                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                <div class="loader" style="display: none">
                                    <img alt="loader" src="loader.gif">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-logos text-center container sp50"> <img class="lazy" src="images/images-footer-logos.webp" alt="">
</div>
<?php include __DIR__ . '/include/footer-form.php' ?>
<?php include __DIR__ . '/include/footer.php' ?>