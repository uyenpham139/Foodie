<!DOCTYPE html>
<html lang="en">

<?php
    include_once 'includes/menusearch.inc.php';
    // $searchItems = $_SESSION['searchItems']; 
    if (empty($searchItems)) {
        echo "<script>console.log('No items found.');</script>";
    }
    else {
        echo "<script>console.log('Items:', " . json_encode($searchItems) . ");</script>";
    }
?>  

<body>
    <!-- Main -->
    <main>
        <section class="our-menu section bg-light repeat-img py-5" id="menu">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <h2 class="section-title pt-5 mb-3">Our Menu</h2>
                                <h3 class="h3-title">Wake up early, <span>eat fresh & healthy</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="menu-tab-wp">
                        <div class="row">
                            <div class="col-lg-12 m-auto">
                                <div class="menu-tab text-center">
                                    <ul class="filters">
                                        <div class="filter-active"></div>
                                        <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                            All
                                        </li>
                                        <li class="filter" data-filter=".breakfast">
                                            Breakfast
                                        </li>
                                        <li class="filter" data-filter=".lunch">
                                            Lunch
                                        </li>
                                        <li class="filter" data-filter=".dinner">
                                            Dinner
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-list-row">
                        <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                            <?php foreach ($searchItems as $item): ?>
                            <?php 
                                // Set category classes dynamically
                                $categoryClass = strtolower(str_replace(' ', '-', $item['category']));
                            ?>
                            <div class="col-lg-4 col-sm-6 dish-box-wp <?= $categoryClass ?>" data-cat="<?= $categoryClass ?>">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/<?= $item['image'] ?>" alt="<?= $item['item_name'] ?>" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        <!-- You can add dynamic ratings if needed -->
                                        <?= $item['rating'] ?> <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title"><?= $item['item_name'] ?></h3>
                                        <p><?= $item['description'] ?></p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b><?= number_format($item['price'], 0, ',', '.') ?> vnd</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
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
        </section>
    </main>

    <!-- Javascript -->
    <script src="index.js"></script>
    <script src="modal.js"></script>
</body>

</html>