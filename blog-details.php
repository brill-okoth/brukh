<?php include("path.php");

include(ROOT_PATH . "/app/controllers/posts.php");

//$posts = getPublishedPosts();


 if (isset($_GET['id'])) {
   $post = selectOne('posts', ['id' => $_GET['id']]);
   
 }
   //$topics = selectAll('topics');
  //$posts = selectAll('posts', ['published' =>1]);

?> 


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $post['title']; ?> | BrukhMinistries</title>
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

  <!-- HEADER INCLUDE -->

<?php include(ROOT_PATH . "/app/includes/header.php");?>

<!--// HEADER INCLUDE -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">More into </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
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
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit"><i class="fa fa-search"></i></button>                                 
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Popular Posts</h4>
                <div class="recent-post">

                <?php//foreach($posts as $post): ?>              
                  <!-- start single post -->
                 <!-- <div class="recent-single-post">
                 <div class="post-img">
                <a href="blog.php">
              <img src="<?php //echo BASE_URL . '/assets/img/' . $post['image'];  ?>" alt="">
           </a>
        </div>
       <div class="pst-content">
    <p><a href="blog-details.php?id=<?php //echo $post['id']; ?>"> <?php echo $post['title'];?></a></p>
  </div>
</div> -->
      <!-- End single post-->
           <?php //endforeach; ?>
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Topics</h4>
                <ul>        
                 <?php foreach ($topics as $topic): ?>
                <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach;?>   
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];  ?>" alt="" />
                </div>
                <div class="post-information">
                  <h2><?php echo $post['title']; ?></h2>
                  <div class="entry-meta">
                   <span class="author-meta"><i class="fa fa-user"></i> <a href="#"><?php echo $post['id']; ?></a></span>
                    <span><i class="fa fa-clock-o"></i> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
                  
                   <!-- <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>-->
                  </div>
                  <div class="entry-content">
                <?php echo html_entity_decode($post['body']); ?>
                  </div>
                </div>
              </article>
              <div class="clear"></div>
              <!--<div class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
                    <h3>6 comments</h3>
                  </div>
                  <div class="comments-list">
                    <ul>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">Brill</a></b>
																Post author
																<span class="post-time"> 5 May, 2020</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>God is Love and Love is God. He is the Alpha and Omega</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">admin</a></b>
																Post author
																<span class="post-time">March 9, 2020 at 5:25 pm </span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Thank you Brill for this reply. Truely God ia all-able and all-working</p>
                          </div>
                        </div>
                      </li>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="assets/img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">Ciko</a></b>
																Post author
																<span class="post-time">March 10, 2020 at 7:25 pm</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>The Lord is so awesome. Glory be to Him forevermore.  Thanks for this article Gita/p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="comment-respond">
                  <h3 class="comment-reply-title">Leave a Reply </h3>
                  <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Name *</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Email *</p>
                        <input type="email" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Website</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Website</p>
                        <textarea id="message-box" cols="30" rows="10"></textarea>
                        <input type="submit" value="Post Comment" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>-->
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
    <div class="clearfix"></div> 
      <!-- Start contact Area -->
      <?php include(ROOT_PATH . "/app/includes/bottom.php");?>
  <!--INCLUDE FOOTER-->
<?php include(ROOT_PATH . "/app/includes/footer.php");?>
  <!--INCLUDE SCRIPTS-->
<?php include( "app/includes/scripts.php");?>

</body>

</html>
