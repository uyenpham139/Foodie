<?php

$searchItems = [];
function getSearchItems() {
    $items = [];
    if (isset($_GET['submit'])) {

        // Grabbing the data
        $item = $_GET["search"];
    
        // Instantiate Login class
        include_once "../models/dbh.model.php";
        include_once "../models/product.model.php";
        include_once "../controllers/backend/searchcontroller.contr.php";
        
        $searchItem = new SearchController($item);
        $items = $searchItem->searchItems();
    } 
    return $items;
}

$searchItems = getSearchItems();

// echo '<table>';
// echo '<thead>
//     <tr>
//         <th>Dish</th>
//         <th>Description</th>
//         <th>Category</th>
//         <th>Price</th>
//     </tr>
// </thead>';
// echo '<tbody>';

// // Loop through $productData and display each item in a table row
// foreach ($searchItems as $item) {
//     echo '<tr>
//         <td>' . htmlspecialchars($item['item_name']) . '</td>
//         <td>' . htmlspecialchars($item['description']) . '</td>
//         <td>' . htmlspecialchars($item['category']) . '</td>
//         <td>' . htmlspecialchars(number_format($item['price'], 0, ',', '.')) . ' vnd</td>
//     </tr>';
// }

$errorMessage = "";
if (isset($_SESSION['product_not_found']) && $_SESSION['product_not_found']) {
    $errorMessage = "Product not found";

    $_SESSION['product_not_found'] = false;
    unset($_SESSION['product_not_found']);
    // Redirect with an error parameter
    echo '<script>window.location.href = "../index.php?page=menu-search&error=product_not_found";</script>';
} else {
    $searchItems = getSearchItems();
    echo '<script>window.location.href = "../index.php?page=menu-search&success=product_found";</script>';
}
?>