

<?php include("path.php"); 
 
 include(ROOT_PATH . "/app/controllers/topics.php");

  $posts = array();
  $postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "Posts under '" . $_GET['name'] . "'";
}

elseif (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";

  $posts = searchPosts($_POST['search-term']);
}
else {
  $posts = getPublishedPosts();
}
 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blogs | BrukhMinistries</title>
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
                  <h1><span>...The Gospel </span>of Christ</h1> 
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="blog.php">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="children.php">Children Ministry</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="podcast.php">Podcast</a>
                  </li>
               
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
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
                
                    <h2 class="title3">WELCOME TO</h2>
                    <img src="assets/img/blog-header.png" alt="" title=""> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">

              <!-- search option start -->
              <form action="blog.php" method="post">
                <div class="search-option">
                  <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </div>
              </form>
              <!-- search option end -->
            </div>

            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>    <?php echo $postsTitle ?>  </h4>
                <div class="recent-post">
                  <!-- start single post -->

                  <?php foreach($posts as $post): ?>              
                  <!-- start single post -->
                  <div class="recent-single-post">
                 <div class="post-img">
                <a href="blog-details.php?id=<?php echo $post['id']; ?>">
              <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];  ?>" alt="">
           </a>
        </div>
       <div class="pst-content">
    <p><a href="blog-details.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title'];?></a></p>
  </div>
</div> 
      <!-- End single post-->
           <?php endforeach; ?>
                    <!-- start single post -->
                  
                    <div class=""><a href="#"></a></div>  
										<div class=""></div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>

            <div class="single-blog-page">
              <div class="left-blog">
              <h4>Topics</h4>
                <ul> 
          <?php foreach ($topics as $key => $topic): ?>
                <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach;?>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#"><?php //echo date('F j, Y', strtotime($post['created_at'])); ?></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Love</a>
                    </li>
                    <li>
                      <a href="#">Ministry</a>
                    </li>
                    <li>
                      <a href="#">Biblical Sanity</a>
                    </li>
                    <li>
                      <a href="#">Book Review</a>
                    </li>
                    <li>
                      <a href="#">Christian Lifestyle</a>
                    </li>
                    <li>
                      <a href="#">Christ Crucified</a>
                    </li>
                    <li>
                      <a href="#">Grace</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

          <?php foreach($posts as $post): ?>
            
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog"> 
                <div class="single-blog-img">
                  <a href="blog-details.php">
											<img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];  ?>" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">11 comments</a>
										</span>
                  <span class="date-type">
                  <i class="fa fa-calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </span>
                    <span class="author-type">
                    <i class="fa fa-user"> <?php echo $post['username'];  ?></i>
                </span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="blog-details.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title'];  ?></a>
										</h4>
                  <p>
                   <?php echo html_entity_decode(substr($post['body'], 0, 200) . '...')  ?>
                  </p>
                </div>
                <span>
										<a href="blog-details.php?id=<?php echo $post['id']; ?>" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>

          <?php endforeach;  ?>
    
            <!-- End blog area -->
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>
<!-- Start contact Area -->
  <!--INCLUDE CONTACT AREA-->
    <?php include(ROOT_PATH . "/app/includes/bottom.php");?>
  <!--INCLUDE FOOTER-->
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
  <!--INCLUDE SCRIPTS-->
    <?php include( "app/includes/scripts.php");?>
 

</body>

</html>
