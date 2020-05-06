<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/gallery-upload.php");
adminOnly();
$images = getPublishedImages();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Manage Gallery</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
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
            <div class="button-group">
            <a href="add-image.php" class="btn btn-success">Add Image</a>
            <a href="create-gallery.php" class="btn btn-primary">Manage Gallery</a>
            <a href="gallery-categories.php" class="btn btn-success">Gallery Categories</a>
            </div>
            
            <h2 class="page-title">Manage Gallery</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <table>
                <thead>
                <th> SN</th>
                    <th>Image Title</th>   
                    <th>Description</th>
                    <th>Uploaded By</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    <?php foreach ($images as $key => $image): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td> 
                     <td><?php echo $image['title']; ?></td>
                     <td><?php echo $image['description']; ?></td>
                    <td><?php echo $image['username']; ?></td>
                    <td> <a href="edit-image.php?id=<?php echo $image['id']; ?>"class="edit">edit</a></td>
                     <td> <a href="edit-image.php?delete_id=<?php echo $image['id']; ?>"class="delete">delete</a></td>

                     <?php if ($image['published']): ?>
                            <td> <a href="edit-image.php?published=0&p_id=<?php echo $image['id'] ?>"class="unpublish">unpublish</a></td> 
                     <?php else:?>
                         <td> <a href="edit-image.php?published=1&p_id=<?php echo $image['id'] ?>"class="publish">publish</a></td> 
                     <?php endif; ?>

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
