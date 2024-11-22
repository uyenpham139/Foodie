<?php
class MenuController extends Product {
    private $type;

    public function __construct($type){
        $this->type = $type;
    }

    // This method fetches the menu items and passes them to the view
    public function displayMenu() {
        // Fetch the menu items from the model
        return $this->getMenuItems($this->type);
    }
}
