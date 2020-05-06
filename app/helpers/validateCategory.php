<?php

function validateCategory($category ){


    $errors = array();

    if (empty($category['name'])){
        array_push($errors, 'Category name is required');
    }

$existingCategory = selectOne('imagecategories', ['name' => $category['name'] ]);
    if (isset($existingCategory)) {
        if (isset($image['update-category']) && $existingCategory['id'] != $image['id']) {
            array_push($errors, 'Category already exist'); 
         }
     
         if (isset($image['add-category'])) {
            array_push($errors, 'Category already exist');
         }
    }
    return $errors;
}
    


