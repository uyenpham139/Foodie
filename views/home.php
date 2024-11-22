<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_SESSION['product_not_found']) && $_SESSION['product_not_found']) {
    unset($_SESSION['product_not_found']); // Clear the session variable after displaying the modal
    ?>
    <script>
        $(document).ready(function() {
            $("#productNotFoundModal").modal("show");
        });
    </script>
    <?php
}
?>

<!-- Modal -->
<div class="modal fade" id="productNotFoundModal" tabindex="-1" aria-labelledby="productNotFoundLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productNotFoundLabel">Product Not Found</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>The product you're looking for could not be found.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<body>    
    <!-- Main -->
    <main>
        <section class="hero-section section py-5" id="home">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="hero-text col-12 col-lg-6">
                            <h1 class="title fw-bold">
                                <span>Vietnamese</span> Dishes: Discover a World of Flavors
                            </h1>
                            <p class="description pt-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Non a neque quod magnam consequuntur necessitatibus iusto, 
                                impedit expedita obcaecati, distinctio doloribus veniam eaque incidunt officia ex ullam nihil! Pariatur, fugiat.
                            </p>
                            <a href="index.php?page=menu" class="order-btn mt-5" type="button">Order Now</a>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="hero-img img-fluid d-flex justify-content-center">
                                <img src="assets/pho-1.jpg" class="hero-img" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-section section py-5" id="news-pro">
            <div class="container">
                <h2 class="news-title text-center pt-5 pb-5">
                    What's New
                </h2>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/bg-img.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/bg-img.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/bg-img.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>