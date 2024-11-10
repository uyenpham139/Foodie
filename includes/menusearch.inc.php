<?php
$searchItems = [];
if (isset($_GET['searchsubmit'])) {
    // Grabbing the data from the search form
    $item = $_GET["search"];

    // Include necessary files
    include_once "../models/dbh.model.php";
    include_once "../models/product.model.php";
    include_once "../controllers/backend/searchcontroller.contr.php";
    
    // Instantiate SearchController
    $searchItem = new SearchController($item);
    $searchItems = $searchItem->searchItems();
} 
if(!isset($_SESSION["username"]))
    session_start(); 

if (empty($searchItems)) {
    // Set session variable to indicate product not found and redirect to menu page with an error
    $_SESSION['product_not_found'] = true;
    header("Location: ../index.php?page=menu&error=product_not_found");
    exit();
} else {
    $_SESSION['searchItems'] = $searchItems;
    header("Location: ../index.php?page=menu-search&success=product_found");
    exit();
}
?>
