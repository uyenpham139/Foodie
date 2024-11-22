<?php
// Instantiate Login class
include "models/dbh.model.php";
include "models/product.model.php";
include "controllers/backend/menucontroller.contr.php";

$type = '';
if(isset($_GET['page']) && $_GET['page'] === 'menu') {
    $type = isset($_GET['type']) ? $_GET['type'] : '';
}

$menu = new MenuController($type);
// Running error handlers and user login
$menuItems = $menu->displayMenu();
?>