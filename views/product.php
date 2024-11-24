<!DOCTYPE html>
<html lang="en">

<?php
    include_once 'includes/product.inc.php';
    $stockQuantity = $product['stock_number'];
    $rating = $product['rating'];
?>  

<body>
    <!-- Main -->
    <main>
        <section class="product section bg-light repeat-img py-5" id="product">
            <div class="sec-wp">
                <div class="container-fluid">
                    <div class="header-section container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title  text-center mb-5">
                                    <div class="navigate col-lg-12">
                                        <a href="index.php?page=home">Home </a><span> ></span>
                                        <a href="index.php?page=menu">Menu </a>
                                        <span> ></span>
                                        <span class="current"><?= isset($product['item_name']) ? $product['item_name'] : 'Item not found' ?></span>
                                    </div>
                                    <h2 class="section-title text-center pt-3 mb-3">Our Menu</h2>
                                    <h3 class="h3-title text-center">Wake up early, <span>eat fresh & healthy</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body-section container">
                    <div class="menu-sidebar">
                        <div class="search row">
                            <form action="includes/menusearch.inc.php" class="searchForm form-inline" method="get">
                            <div class="form-group">
                                <input class="search-input form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                                <button class="search-btn btn " type="submit" name="searchsubmit" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                        </div>
                        <div class="type-filter row">
                            <div class="col-lg-12 m-auto">
                                <h3>All menu</h3>
                                <div class="menu-tab text-center">
                                    <ul class="filters">
                                        <div class="filter-active"></div>
                                        <li class="filter active" data-filter="all">
                                            All
                                        </li>
                                        <li class="filter" data-filter="breakfast">
                                            Breakfast
                                        </li>
                                        <li class="filter" data-filter="lunch">
                                            Lunch
                                        </li>
                                        <li class="filter" data-filter="dinner">
                                            Dinner
                                        </li>
                                        <li class="filter" data-filter="drinks">
                                            Drinks
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="price-filter row">
                            <div class="col-lg-12 m-auto">
                                <div class="menu-tab text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="row product-details">
                            <div class="product-img col-lg-5 m-auto">
                                <!-- lay tu database -->
                                <img src="assets/<?= $product['image'] ?>" alt="<?= $product['item_name'] ?>" width="100%" height="100%"> 
                            </div>
    
                            <div class="product-description col-lg-7">
                                <h1><?= isset($product['item_name']) ? $product['item_name'] : 'Item not found' ?></h1>
                                <div class="star-outer">
                                    <div class="star-inner"></div>
                                </div>
                                <span class="rating-no"><?= $product['rating'] ?></span>
                                
                                <p class="description"><?= $product['description'] ?></p>
                                <p class="category">Category: <span class="category-tag"><?= $product['category'] ?></span></p>
                                <div class="button">
                                    <div class="quantity-button">
                                        <span class="minus">-</span>
                                        <span class="num">0</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <p class="price">Price: <span> <?= $product['price'] ?> vnd</span></p>
                                </div>
                                <div class="add-cart-button">
                                    <a href="#">
                                        Add to cart
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="options col-lg-12 m-auto">
                                <a href="#" class="toggle-link active" data-target="description">Description</a>
                                <a href="#" class="toggle-link" data-target="reviews">Reviews</a>
                            </div><br>
                            <!-- Description -->
                            <div id="description-section" class="description col-lg-12 m-auto">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus eligendi quo dolorum esse amet facere officia? Vel quae unde necessitatibus, perspiciatis modi dicta atque cupiditate in nobis possimus consequuntur officia? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique facilis molestias debitis maxime accusamus est ipsa, quae, unde corrupti ullam quibusdam soluta beatae voluptatum eveniet cumque nemo voluptas, velit quam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit veniam modi molestias quidem fugiat! Similique quod, suscipit molestiae debitis alias officia cupiditate eaque nulla perferendis perspiciatis voluptas aut quis atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quam, laboriosam nihil voluptatibus ratione ullam possimus commodi! Harum sequi temporibus in explicabo maiores nulla illum facere exercitationem ea? Quos, minus!</p>
                            </div>
    
                            <!-- Reviews -->
                            <div id="reviews-section" class="reviews col-lg-12 m-auto" style="display: none;">
                                <div class="rating-box">
                                    <div class="rating-avg">
                                        <h2><?= $product['rating'] ?></h2>
                                        <div class="star-outer">
                                            <div class="star-inner"></div>
                                        </div>
                                        <p><?= $numReview['total_rows'] ?></p>
                                    </div>
                                    <div class="rating-progress">
                                        
                                    </div>
                                </div>
                                <div class="comments-section">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>
    <script>
        const stockQuantity = <?php echo $stockQuantity; ?>;
        const rating = <?php echo $rating; ?>;
        const ratingCount = ratingCounts;
    </script>
    <script src="js/productpage.js"></script>
</body>
</html>