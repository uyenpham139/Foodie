<?php
// Instantiate Login class
include "models/dbh.model.php";
include "models/product.model.php";
include "controllers/backend/menucontroller.contr.php";

$menu = new MenuController();
// Running error handlers and user login
$menuItems = $menu->displayMenu();
?>