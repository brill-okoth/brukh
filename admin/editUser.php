<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/users.php" );
adminOnly();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Edit User</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
    <!--INKS-->
    <?php include(ROOT_PATH . "/app/includes/adminLinks.php"); ?>
<!--INCLUDE NAVBAR-->
<?php include(ROOT_PATH . "/app/includes/adminNavbar.php"); ?>

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
            <a href="create-user.php" class="btn btn-success"> Add User </a>
            <a href="users.php" class="btn btn-success">Manage User</a>
            </div>
           
           
            <div class="form">
           
        <!--LOGIN FORM START-->

        <h2 class="form-title"> Edit User</h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php");  ?>

         <form  action="editUser.php" method="post"enctype="multipart/form-data">
         

         <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div>
             <input type="text" name="username" value="<?php echo $username; ?>"  class="text-input" placeholder="Username" >
             </div>  
             <div>
             <input type="text" name="email" value="<?php echo $email; ?>" class="text-input" placeholder="Email" >
             </div>
             <div>
            <label> Image </lable>
            <input type="file" name="image" class="text-input">
          </div>
             <div>
              <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" placeholder="Password" >
             </div>
              <div>
              <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"  class="text-input" placeholder="Retype-Password" >
            </div>
                <div>
            <?php if (isset($admin) && $admin == 1): ?>
              <label>
                Admin  
              <input type="checkbox" name="admin" checked>
               </label>
            <?php else: ?>
              <label>
                Admin  
              <input type="checkbox" name="admin">
               </label>              
            <?php endif; ?>
          </div>   

               <div>
                  <button type="submit" name="update-user" class="btn btn-primary">Update user</button>
                  </div>
            </form>     
    
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  
            </div>
        <!--END OF ADMIN CONTENTS-->
        
        <!--ADMIN  PAGE WRAPPER-->
        
            <!-- /. WRAPPER  --> 

   <!--INCLUDE FOOTER-->
   <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>

        