
<?php 

//$users = selectOne('users', ['admin' => 1]);
//dd($users);


?>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php'  ?>"><img src="img/brukh-header-logo.png" alt="" title=""></a>
            </div>

            <div class="header-right">

                <a href="../Admin/messages.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   
                   <?php if (isset($_SESSION['id'])): ?>
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/admin-brill.png" class="img-thumbnail" />

                            <div class="inner-text">
                               <?php echo $_SESSION['username']; ?>
                      
                                <!--<small>Last Login : 2 Weeks Ago </small>-->
                            </div>
                        </div>
                    </li>
                     <?php endif; ?>
                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>

                    <li><a href="users.php"><i class="fa fa-user-circle-o"></i>Manage Users</a></li>  
                    
                      <li><a href="posts.php"><i class="fa fa-external-link "></i>Manage Posts</a></li>  
                    
                      <li><a href="topics.php"><i class="fa fa-columns "></i>Manage Topics</a></li>
                    
                     <li><a href="notification.php"><i class="fa fa-bell "></i>Notifications</a></li>
                    
                     <li><a href="setings.php"><i class="fa fa-cog "></i> Other Settings</a> </li>
                    
                    <li> <a href="#"><i class="fa fa-envelope-o"></i>Mailing Centre<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             
            <li><a href="messages.php"><i class="fa fa-comments-o "></i>Messages</a> </li>
                           
                             <li> <a href="mails.php"><i class="fa fa-folder"></i>Mails</a></li>    
                        </ul> 
                    </li>
                         <li>
                        <a href="create-gallery.php"><i class="fa fa-file-image-o "></i>Manage Gallery</a>
                    </li> 
                     <li>
                        <a href="error.php"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                   
                    <li>
                        <a href="blank.php"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!--END OF NAVIGATION-->