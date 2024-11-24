<!DOCTYPE html>
<html lang="en">

<?php
    $searchItems = [];
    if(isset($_SESSION['searchItems'])) {
        $searchItems = $_SESSION['searchItems'];
    }
?>  

<body>
    <!-- Main -->
    <main>
        <section class="menu section bg-light repeat-img py-5" id="menu">
            <div class="sec-wp">
                <div class="container-fluid">
                    <div class="header-section container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title mb-5">
                                    <div class="navigate text-center pt-5 mb-3">
                                        <a href="index.php?page=home">Home ></a><span class="current"> Menu</span>
                                    </div>
                                    <h2 class="section-title text-center pt-3 mb-3">Our Menu</h2>
                                    <h3 class="h3-title text-center">Wake up early, <span>eat fresh & healthy</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-section container">
                    <div class="wrapper">
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
                                            <li class="filter" data-filter="all">
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
                        <div class="menu-list-row">
                            <div class="menu-dish row g-xxl-5 bydefault_show" id="menu-dish">
                                <?php foreach ($searchItems as $item): ?>
                                <?php 
                                    // Set category classes dynamically
                                    $categoryClass = strtolower(str_replace(' ', '-', $item['category']));
                                ?>
                                <div class="col-lg-4 col-sm-6 dish-box-wp <?= $categoryClass ?>" data-cat="<?= $categoryClass ?>">
                                    <div class="dish-box text-center" data-id="<?= $item['menu_id'] ?>">
                                        <div class="dish-img">
                                            <img src="assets/<?= $item['image'] ?>" alt="<?= $item['item_name'] ?>" width="100%" height="100%">
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title"><?= $item['item_name'] ?></h3>
                                            <div class="dish-rating">
                                                <?= $item['rating'] ?> <i class="star-icon fa-solid fa-star"></i>
                                            </div>
                                            <p class="category"><?= $item['category'] ?></p>
                                            <p class="description"><?= $item['description'] ?></p>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li class="price">
                                                    <b><?= number_format($item['price'], 0, ',', '.') ?> vnd</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        Add to cart
                                                        <i class="fa-solid fa-cart-shopping"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- MixItUp -->
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    
    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>
</body>

<?php if(!isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
}
?>
</html>