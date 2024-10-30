<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Start Header/Navigation -->
    <header class="bg-header">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class=" brand-name navbar-brand me-auto" href="#home">
                    <img src="assets/logo.png" alt="" height="35x" width="35px" class="brand-logo d-inline-block align-text-top">
                    Foodie
                </a>
                
                <!-- Navigation -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="brand-name offcanvas-title" id="offcanvasNavbarLabel">
                            <img src="assets/logo.png" alt="" height="35x" width="35px" class="brand-logo d-inline-block align-text-top">
                            Foodie
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                    
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto mb-2 mb-md-0 pe-3">
                            <li class="nav-item">
                                <a class="nav-link home nav-btn mx-md-2" aria-current="page" href="index.php?page=home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="index.php?page=menu" class="nav-link menu nav-btn mx-md-2 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?page=menu&type=breakfast" class="dropdown-item">Breakfast</a></li>
                                    <li><a href="index.php?page=menu&type=breakfast" class="dropdown-item">Lunch</a></li>
                                    <li><a href="index.php?page=menu&type=breakfast" class="dropdown-item">Dinner</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a href="index.php?page=menu-drinks" class="dropdown-item">Drinks</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link about nav-btn mx-md-2" href="index.php?page=about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link contact nav-btn mx-md-2" href="index.php?page=contact">Contact</a>
                            </li>
                            <hr>
                            <?php
                                if(!isset($_SESSION["username"])){
                            ?>
                                <li class="nav-item">
                                    <a href="index.php?page=signup" class="nav-link signup-button mx-md-2">Sign up</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?page=login" class="nav-link login-button mx-md-2">Log in</a>
                                </li> 
                            <?php        
                                }
                                else {
                            ?>
                                <li class="nav-item">
                                    <a href="includes/logout.inc.php" class="nav-link logout-btn mx-md-2">
                                        Log out
                                    </a>
                                </li>
                            <?php        
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="other-btn">
                        <ul class="navbar-nav ms-auto mb-2 mb-md-0 pe-3">
                            <?php
                                if(isset($_SESSION["username"])) {
                            ?>
                                <li class="nav-item">
                                    <a href="index.php?page=profile" class="nav-link username mx-md-2">
                                        <i class="fa-solid fa-user mx-md-2"></i>
                                        <?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"];?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="includes/logout.inc.php" class="nav-link logout-btn mx-md-2">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Main -->
    <main>
        <section class="hero-section section py-5" id="home">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="col-12 col-lg-6">
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
    <script src="index.js"></script>
</body>
</html>