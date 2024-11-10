<?php
class MenuController extends Product {
    // This method fetches the menu items and passes them to the view
    public function displayMenu() {
        // Fetch the menu items from the model
        return $this->getMenuItems();
    }
}
