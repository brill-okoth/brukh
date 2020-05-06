<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/image-category.php");
adminOnly();
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
            <a href="create-gallery.php" class="btn btn-info">Manage Gallery</a>
            <a href="gallery-categories.php" class="btn btn-primary">Gallery Categories</a>
            <a href="create-imageCategory.php" class="btn btn-warning">Create Categories</a>
            </div>
            <h2 class="page-title">Manage Gallery Categories</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <table>
                <thead>
                <th> SN</th>
                    <th>Name</th>   
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    <?php foreach ($imageCategories as $key => $category): ?>

                     <tr>
                    <td><?php echo $key + 1; ?></td> 
                     <td><?php echo $category['name']; ?></td>
                     <td><?php echo $category['description']; ?></td>
                    <td> <a href="edit-categories.php?id=<?php echo $category['id']; ?>"class="edit">edit</a></td>
                     <td> <a href="gallery-categories.php?del_id=<?php echo $category['id']; ?>"class="delete">delete</a></td>
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
