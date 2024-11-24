<?php
include_once "models/dbh.model.php";
include_once "models/product.model.php";
include_once "controllers/backend/searchcontroller.contr.php";

include_once "models/reviews.model.php";
include_once "controllers/backend/reviewcontroller.contr.php";

$productId;
// Check if 'product-id' is passed in the URL
if (isset($_GET['product-id'])) {
    $productId = intval($_GET['product-id']); 
} 

$search = new SearchController(Null); 
$product = $search->getSearchProduct($productId); 

$reviewController = new ReviewController();
$numReview = $reviewController->numReviews($productId);
$reviewsWithUserInfo = $reviewController->userInfoByReviews($productId);
$ratingCount = $reviewController->ratingCount($productId);

echo "<script>const ratingCounts = " . json_encode($ratingCount) . ";</script>";
echo "<script>const reviewsWithUserInfo = " . json_encode($reviewsWithUserInfo) . ";</script>";
?>