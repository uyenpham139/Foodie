<?php
    if(!isset($_SESSION["username"]))
        session_start(); 
    
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        define('localhost/foodie', '../');
        switch ($action) {
            case 'search-product':
                if (isset($_GET['keyword'])) {
                    $keyword = htmlspecialchars($_GET['keyword']); // Sanitize input
                    liveSearch($keyword);
                } else {
                    echo json_encode(["error" => "Keyword missing"]);
                }
                break;
        }
        exit();
    }

    function liveSearch($keyword) {
        include_once "../models/dbh.model.php";
        include_once "../models/product.model.php";
        include_once "../controllers/backend/searchcontroller.contr.php";

        $search = new SearchController($keyword);
        $searchData = $search->searchItems();
        $_SESSION['searchItems'] = $searchData;
        header('Content-Type: application/json'); // Set correct content type
        echo json_encode($searchData);
        exit(); // Ensure no further output
    }

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
    
        if($searchItem->emptyInput() == false) {
            header("Location: ../index.php?page=menu");
            exit();
        }
    
        $searchItems = $searchItem->searchItems();
    } 
    
    if (empty($searchItems)) {
        // Set session variable to indicate product not found and redirect to menu page with an error
        $_SESSION['product_not_found'] = true;
        header("Location: ../index.php?page=menu-search&error=product_not_found");
        exit();
    } else {
        $_SESSION['searchItems'] = $searchItems;
        header("Location: ../index.php?page=menu-search&success=product_found");
        exit();
    }
    ?>
