<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    //get updated from DB
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //FOR LATER
    //update category_id of posts that belong to this category to id of uncategorized category


    //delete category
    $query = "DELETE FROM categories WHERE id=$id LIMIT 1";
    $query = mysqli_query($connection, $query);
    $_SESSION['delete-category-success'] = "Category deleted successfully.";
}

header('location: ' . ROOT_URL . 'admin/manage-categories.php');
die();
