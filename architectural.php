<!DOCTYPE html>
<html lang="zxx">
 
<head>
    <meta charset="utf-8">
    <title>Concreate</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="css/datepicker.min.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="bg-preloader-white-bot"></div>
    <div class="preloader">
        <div class="prtf-st-loader1">
            <div class="prtf-outline">
                <div class="prtf-line-1"></div>
                <div class="prtf-line-2"></div>
                <div class="prtf-line-3"></div>
                <div class="prtf-line-4"></div>
            </div>        
        </div>
    </div>
    <!-- preloader end -->
    
   <!-- content wraper -->
   <div class="content-wrapper">
    <!-- Header starts --->
	<?php include('header.php');?>
	<!-- Header ends --->
      
      <!--  breadcumb --> 
      <section aria-label="breadcumb" class="no-padding crumbs">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="crumbs">Projects</h1>
                <ul id="crumbs">
                  <li><a href="#">home</a></li>
                  <li>Architectural Services</li>
                </ul>
              </div>
          </div>
        </div>
      </section>
      <!--  breadcumb end --> 
	  <!-- projects-detail filter-wrapper starts----->
		<div class="filter-wraper no-gutter m-5-hor">
                <div class="col-md-12">
                <ul id="filter-porto">
                  <li class="filt-projects-w selected" data-project="*">Presentation Drawings
                  </li>
                  
                  <li class="filt-projects-w" data-project=".tren">CAD Conversion
                  </li>

                  <li class="filt-projects-w" data-project=".web">2D Drafting
                  </li>

                  <li class="filt-projects-w" data-project=".psd">3D Rendering
                  </li>
				  
				  <li class="filt-projects-w" data-project=".psd">Revit Services
                  </li>

                  <li class="filt-projects-w" data-project=".art">Sketchup
                  </li>
                </ul>
                </div>
                <div class="col-md-4">
                <ul id="filter-hide">
                  <li class="filtter-icon"><i class="ti-layout-grid3-alt"></i>
                  </li>
                </ul>
                </div>
              </div>
	  <!-- projects-detail filter-wrapper ends----->
      <!--  projects detail filter-item starts --> 
		<div class="no-gutter m-5-hor" id="projects-wrap">
                    <div class="col-md-4 col-xs-12 w-gallery tren psd art">
                       <div class="gallery-grid">
                        <div class="hovereffect-color">
                        <img src="img/gallery/presentation.jpg" alt="img" class="img-responsive">
                        <div class="overlay">
                        <div class="v-align wrap">
                        <span class="icon">
                        <a class="big-youtube" href="https://www.youtube.com/watch?v=pK30kqxJu0g">
                        <i class="fa fa-search"></i>
                        </a> 
                        <a href="presentation-drawings.php">
                        <i class="fa fa-link"></i>
                        </a>
                        </span>
                        </div>
                        </div>
                        </div>
                       </div>
                    </div>

                    <div class="col-md-4 col-xs-12 w-gallery web">
                    <div class="gallery-grid">
                    <div class="hovereffect-color">
                    <img src="img/gallery/cad_conversion.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="vim-video" href="https://vimeo.com/123123">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                    </div>
                  
                    <div class="col-md-4 col-xs-12 w-gallery psd">
                    <div class="gallery-grid">
                    <div class="hovereffect-color">
                    <img src="img/gallery/2D_drafting.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="big-video" href="http://www.dailymotion.com/video/x612rc9">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                    </div>
                  
                    <div class="col-md-4 col-xs-12 w-gallery tren psd">
                    <div class="gallery-grid onStep" data-animation="fadeInUp" data-time="0">
                    <div class="hovereffect-color">
                    <img src="img/gallery/3D_rendering.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="big-youtube" href="https://www.youtube.com/watch?v=fafEHMnFe3g">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                  </div>

                    <div class="col-md-4 col-xs-12 w-gallery art">
                    <div class="gallery-grid onStep" data-animation="fadeInUp" data-time="0">
                    <div class="hovereffect-color">
                    <img src="img/gallery/revit.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="vim-video" href="https://vimeo.com/123123">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                  </div>

                    <div class="col-md-4 col-xs-12 w-gallery art">
                    <div class="gallery-grid onStep" data-animation="fadeInUp" data-time="0">
                    <div class="hovereffect-color">
                    <img src="img/gallery/sketchup.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="big-img-1" href="img/gallery/6.jpg">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                    </div>

                    
                    <!--<div class="col-md-4 col-xs-12 w-gallery psd">
                    <div class="gallery-grid onStep" data-animation="fadeInUp" data-time="0">
                    <div class="hovereffect-color">
                    <img src="img/gallery/3.jpg" alt="img" class="img-responsive">
                    <div class="overlay">
                      <div class="v-align wrap">
                      <span class="icon">
                      <a class="big-img-1" href="img/gallery/3.jpg">
                      <i class="fa fa-search"></i>
                      </a> 
                      <a href="projects-detail.html">
                      <i class="fa fa-link"></i>
                      </a>
                      </span>
                      </div>
                      </div>
                      </div>
                     </div>
                  </div>-->

                </div>
      <!--  projects detail filter-item end --> 

      <!-- footer starts -->
       <?php include('footer.php');?>
      <!-- footer end -->
      
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        &uarr;
      </div>   

              <!-- modal login -->
              <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Member Log In</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post">
                        <div class="form-group">
                          <label>User Name</label>
                          <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" required>         
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                        </div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">or Sign Up</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal login end -->

              <!-- modal registration -->
              <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Member Registration</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                        </div>
                        <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                        <div class="clearfix"></div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">or Log In</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal registration end -->      

     
    </div>
    <!-- content wraper end --> 
    
    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src='plugin/bootstrap-datepicker.min.js'></script>
    <script src="plugin/sticky.js"></script> 
    <!-- slider revolution  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>

</html>