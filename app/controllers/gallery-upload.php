<?php 
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateImage.php");


$table = 'images';


$imageCategories = selectAll('imageCategories');
$images = selectAll($table);
 
$errors = array(); 
    $id = "";
    $title = "";
    $description = "";
    $category_id = "";
    $published = "";

    if (isset($_GET['delete_id'])) {
       $count = delete($table, $_GET['delete_id']);
       $_SESSION['message'] = "Image deleted successfully";
       $_SESSION['type'] = "success";
       header("location: " . BASE_URL . "/admin/create-gallery.php");  
       exit();
    }
 
    if (isset($_GET['published']) && isset($_GET['p_id'])) {
      adminOnly();
      $published = $_GET['published'];
      $p_id = $_GET['p_id'];
      //update published field
      $count = update($table, $p_id, ['published' => $published]);
  
      $_SESSION['message'] = "Image publish state changed";
      $_SESSION['type'] = "success";
     header("location: " . BASE_URL . "/admin/create-gallery.php");
     exit();
      
  }

    if (isset($_GET['id'])) {
      $image = selectOne($table, ['id' => $_GET['id']]);

      $id = $image['id'];
      $title = $image['title'];
      $description = $image['description'];
      $category_id = $image['category_id'];
      $published = $image['published'];
    }


if (isset($_POST['add-image'])) {
  $errors = validateImage($_POST);
   
  if (!empty($_FILES['image'] ['name'])) {
    $image_name = time() . '_' . $_FILES['image'] ['name'] ;
    $destination = ROOT_PATH . "/assets/img/gallery/" . $image_name;

     $result = move_uploaded_file($_FILES['image'] ['tmp_name'], $destination);

     if ($result) {
        $_POST['image'] = $image_name;
     } else {
        array_push($errors, "Failed to upload image");
     }

  } else {
    array_push($errors, "Image required");
  }

  if (count($errors) == 0) {
     unset($_POST['add-image']) ;
   $_POST['user_id'] = $_SESSION['id'];
   $_POST['published'] = isset($_POST['published']) ? 1 : 0 ;
   $_POST['description'] = htmlentities($_POST['description']);
    
  $image_id = create($table, $_POST);
  $_SESSION['message'] = "Image uploaded successfully";
  $_SESSION['type'] = "success";
  header("location: " . BASE_URL . "/admin/create-gallery.php");  
  exit();
  } else {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $published = isset($_POST['published']) ? 1 : 0 ;
 }
}

if (isset($_POST['update-image'])) {
   $errors = validateImage($_POST);

   if (!empty($_FILES['image'] ['name'])) {
    $image_name = time() . '_' . $_FILES['image'] ['name'] ;
    $destination = ROOT_PATH . "/assets/img/gallery/" . $image_name;

     $result = move_uploaded_file($_FILES['image'] ['tmp_name'], $destination);

     if ($result) {
        $_POST['image'] = $image_name;
     } else {
        array_push($errors, "Failed to upload image");
     }

  } else {
    array_push($errors, "Image required");
  }

  if (count($errors) == 0) {
  $id = $_POST['id'];
  unset($_POST['update-image'], $_POST['id']) ;
  $_POST['user_id'] = $_SESSION['id'];
  $_POST['published'] = isset($_POST['published']) ? 1 : 0 ;
  $_POST['description'] = htmlentities($_POST['description']);

 $image_id = update($table, $id, $_POST);
 $_SESSION['message'] = "Image updated successfully";
 $_SESSION['type'] = "success";
 header("location: " . BASE_URL . "/admin/create-gallery.php");  
 } else {
   $title = $_POST['title'];
   $description = $_POST['description'];
   $category_id = $_POST['category_id'];
   $published = isset($_POST['published']) ? 1 : 0 ;
 }
}