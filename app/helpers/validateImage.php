<?php 



function validateImage($image){


    $errors = array();

    if (empty($image['title'])){
        array_push($errors, 'Title is required');
    }

    if (empty($image['description'])){
        array_push($errors, 'Description is required');
    }

    if (empty($image['category_id'])){
        array_push($errors, 'Please select a category');
    }

$existingImage = selectOne('images', ['title' => $image['title'] ]);
     if ($existingImage){
       if (isset($image['update-image']) && $existingImage['id'] != $image['id']) {
           array_push($errors, 'Image with that title already exist'); 
       }
       
       if (isset($image['add-image'])) {
           array_push($errors, 'Image with that title already exist');
       }
    }

    return $errors;
}

