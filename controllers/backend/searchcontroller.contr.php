<?php
class SearchController extends Product{
    private $item;

    public function __construct($item) {
        $this->item = $item;
    }

    public function emptyInput() {
        // Check if these inputs are empty
        if(empty($this->item)) {
            return false;
        }
        return true;
    }

    public function searchItems($item) {
        $productData =  $this->getProduct($item);
        return $productData;
    }
    
    public function getSearchProduct($id) {
        $productData =  $this->getProductById($id);
        return $productData;
    }
}