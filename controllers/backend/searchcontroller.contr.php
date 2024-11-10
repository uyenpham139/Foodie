<?php
class SearchController extends Product{
    private $item;

    public function __construct($item) {
        $this->item = $item;
    }

    public function searchItems() {
        $productData =  $this->getProduct($this->item);
        return $productData;
    }
}