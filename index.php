

<?php include("path.php"); 
 include(ROOT_PATH . "/app/database/db.php"); 
 //include(ROOT_PATH . "/app/controllers/posts.php");
 $posts = getPublishedPosts();

 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Brukh Ministries</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <?php include(ROOT_PATH . "/app/includes/favicon.php");?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <script src="https://kit.fontawesome.com/de41e2bbef.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="assets/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!--<link href="forms/style.css" rel="stylesheet">-->

  <!-- Responsive Stylesheet File -->
  <link href="assets/css/responsive.css" rel="stylesheet">

  <link href="assets/css/error.css" rel="stylesheet">

<!--<link  rel="stylesheet"href="forms/style.css">-->
<link  rel="stylesheet"href="assets/css/slider.css">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="<?php echo BASE_URL . '/index.php'?>">
                 <img src="assets/img/icons/brukh-header-logo.png" alt="" title=""> 
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="gallery.php">Gallery</a>
                  </li>

                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li> <a class="page-scroll" href="blog.php">Blog</a></li>
                      <li><a href="children.php" >Kids Corner</a></li>
                      <!--<li><a href="podcast.php" >Our Podcast</a></li>-->
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                     </li>
                        <?php if (isset($_SESSION['id'])): ?>
                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> 
                             <?php echo $_SESSION['username']; ?>
                             <span class="caret"></span></a>
                           <ul class="dropdown-menu" role="menu"> 
                        <?php if($_SESSION['admin']): ?>
                      <li><a href="<?php echo BASE_URL . '/admin/dashboard.php'?>" >Dashboard</a></li>
                     <?php endif; ?>                    
                   <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="">Logout</a></li>
                     </ul> 
                      </li>
                        <?php else: ?>
                           <li><a href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a></li>
                              <li><a href="<?php echo BASE_URL . '/login.php'?>">Login</a></li>
                                 <?php endif; ?> 
                              </ul>
                           </div>
              <!-- navbar-collapse -->
                        </nav>
            <!-- END: Navigation -->
                  </div>
               </div>
            </div>
        </div>
    <!-- header-area end -->
     </header>
  <!-- header end -->
  <?php include(ROOT_PATH . "/app/includes/messages.php");?>
 
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">

    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        
        <img src="assets/img/slider/slider1.png" alt="" title="#slider-direction-1" />
        <img src="assets/img/slider/slider2.png" alt="" title="#slider-direction-2" />
        <img src="assets/img/slider/slider3.png" alt="" title="#slider-direction-3" />
      </div>
 
      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Welcome to </h2>
                    
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Brukh ministries</h1>
                   
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="blog.php">See Articles </a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"> A Vivid Christian living </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">AGAPE LOVE</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="blog.php">See articles</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Musical Art</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">For skillful worship</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="blog.php">See Articles</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Brukh Ministries</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="assets/img/about/1.png" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">The Art Ministry</h4>
              </a>
              <p>
                This is a ministry focused on giving the daily lifestyle a different godly and sain approach with the simplicity of pen and paper. We put up articles focusing on helping live healthy christian life full of peace and joy of our Lord Jesus Christ cutting through:
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Love
                </li>
                <li>
                  <i class="fa fa-check"></i> Ministry
                </li>
                <li>
                  <i class="fa fa-check"></i> Biblical Saity
                </li>
                <li>
                  <i class="fa fa-check"></i> Christian Lifestyle
                </li>
                <li>
                  <i class="fa fa-check"></i> Book Reviews
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Faq area start -->
  <div class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Faq Question</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                        <span class="acc-icons"></span>Getting informations informations for articles.
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                      Our articles are results of both personal research and public participation through the website comments and social media contributions.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                <span class="acc-icons"></span> Frequency of Posting Articles.
											</a>
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      Currently, we posts articles every Monday at 8am. Soon we shall launch a daily channel where different authors will have chances to share on our website.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                <span class="acc-icons"></span>Other Ministry involvements
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p>
                      We are involved in many other ministries including, children ministry, worship ministry and First Love Ministry that cares for the needy.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check4">
                       <span class="acc-icons"></span>Why major on writing
											</a>
										</h4>
                </div>
                <div id="check4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                     We believe that this generation is an inteligent one. A generation that has the advantage of technology at the door step. This makes it easier to reach the m through social media sharings.
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Mission</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Vision</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab">Success</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Reach-out</h4>
                  <p>
                    Making the Gospel easily available for easy reach.
                  </p>
                  <p>
                    Using social media, we are able to teach, build, mentor and train members for the glory of God.
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Church-Growth</h4>
                  <p>
                   Utilize all available tech-links to spread the Gospel and be able to change swiftly with the fast-upgrading technology.
                  </p>
                  <p>
                    Art is wide, being able to cover wide ranges of it and even be able to merge several art elements as tools of evangelism.
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Success</h4>
                  <p>
                    By the grace of God, we have been able to reach out to many youths through the Monday articles. We are happy to get positive feedbacks and testimonies. All the glory to God.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Welcome To Brukh Ministries</h2>
                <p>
                  Subscribe to to receive updates and articles through your email the easy way
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  <!--INCLUDE TEAM-->
  <?php include(ROOT_PATH . "/app/includes/team.php");?>
  <!-- End Team Area -->

  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="assets/img/about/2.png" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>Join us Today</h2>
        <h5>Ready to be used of God in the art Ministry?</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <!--<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">-->
        <!-- Start Portfolio -page -->
        <!--<div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Latest Books</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Children Ministry</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Partners</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">-->
          <!-- single-awesome-project start -->
         <!-- <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
         <!-- <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
         <!-- <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
         <!-- <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <!--<div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <!--<div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- single-awesome-project end -->
        <!--</div>
      </div>
    </div>
  </div>-->
  <!-- awesome-portfolio end -->


  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Jesus said to him, " You shall love the LORD your God with all your heart, with all your soul, and with all your mind. This is the FIRST and GREAT commandment"
                    </p>
                    <h6>Matthew 22 : 37-38</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      But God demonstrates His own love toward us, in that while we were still sinners, Christ died for us
                    </p>
                    <h6>Romans 5 : 8</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      "...Go therefore and make disciples of all the nations, baptizing them in the name of the Father, and of the Son, and of the Holy Spirit, teaching them to observe all things that I have commanded you; and lo, I am with you always, even to the end of the age" Amen
                    </p>
                    <h6>Matthew 28 : 19-20</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
<div class="page-wrapper">

<!--Post Slider-->
<div class="post-slider">
<h2 class="slider-title">Trending Posts</h2>
<i class="fas fa-chevron-left prev"></i>
<i class="fas fa-chevron-right next"></i>

<div class="post-wrapper">

<?php foreach ($posts as $post): ?>

  <div class="post">
  <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];  ?>" alt="" class="slider-image">
  <div class="post-info">
    <h5><a href="blog-details.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title'];  ?></a></h5>
    <i class="fa fa-user">  <?php echo $post['username']; ?></i>
    &nbsp;
    <i class="fa fa-calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
    </div>
</div>
<?php endforeach; ?>
</div>         
<!--End Post Slider-->           
     </div>      
  <!-- End Page Wrapper -->   
    </div>    
   <!-- End Blog --> 

  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
        
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
 <!--INCLUDE CONTACT AREA-->
<?php include(ROOT_PATH . "/app/includes/bottom.php");?>
  <!--INCLUDE FOOTER-->
<?php include(ROOT_PATH . "/app/includes/footer.php");?>
  <!--INCLUDE SCRIPTS-->
<?php include( "app/includes/scripts.php");?>


</body>

</html>
