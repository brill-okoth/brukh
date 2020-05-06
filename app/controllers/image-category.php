<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateCategory.php");
include(ROOT_PATH . "/app/helpers/middleware.php");


$table = 'imageCategories';

$errors = array();
$id = '';
$name = '';
$description = '';

$imageCategories = selectAll($table);


if (isset($_POST['add-category'])) {
    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
    unset($_POST['add-category']);
    $category_id = create($table, $_POST);
    $_SESSION['message'] = 'Gallery category created successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/gallery-categories.php');
    exit();        
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }


}


if (isset($_GET['id'])) {
    $id = $_GET['id'] ;
    $category = selectOne($table, ['id' => $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Gallery category deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/gallery-categories.php');
    exit();    
}


if (isset($_POST['update-category'])) {
    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
    $id = $_POST['id'];
    unset($_POST['update-category'], $_POST['id']);
    $category_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Gallery category updated successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/gallery-categories.php');
    exit();

       } else {
        $name = $_POST['id'];   
        $name = $_POST['name'];
        $description = $_POST['description'];
       }

}

