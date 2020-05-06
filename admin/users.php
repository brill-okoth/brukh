<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/users.php" ); 
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Manage Users</title> 
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
                <div class="row">
                    <div class="col-md-12">
                
        <!-- ADMIN CONTENTS-->
       <!-- <div class="admin-content">-->
                        <div class="page-title"> Manage Topics</div>
                    
                        
        <div class="button-group">
            <a href="create-user.php" class="btn btn-success"> Add User</a>
            <a href="users.php" class="btn btn-success">Manage Users</a>
            </div>
            <div class="content" >
            <h2 class="page-title"> Manage Admin Users</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

            <table>
                <thead>
                <th> SN</th>
                    <th> Username</th>   
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>

               <?php foreach ($admin_users as $key => $user): ?>
                <tr>
                   <td><?php echo $key = 1; ?></td> 
                    <td><?php echo $user['username']; ?> </td> 
                    <td><?php echo $user['email']; ?></td>
                    <td> <a href="editUser.php?id=<?php echo $user['id']; ?>"class="edit">edit</a></td>
                    <td> <a href="users.php?delete_id=<?php echo $user['id']; ?>"class="delete">delete</a></td>
                </tr>   
               <?php endforeach; ?>

                  
                </tbody>
                
                </table>
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


        