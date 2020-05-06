
<?php include("path.php");
 include(ROOT_PATH . "/app/database/connect.php"); 
 include(ROOT_PATH . "/app/controllers/image-category.php");

 $images = array();
 $imagesTitle = 'Our Gallery';

 if (isset($_GET['c_id'])) {
    $images = getImagesByCategory_id($_GET['c_id']);
    $imagesTitle = "You searched for images under '" . $_GET['name'] . "'";
 } else if (isset($_POST['search-term'])) {
    $imagesTitle = "You searched for '" . $_POST['search-term'] . "'";
    $images = searchImages($_POST['search-term']);
 } else{
    $images = getPublishedImages();
 }

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gallery | BrukhMinistries</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <?php include(ROOT_PATH . "/app/includes/favicon.php");?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

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

  <!-- Responsive Stylesheet File -->
  <link href="assets/css/responsive.css" rel="stylesheet">
  <!-- Gallery Stylesheet File -->
  <link rel="stylesheet" href="assets/css/gallery.css">
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
                <a class="navbar-brand page-scroll sticky-logo" href="#">
                  <h1><span>...Pictures </span>speak</h1> 
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="gallery.php">gallery</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="blog.php">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="podcast.php">Podcast</a>
                  </li>
            
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

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                
                    <h2 class="title3">GALLERY</h2>
                    <img src="assets/img/blog-header.png" alt="" title=""> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->

 <!-- Start portfolio Area -->
 <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo $imagesTitle ?></h2>
          </div>
        </div>
      </div>
      <!-- search option start -->
          <form action="gallery.php" method="post">
                <div class="search-option">
                  <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </div>
              </form>
              <!-- search option end -->
        <!-- Start Portfolio -page -->      
      <div class="row">          

        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>

                <?php foreach ($imageCategories as $key =>  $category): ?>
                    <li><a href="<?php echo BASE_URL . '/gallery.php?c_id=' . $category['id'] . '&name=' . $category['name']; ?>" data-filter=".<?php echo BASE_URL . '/gallery.php?c_id=' . $category['id'] . '&name=' . $category['name']; ?>"><?php echo $category['name']; ?></a></li>
                <?php endforeach;?>

              </ul>
            </div>
          </div>
        </div>
         <div class="awesome-project-content">

          <?php foreach ($images as $image): ?>
     <!-- single-awesome-project start -->
     <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASE_URL . '/assets/img/gallery/' . $image['image'];  ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASE_URL . '/assets/img/gallery/' . $image['image'];  ?>">
                      <h4><?php echo $image['title']; ?></h4>
                      <span><?php echo $image['description']; ?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
<!-- INCLUDE-->
<?php include(ROOT_PATH . "/app/includes/footer.php");?>
<?php include( "app/includes/scripts.php");?>


</body>

</html>
