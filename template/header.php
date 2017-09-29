<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> MHIT GROUP - <?php echo $page_title; ?></title>
      <meta name="description" content="Mwenye Hekima IT promotes young computer engineers and IT student to learn and practice their knowledge in a professional environment. We build softwares based on client requirement, and we make use of best technology and consider security issues.">
      <meta name="author" content="Konso Wawa">
      <meta name="keywords" content="computer, programming,network,website,software,software development,mobile,mobile development,database,database tuning,database setup,data center,digital marketing,web application.">


      <?php include('facebook_og.php');?>
      <!-- FAVICON -->
      <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico" />
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- FONT AWESOME ICON -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- STROKE GAP ICON -->
      <link href="css/stroke-icon.css" rel="stylesheet">
      <link href="css/ie7.css" rel="stylesheet">
      <!-- MENU -->
      <link rel="stylesheet" href="css/menuzord.css">
      <!-- ANIMATE CSS -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- RS5.0 Main Stylesheet -->
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
      <!-- RS5.0 Layers and Navigation Styles -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
      <!-- OWL CSS -->
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <!-- Portfolio Filter -->
      <link rel="stylesheet" href="css/bootFolio.css">
      <!-- Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Box slider css -->
      <link rel="stylesheet" href="css/jquery.bxslider.css">
      <!-- JQUERY UI STYLE -->
      <link rel="stylesheet" href="css/jquery-ui.css">
      <!-- MAIN STYLE -->
      <link href="css/main.css" rel="stylesheet">

      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

      <script src="js/jquery-1.11.3.min.js"></script>
      <!-- RS5.0 Core JS Files -->
      <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="js/angular.min.js"></script>
   </head>
   <body  ng-app="teamApp" ng-controller="teamCtrl">
      <!-- =========================
        START HEADER SECTION
      ============================== -->
      <div class="outslider_loading">
         <div class="la-ball-scale-ripple-multiple la-dark la-2x">
             <div></div>
             <div></div>
             <div></div>
         </div>
      </div>
      <div class="full-page-search">
         <form action="#">
             <input type="text" name="googlesearch" placeholder="Type Words Then Press Enter To Search">
             <input type="submit" id="searchsubmit" value="Search">
           </form>
         <div class="sr-overlay"></div>
      </div>
      <div class="log-in-up">
         <div class="log-in-content">
            <div class="log-in-head text-center">
               <img src="images/log-in-key.png" alt="">
               <h2>Login To Your Account</h2>
            </div>
            <form action="#">
               <input type="text" class="form-control" placeholder="User name">
               <input type="password" class="form-control" placeholder="password">
               <input type="submit" value="LOGIN">
               <input type="checkbox" value="Remember!">Remember! <a href="#"><span>Register/</span>Forget Password?</a>
            </form>
            <a href="#" class="remove-log-in"><img src="images/log-in-cross.png" alt=""></a>
         </div>
         <div class="log-in-overlay"></div>
      </div>
      <div class="consult-up">
         <div class="consult-up-content">
            <div class="container">
               <div class="contact-form">
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="contact-form-3-text">
                           <img src="images/google-iframe.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <div class="contact-form-left contact-form-3">
                           <h2>Drop Me A Line</h2>
                           <form>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                 </div>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control" placeholder="Phone">
                                 </div>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control" placeholder="Subject">
                                 </div>
                                 <div class="col-sm-12">
                                     <textarea class="form-control" rows="3"  placeholder="Message"></textarea>
                                 </div>
                                 <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-dm">Send Message</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <a href="#" class="remove-consult"><img src="images/log-in-cross.png" alt=""></a>
               </div>
            </div>
         </div>
         <div class="consult-overlay"></div>
      </div>
      <div class="right-full-menu">
         <div class="right_menu_item">
            <div class="right_menu_item-content">
               <div class="right-menu-icon">
                  <a href="index.php"><img src="images/mhit.png" class="right_menu_logo" alt="Mhit Logo"></a>
               </div>
               <div class="right-menu-list">
                  <ul>
                      <li ng-repeat="n in main_menu" class={{n.class}}>
                              <a href={{n.link}}>{{n.name}}</a>
                      </li>
                  </ul>
               </div>
               <div class="right-menu-social-box">
                  <ul class="cms-social">
                     <li class="facebook">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     </li>
                     <li class="twitter">
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     </li>
                     <li class="google">
                     <a href="#"><i class="fa fa-pinterest"></i></a>
                     </li>
                     <li class="linkedin">
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                     </li>
                     <li class="linkedin">
                     <a href="#"><i class="fa fa-rss"></i></a>
                     </li>
                  </ul>
                  <div class="footer-bottom-right right-menu-copyright">
                     <p>© 2015 - 2016 Metrics. All Rights Reserved</p>
                     <p>With Love by <span><a href="#">7oroof.com</a></span></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="close_ic"></div>
      </div>
      <?php include ('menu.php') ?>
      <!-- =========================
        END HEADER SECTION
      ============================== -->
