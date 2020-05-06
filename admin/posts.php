<?php include("../path.php");  ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
$posts = getPublishedPosts();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">  
    <title>Manage Posts</title> 
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
                        
        <div class="button-group">
            <a href="create-post.php" class="btn btn-success"> Add Post </a>
            <a href="posts.php" class="btn btn-success">Manage Posts</a>
            </div>
            <div class="content" >
            <h2 class="page-title"> Manage Post</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

            <table>
                <thead>
                <th> SN</th>
                    <th> Title</th>   
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>

                <?php foreach($posts as $key => $post): ?>
                     <tr>
                    <td><?php echo $key + 1; ?></td> 
                     <td><?php echo$post['title'] ?> </td>
                    <td><?php echo $post['username']; ?></td>
                    <td> <a href="editPost.php?id=<?php echo $post['id']; ?>"class="edit">edit</a></td>
                     <td> <a href="editPost.php?delete_id=<?php echo $post['id']; ?>"class="delete">delete</a></td>

                     <?php if ($post['published']): ?>
                            <td> <a href="editPost.php?published=0&p_id=<?php echo $post['id'] ?>"class="unpublish">unpublish</a></td> 
                     <?php else:?>
                         <td> <a href="editPost.php?published=1&p_id=<?php echo $post['id'] ?>"class="publish">publish</a></td> 
                     <?php endif; ?>
                       
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
