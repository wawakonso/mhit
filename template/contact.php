
<?php
        $page_title = "Contact";
        $og_description = "";
        $og_title = "Contact Mwenye Hekima";
        $og_site_name = "Mwenye Hekima";
        $og_type = "Information technology";

        include ('header.php');
?>

<!-- =========================
START PAGE TITLE SECTION
============================== -->
<section class="page-title-area contact-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="about-head-content">
               <h2>Contact Us</h2>
               <p>Feel free to contact us any time, we wanna hear from you!</p>
            </div>
            <div class="breadcrumbs text-center">
               <ul class="page-breadcrumbs">
                   <li><a href="#">home</a></li>
                   <li><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =========================
END PAGE TITLE SECTION
============================== -->

<!-- =========================
START CONTACT US SECTION
============================== -->
<section class="contact-us-area contact-us-1-area" >
   <div class="contact-form">
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <div class="contact-form-3-text">
                  <h2>Contact Information</h2>
                  <p>Feel free to contact me for any questions or if you need any help or services ! I provide competitive insight and market analysis no one can duplicate. Analysis reveals opportunities, supports decisions, connects your SEO tactics and strategy directly to revenue.</p>
                  <div class="address-area">
                     <div class="view-location">
                        <h2>Address :</h2>
                        <p><i class="fa fa-map-marker"></i> 400 16th Road, Central Park, Block A<br>
                                                            &nbsp Midrand 1685, South Africa</p>
                        <a href="#">View Location On Map</a>
                     </div>
                     <div class="col-md-6 no-padding-left">
                        <div class="address-details">
                            <h2>Email :</h2>
                            <span><i class="fa   fa-envelope"></i>{{compEmail}}</span>
                        </div>
                     </div>
                     <div class="col-md-6 no-padding-left">
                        <div class="address-details">
                            <h2>Phone :</h2>
                            <span><i class="fa  fa-phone"></i>{{telephone}}</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-8">
               <div class="contact-form-left contact-form-3">
                  <h2>Drop Me A Line</h2>
                  <div class="show_result"></div>
                  <div class="result_message"></div>
                  <form>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" id="Name" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                           <input type="email" id="Email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Phone" placeholder="Phone">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Subject" placeholder="Subject">
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" id="Message"  placeholder="Message"></textarea>
                        </div>
                        <div class="col-sm-12 text-center">
                           <button type="button" id="contact_submit" class="btn btn-dm">Send Message</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =========================
START CONTACT US SECTION
============================== -->
<div id="map">
</div>

<?php include ('footer.php') ?>
