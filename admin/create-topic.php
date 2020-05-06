<?php include("../path.php");  ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Add Topic</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
    <!--INKS-->
    <?php include(ROOT_PATH . "/app/includes/adminLinks.php") ?>
<!--INCLUDE NAVBAR-->
<?php include(ROOT_PATH . "/app/includes/adminNavbar.php") ?>

<link href="../assets/css/form.css" rel="stylesheet" />

        <!--END OF NAVIGATION-->
        
        <!--PAGE WRAPPER-->
        <div id="page-wrapper">
        <!--//PAGE WRAPPER-->
            
        <!--inner page-->
            <div id="page-inner">
        
                
        <!-- ADMIN CONTENTS-->
       <!-- <div class="admin-content">-->
                        
        <div class="button-group">
            <a href="create-topic.php" class="btn btn-primary "> Add Topic </a>
            <a href="topics.php" class="btn btn-success">Manage Topic</a>
            </div>

            <div class="form">
   
         <h2 class="page-title"> Create Topic</h2>  

         <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

         <form  action="create-topic.php" method="post">
                  <div>
                    <label>Name </label>
                    </div>
                      <div>
                      <input type="text" name="name" value="<?php echo $name?>" class="text-input" placeholder="Enter Topic Name">
                    </div>
                    <div> 
                    <label> Description</label>
                   </div>
                   <div>
                    <textarea name="description" id="body" value="<?php echo $description?>"></textarea>
               </div>
         <div> 
                    <button type="submit" name="add-topic"   class="btn btn-primary ">Add Topic</button>
                    </div>
                   </form>
            </div>
   
        <!--END OF ADMIN CONTENTS-->

        <!--ADMIN  PAGE WRAPPER-->
        </div>
        </div>
            <!-- /. WRAPPER  --> 
               <!--INCLUDE FOOTER-->
               <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>

        