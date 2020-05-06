<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/gallery-upload.php");
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Edit Image</title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
    <!--INKS-->
    <?php include(ROOT_PATH . "/app/includes/adminLinks.php") ?>
<!--INCLUDE NAVBAR-->
<?php include(ROOT_PATH . "/app/includes/adminNavbar.php") ?>

<<!--link href="../assets/css/form.css" rel="stylesheet" />-->

<link rel="stylesheet" href="../assets/css/gallery.css">

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
            <a href="add-image.php" class="btn btn-success">Edit Image</a>
            <a href="create-gallery.php" class="btn btn-success">Manage Gallery</a>
            </div>
         <div>
         </div>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
            </div>      
        </div>  
        <!--END OF ADMIN CONTENTS-->
        <div class="form"> 
       <form action="edit-image.php" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $id ?>">
        <h2 class="form-title">Edit Image</h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

       
        <input type="text" name="title" value="<?php echo $title ?>" placeholder="Image title...">
        <input type="text" name="description" value="<?php echo $description ?>" placeholder="Image description...">
           
           <div> <h5>Category</h5>
               <select name="category_id" class="text-input">
             <option value=""></option>
             <?php foreach ($imageCategories as $key => $category): ?>

             <?php if (!empty($category_id) && $category_id == $category['id']): ?>
                 <option selected value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
             <?php else: ?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
             <?php endif; ?>
               
             <?php endforeach;  ?>    
           </select>
            </div>        
       <div>
         <?php if (empty($published) && $published == 0 ): ?>
       <label>Publish</label>
      <input type="checkbox" name="published">  
              <?php else: ?>
       <label>Publish</label>
      <input type="checkbox" name="published" checked> 
              <?php endif; ?>
      </div>
         <div>
            <label> Image </lable>
           <input type="file" name="image" class="text-input">
         </div>
      <button type="submit" name="update-image">UPDATE</button>
      </form>     
      </div>';



        
        
        <!--ADMIN  PAGE WRAPPER-->
        </div>
        </div>
    </div>
    </div>
   
            <!-- /. WRAPPER  --> 

      <!--INCLUDE FOOTER-->
      <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>
