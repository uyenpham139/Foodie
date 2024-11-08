<?php
if(isset($_GET['submit'])) {

    // Grabbing the data
    $item = $_GET["search"];

    // Instantiate Login class
    include "../models/dbh.model.php";
    include "../models/product.model.php";
    include "../controllers/backend/searchcontroller.contr.php";
    
    $searchItem = new SearchController($item);
    echo 'Search controller';
    // Running error handlers and user login
    $searchItem->searchItems($item);
    echo 'Finish searching';

    // Going back to front page
    header("location: ../index.php");
}

?>