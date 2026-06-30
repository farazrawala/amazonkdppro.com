<div class="bannerForm">
   <img class="lazy" src="../images/Banner-Timer.webp">
   <div>
      <h2>The <span>Best Book Editing in Town</span></h2>
      <h3>Within Easy Reach</h3>
      <form class="form_submission" method="POST">

         <!-- Custom Fields -->
         <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . 
         "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
         <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
         <input type="hidden" name="subject" value="Signup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
         <input type="hidden" name="source" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

         <!--PPC parameters -->
         <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
         <input type="hidden" name="matchtype" value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
         <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">    
         <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
         <!--End PPC paramters -->

         <div class="row">
            <div class="col-md-12">
               <div class="fld-input">
                  <input type="text" name="name" placeholder="Name" required=""> <i class="fas fa-user"></i>
               </div>
            </div>
            <div class="col-md-12">
               <div class="fld-input">
                  <input type="email" name="email" placeholder="Email" required=""> 
                  <i class="fas fa-envelope"></i>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="fld-input">
                  <input type="number" name="phone" placeholder="Phone" minlength="11" maxlength="12"  required="">
                  <i class="fas fa-phone"></i>
               </div>
            </div>
         </div>
         <div class="fld-btn">
            <button class="packageformsubmit1" type="submit" value="1">Get Started</button>
            <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
            <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
            <div class="loader" style="display: none">
               <img alt="loader" src="loader.gif">
            </div>
         </div>
      </form>
   </div>
</div>