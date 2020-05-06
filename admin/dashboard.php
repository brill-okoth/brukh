<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Dashboard</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  
  <?php include(ROOT_PATH . "/app/includes/favicon.php");?>
    <!--INKS-->
    <?php include(ROOT_PATH . "/app/includes/adminLinks.php") ?>
<!--INCLUDE NAVBAR-->
<?php include(ROOT_PATH . "/app/includes/adminNavbar.php") ?>

<link href="../assets/css/form.css" rel="stylesheet" />


        <!--PAGE WRAPPER-->
        <div id="page-wrapper">
        <!--//PAGE WRAPPER-->
            
        <!--inner page-->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                
        <!-- ADMIN CONTENTS-->
       <!-- <div class="admin-content">-->
                        
            <div class="content" >
            <h2 class="page-title">Dashboard</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


            </div>
            
            
        </div>
        
        <!--END OF ADMIN CONTENTS-->
        
        
        
        
        <!--ADMIN  PAGE WRAPPER-->
        </div>
        </div>
    </div>
    </div>
   
            <!-- /. WRAPPER  --> 

      <!--INCLUDE FOOTER-->
      <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>
