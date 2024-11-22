<!DOCTYPE html>
<html lang="en">

<?php
    $item = [];
    if(isset($_SESSION['searchItems'])) {
        $item = $_SESSION['searchItems'];
    }
?>  

<body>
    <!-- Main -->
    <main>
        <section class="product section bg-light repeat-img py-5" id="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="index.php?page=home">Home -></a>
                        <span><?= isset($item['item_name']) ? $item['item_name'] : 'Item not found' ?></span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="row">
                        <div class="product-title col-lg-12 m-auto">
                            <!-- lay tu database -->
                            <h1></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-img col-lg-4 m-auto">
                            <!-- lay tu database -->
                            <img src="" alt=""> 
                        </div>

                        <div class="product-description col-lg-8">
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/modal.js"></script>
</body>

<?php if(!isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
}
?>
</html>