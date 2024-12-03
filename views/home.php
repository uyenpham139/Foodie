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

<body>    
    <!-- Main -->
    <main class="homepage">
        <section class="hero-section section py-4" id="home">
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

        <section class="news-section section py-4" id="news-pro">
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

        <section class="contact section py-5" id="contact">
            <div class="container">
                <h2 class="contact-section-title text-center pt-5 pb-5">
                    Contact
                </h2>
                <div class="contact-box">
                    <div class="item">
                        <div class="contact-info d-flex">
                            <h1 class="first-text">Let's get in touch</h2>
                            <div class="social-links">
                                <span class="second-text">Connect with us:</span>
                                <ul class="social-media">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="submit-form">
                            <h4 class="third-text text">Contact Us</h4>
                            <form action="">
                                <div class="input-box">
                                    <input type="text" class="input" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-box">
                                    <input type="email" class="input" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-box">
                                    <input type="tel" class="input" required>
                                    <label for="phone-number">Phone</label>
                                </div>
                                <div class="input-box">
                                    <textarea name="" class="input" required ="message" cols="30" rows="10"></textarea>
                                    <label for="text-area">Message</label>
                                </div>
                                <input type="submit" class="submit-btn" value="Submit">
                            </form>
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
</html>