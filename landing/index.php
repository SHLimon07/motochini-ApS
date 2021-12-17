
<?php 

 //add database

 require_once('../config.php');
 
 
       $sql = $conn->query('SELECT * FROM about ');
                      
    foreach ($sql as $sql){

    ?>
    
    <meta name="description" content="Neoistone is a reliable, fast and robust platform for all the needs of Hosting and Domain name development tools is so easy to use that litespeed it makes fast site" />

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Motochini ApS- A Productivity tool for Microsoft Dynamic Nav</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/ionicons/css/ionicons.min.css" rel="stylesheet">        
        <link href="assets/bower_components/flexslider/flexslider.css" rel="stylesheet">
        <link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' type="text/css" href="assets/dzsparallaxer/dzsparallaxer.css"/>
            <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        
        <link rel='stylesheet' type="text/css" href="../css/style.css"/>
        <link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

        <!--main css file-->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>
    <body data-spy="scroll">
        <!--pre-loader-->
        <div id="preloader"></div>
        <!--pre-loader-->
        <!--top bar start-->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline">
                            <li><a style="color:white !important;font-size:22px;" href="#"><i class="ion-ios-telephone"></i> +45 25 70 97 28</a></li>
                            <li><a style="color:white !important;font-size:22px;" href="#"><i class="ion-ios-email"></i> contact@motochini.com</a></li>
                        </ul>
                    </div><!--top left col end-->
                    <div class="col-sm-6 text-right hidden-xs">
                        <ul class="list-inline top-socials">                          
                            <li><a style="color:white !important;font-size:18px;margin-top: px;" href="https://www.linkedin.com/company/motochini/about/"><i style="font-size:25px;" class="ion-social-linkedin"></i></a></li>
							 <li style="margin-top:5px"><a style="color:white !important;font-size:18px;" href="https://shlimon.com/motochini-aps/"><span style="font-size:18px;" class="iconify" data-icon="bi:globe"></span></a></li>
                        </ul>
                    </div><!--top social col end-->
                </div><!--row-->
            </div><!--container-->
        </div>
        <!--top bar end-->
        <section id="home" class="dzsparallaxer auto-init dzsparallaxer---window-height use-loading" style="position: relative; height: 800px;" data-options='{  mode_scroll: "normal" }'>

            <div id="" class="divimage dzsparallaxer--target " data-src="../images/home1.jpg" style="width: 100%; height: 130%; background-image: url()">
                <div  style="background: #0000005c;" class="hero-parallax">
                    <div class="hero-inner">
                        <div class="hero-content">
                            <div class="container text-center">
                                <div class="hero-static">
                                    <h1>We Are<span class="text-color"> Motochini ApS</span></h1>
                                    <p>A Productivity Tool For Microsoft Dynamic Nav</p>
                                    <div class="buttons scroll-to">
                                        <a id="about_ust" style="color:white !important;" href="#about" class="btn">About us</a>
                                        <a style="color:white !important;" href="#watch_video" style="color:white;" class="btn text-light">Watch Video</a>
                                    </div>
                                </div>
                            </div><!--container-->
                        </div><!--hero content-->
                    </div><!--hero inner-->

                </div><!--parallax hero-->
            </div><!--parallax image div-->
            <!--<div class="mouse-down scroll-to"><a href="#About us"><i class="ion-mouse"></i></a></div>-->
        </section>
        <!--intro section end-->

        <!--  navbar -->
        <nav class="navbar navbar-default header-fullscreen sticky-header navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img width="200px" src="https://shlimon.com/motochini-aps/images/logo.svg" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">contact</a></li>
                     
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </nav>
        <!--end navigation-->

        <section id="about">
            <div class="space-100"></div>
            <div class="container">
                <h2 class="center-title scrollReveal sr-bottom">Who we are</h2>
                <div class="center-border"></div>
                <div class="space-40"></div>
                <div>
                    <!-- Nav tabs -->
                    <ul class="list-inline text-center about-tabs margin-b-40" role="tablist">
                        <li role="presentation" class="active"><a href="#about-agency" aria-controls="about-agency" role="tab" data-toggle="tab">About</a></li>
                        
                        <li role="presentation"><a href="#process" aria-controls="process" role="tab" data-toggle="tab">Process</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about-agency">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 text-center">
                                    <p class="lead">
                                        Motochini ApS is an productivity tool for dynamic nav. The company vision is to become a leader in delivering tools to developers and consultants in the Microsoft Dynamic NAV ecosystem that help them manage the complexity of their work.
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="skills">
                    
                        </div><!--tab panel end-->
                        <div role="tabpanel" class="tab-pane" id="process">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">1.</span> idea</h2>
                                        <p>
                                            After noticing a growing sense of frustration by consultants and developers because of the increased complexity of the Microsoft Dynamic NAV product, particularly with inexperienced professionals.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">2.</span> Design</h2>
                                        <p>
                                            Motochini's website is designed to improve site traffic, using calming and modernistic colors like white, green, and blue. The layout will be relatively clean and organized, including pictures from previous projects and strong content, which are expected to be more user-friendly.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">3.</span> Develop</h2>
                                        <p>
                                            With a full range of integrated functionality, you can manage your company whilst getting an end-to-end view of the business operations. As part of the Microsoft business software eco-system, Business Central integrates with tools such as Microsoft flow and many more to provide a fully integrated system.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--tab panel end-->
                    </div><!--tab content end-->
                </div>
            </div><!--container end-->
            <div class="space-80"></div>
        </section>
        <!--end about section-->


        <!-- Parallax -->
        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/images/bg-2.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <h2>" Flexibility, Adjusting to the individual needs, Trustworthiness "</h2>
            </div>
        </div>
        <!-- End Parallax -->

 <section style='background: #EFEFEF;padding:50px 0px'>
        
        <div class='container'>
            
            <div class='row'>
                
                <div class='col-md-12'><h2 class='text-center text-black' data-aos="fade-up" data-aos-delay="100"<?php  echo $sql['crew_title'];?></h2></div>
                
                 <div class='col-md-12'><h2 class="section-title mb-3 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay=""><?php  echo $sql['crew_text'];?></h2></div>
                
                 
            </div>
            
            <div class='row'>
                <div class='card_container' data-aos="fade-up" data-aos-delay="100">
                    
                    <div class='cardAbout cardImg'><img src='../images/moto-chini.jpg'  title='' alt=''/></div>
                     <div class='cardAbout cardtest'>
                         
                         <div class='title_area'>
                             
                             <div class='title_heading'><p style='font-size: 13px;' class='text-black'><?php  echo $sql['portfolio_title'];?></p></div>
                             <div class='title_text'><?php  echo $sql['portfolio_sub_title'];?></div>
                             
                         </div>
                         
                         <div class='title_text_area'>
                             
                             <p><?php  echo $sql['portfolio_text'];?></p>
                             
                         </div>
                         
                         
                     </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    

        <!--video tour-->
        <div id="watch_video" class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(../images/video.jpeg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <h2></h2>
                <a href="#" class="video-link" data-toggle="modal" data-target="#video-popup"><i class="ion-ios-play-outline"></i></a>
            </div>
        </div>
        <!--end vide tour-->

        <!--start services-->
        <section id="services">
            <div class="space-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 margin-b-50">
                        <h2 class="center-title">What we do</h2>
                        <div class="center-border"></div>
                    </div>
                </div><!--row end-->
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <ul class="row list-unstyled services-list">
                            <li class="col-sm-6 clearfix scrollReveal sr-bottom">
                                <i class="ion-ios-briefcase-outline"></i>
                                <div class="content">
                                    <h4>Financial Management</h4>
                                    <p>
                                       Chart of Accounts and Journals
                                       <br>Ordering and Invoicing</br>
Dimensional Analysis
Posting Groups

                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 clearfix  scrollReveal sr-bottom sr-delay-1">
                                <i class="ion-images"></i>
                                <div class="content">
                                    <h4>Project Management</h4>
                                    <p>
                                        Task and Finance management

Manage job costs and risks
Copy projects to save setup time
Analyze project performance
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 clearfix scrollReveal sr-bottom sr-delay-2">
                                <i class="ion-bag"></i>
                                <div class="content">
                                    <h4>Smart Selling</h4>
                                    <p>
                                        Cash to Quote through Outlook
Contact Management
Sales Invoicing
Opportunity Management
Campaigns and Segmentation
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 clearfix scrollReveal sr-bottom sr-delay-3">
                                <i class="ion-hammer"></i>
                                <div class="content">
                                    <h4>Understanding Your Business</h4>
                                    <p>
                                      We help to empower Microsoft Dynamics  developers with tools that help them become more effective in delievering their clients.

                                    </p>
                                </div>
                            </li><!--service col end with li-->
                           
                        </ul><!--service list end-->
                    </div>
                </div><!--row end-->
                <hr>
                <div class="space-60"></div>
                <div class="text-center scrollReveal sr-bottom">
                    <h1 class="margin-b-20">Want to work with us</h1>
                    <a href="#pricing-section" id="our_port" class="btn btn-dark-border btn-lg">Our Services</a>
                </div>
            </div>
        </section>
        <!--end services-->

        <div class="space-70"></div>

        <!-- Parallax -->
        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/images/bg-3.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <div class="testi-slider">
                    <ul class="slides">
                        <li>
                            <i class="ion-quote"></i>
                            <p>
                                " Technology is best when it brings people together. "
                            </p>
                            
                        </li><!--li-->
                        
                    </ul>
                </div>
            </div><!--parallax text-->
        </div>
        <!-- End Parallax -->


        <!--pricing start-->
       

    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h2 class="section-title mb-3">Pricing</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$50</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>All feautres for 24/hrs.</li>
                <li>possible to open table [within 2 days]
  but not further.</li>
                <li>One user per sign up.</li>
                <li>Can use all version with limited access</li>
               
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Business central.</li>
                <li>Customer service within a week.</li>
                <li>Can’t use local.</li>
                <li>One user per sign up.</li>
                <li>Can use all version for 24 hr.</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Business central</li>
               <li>Customer service within a day.</li>
                <li>Can use local.</li>
                <li>10 users per sign up.</li>
                <li>Can use all versions.</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        

      </div>
    </section>

        <!--pricing end-->

        <div class="space-50"></div>




        <!--contact start-->
        <section id="contact" class="contact-section">
            <div class="space-100"></div>
            <div class="container">
                <div class="row margin-b-50">
                    <div class="col-sm-12 scrollReveal sr-bottom">
                        <h2 class="center-title">Say Hello!</h2>
                        <div class="center-border"></div>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-sm-6 margin-b-30 scrollReveal sr-left">
                        <form method="post" action="#" class="amaze-contact">
                            <div class="row">
                                <div class="col-sm-12">                                 
                                    <div class=" margin-b-20">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                    </div>
                                    <div class=" margin-b-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                    </div>                          
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" class="form-control margin-b-20" rows="5" placeholder="Message...."></textarea>                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="data-status"></div> <!-- data submit status -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-lg btn-skin-border btn-block margin-b-20">Send Message</button>
                                </div>
                            </div>
                        </form><!--form end-->
                    </div><!--form col end-->
                    <div class="col-sm-5 col-sm-offset-1 scrollReveal sr-right sr-delay-1">
                        <div class="contact-details">
                            <p>Motochini ApS,H.C. Orsteds Vej 50 C,1879 <br> Fredericksberg<br>45 25 70 97 28</p>
                            <p class="lead"><a href="#">contact@motochini.com</a></p>
                            <ul class="list-inline">
              
                                <li><a href="https://www.linkedin.com/company/motochini/about/"><i class="ion-social-linkedin-outline"></i></a></li>
                                <li><a  style="margin-top:10px" href="https://shlimon.com/motochini-aps/"><span class="iconify" data-icon="bi:globe"></span></a></li>
                            </ul>
                        </div><!--contact detail-->
                    </div><!--contact detail col end-->
                </div>
            </div>
            <div class="space-40"></div>
            <!-- Google Map -->
           
            <!-- End Google Map -->
        </section>
        <!--contact end-->


        <!--footer start-->
  <footer class="site-footer">
      <div class="container">
        <div class="row">

              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php" class="smoothscroll">Home</a></li>
                  <li><a href="about.php" class="smoothscroll">About</a></li>
                  <li><a href="services.php" class="smoothscroll">Services</a></li>

                </ul>
              </div>
         
  
        </div>

      </div>
    </footer>
        <!--footer end-->
        

        <!--modal of video-->
        <div class="modal video-modal fade" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="video-popup">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-close"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video width="auto" height="auto" controls="">
  <source src="../images/video/Explainer.mp4" type="video/mp4">
  <source src="../images/video/Explainer.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
                        </div>
                    </div><!--modal body-->
                </div><!--modal content-->
            </div><!--modal dialog-->
        </div>
        <!--end the modal of video-->

         <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
        <!--back to top end-->

        <!-- jQuery plugins-->
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/js/jquery-migrate.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bower_components/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/modernizr.custom.97074.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/bower_components/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="assets/dzsparallaxer/dzsparallaxer.js" type="text/javascript"></script>      
        <script src="assets/js/template-custom.js" type="text/javascript"></script>
        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="assets/js/cube-awesome-work.js" type="text/javascript"></script>
        <script src="assets/js/newsletter-custom.js" type="text/javascript"></script>  
        <script src="assets/js/scroll-reavel-custom.js"></script>
        <!-- Google Map Script -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/google-map.js"></script>
        <script src="assets/js/contact.js" type="text/javascript"></script>
        
        
        
        
    </body>


</html>

<?php 
}
?>
