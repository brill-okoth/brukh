<?php include("../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Edit Post</title> 
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
            <a href="create-post.php" class="btn btn-primary "> Add Post </a>
            <a href="posts.php" class="btn btn-success">Manage Posts</a>
            </div>

               <div class="form">
        
        <!--CREATE POST-->
         <h2 class="form-title"> Edit Post</h2>

         <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

          <form  action="editPost.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $id ?>">

         <div>
                    <label>Title </label>
                    </div>
                      <div>
                      <input type="text" name="title" value="<?php echo $title ?>" class="text-input" placeholder="Enter Title">
                    </div>

                     <div> <label> Body</label></div>

       <div> <textarea name="body" id="body"> <?php echo $body ?></textarea></div>

          <div>
            <label> Image </lable>
            <input type="file" name="image" class="text-input">
          </div>

          <div> <label> Topic </label> </div>
           <div>
               <select name="topic_id" class="text-input">
             <option value=""></option>
            <?php foreach ($topics as $key => $topic): ?>
                  <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                     <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
            <?php else:?>
                      <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
            <?php endif; ?>

           <?php endforeach; ?> 
           </select>
           </div> 
                 <?php if(empty($published) && $published == 0): ?>
                  
                  <div class = "ItemCheckbox">
                   <label>Publish<input type="checkbox" name="published">  </label>  
                  </div>
                 <?php else: ?>
                    <div class = "ItemCheckbox">
                   <label>Publish<input type="checkbox" name="published" checked>  </label>  </div>  
                    <?php endif;?>  
                    <div>
                    <button type="submit" name="update-post" class="btn btn-primary ">Update Topic</button>
                    </div>

                   </form>
            </div>
   
                 </div>
            <!-- /. WRAPPER  --> 

    
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   
   
    <!--INCLUDE FOOTER-->
    <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>

        