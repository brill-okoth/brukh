<?php include("../path.php");  ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Admin-Topics</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
      <!--INKS-->
      <?php include(ROOT_PATH . "/app/includes/adminLinks.php") ?>
<!--INCLUDE NAVBAR-->
<?php include(ROOT_PATH . "/app/includes/adminNavbar.php") ?>

  <!--STYLESHEET-->
  <link rel="stylesheet" href="../forms/style.css">

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
            <a href="create-topic.php" class="btn btn-success"> Add Topic </a>
            <a href="topics.php" class="btn btn-success">Manage Topic</a>
            </div>
            

            <div class="content" >
            <h2 class="page-title"> Manage Post</h2>
            <table>

            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    <thead>
                <th> SN</th>
                    <th> Name</th>   
                    <th>Author</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>

                <?php foreach ($topics as $key => $topic): ?>
                    <tr>
                    <td> <?php echo $key + 1; ?> </td> 
                     <td><?php echo $topic['name']; ?></td>
                    <td> <a href="editTopic.php?id=<?php echo $topic['id']; ?>"class="edit">edit</a></td>
                     <td> <a href="topics.php?del_id=<?php echo $topic['id']; ?>"class="delete">delete</a></td>   
                    </tr> 
                <?php endforeach;?>

                
                   
                      
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
