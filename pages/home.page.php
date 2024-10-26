<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CSS-->
    <link rel="stylesheet" href="css/home.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Title -->
    <title>Home</title>
    
</head>
<body>
    <!-- Start Header/Navigation -->
    <header class="bg-header">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class=" brand-name navbar-brand me-auto" href="#home">
                    <img src="assets/logo.png" alt="" height="35x" width="35px" class="brand-logo d-inline-block align-text-top">
                    Foodie
                </a>
                
                <!-- Search box -->
                <!-- <form class="search-box ms-auto d-flex mt-3 col-lg-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <span class="input-group-btn">
                        <i class="fa-solid fa-magnifying-glass" type="submit"></i>
                    </span>
                </form> -->

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
                                <a class="nav-link nav-btn active mx-md-2" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn mx-md-2" href="#news-pro">Special</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn mx-md-2" href="#menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn mx-md-2" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn mx-md-2" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link login-button mx-md-2">Log in</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <a href="#" class="login-button">Login</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
                            <a href="#menu" class="order-btn mt-5" type="button">Order Now</a>
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
                            <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/pho.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Pho Bo</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>45.000 vnd</b>
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

                            <!-- 2 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/banh-mi.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        4.3
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Banh Mi</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>20.000 vnd</b>
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
                            <!-- 3 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/lau-thai.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        4
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Lau Thai</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>80.000 vnd</b>
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

                            <!-- 4 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/banh-xeo.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        4.5
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Banh Xeo</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>45.000 vnd</b>
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

                            <!-- 5 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/com-suon.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Com Suon</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>35.000 vnd</b>
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
                            <!-- 6 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dist-img">
                                        <img src="assets/bun-dau-1.jpg" alt="" width="60%" height="50%">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="star-icon fa-solid fa-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Bun Dau Mam Tom</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="dist-bottom-row">
                                        <ul>
                                            <li>
                                                <b>70.000 vnd</b>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about section py-5" id="about">
            <div class="container">
                <h2 class="section-title text-center pt-5 pb-5">
                    About
                </h2>
                <div class="row align-items-center gx-3 gy-5 py-5">
                    <div class="col-12 col-md-12 col-lg-5">
                        <img src="assets/restaurant.jpg"
                        class="img-fluid mx-auto d-block"
                        alt="foodie restaurant" 
                        width="70%" height="70%"/>
                    </div>
                    <div class="col-12 col-md-12 text-center text-lg-start col-lg-7">
                        <h3 class="title fw-bold fs-1 pb-3">Discover Foodie Story</h2>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse et 
                            perspiciatis iure, delectus quas repellat voluptate facere laborum. 
                            Explicabo aut aliquam quae rem illo et, quam neque asperiores. At, numquam.
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse et 
                            perspiciatis iure, delectus quas repellat voluptate facere laborum. 
                            Explicabo aut aliquam quae rem illo et, quam neque asperiores. At, numquam.
                        </p>
                        <h4 class="location">Location</h4>
                        <p class="location-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse et 
                            perspiciatis iure, delectus quas repellat voluptate facere laborum. 
                            Explicabo aut aliquam quae rem illo et, quam neque asperiores. At, numquam.
                        </p>
                        <button
                        class="read-more-btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium"
                        type="button">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact section py-5" id="contact">
            <div class="container">
                <h2 class="contact-section-title text-center pt-5 pb-5">
                    Contact
                </h2>
                <div class="contact-box container">
                    <div class="item">
                        <div class="contact-info">
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-box">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus sunt praesentium aspernatur iure molestias.</p>
                        <h3>We Accect</h3>
                        <div class="card-area">
                            <i class="fa-brands fa-cc-visa"></i>
                            <i class="fa-solid fa-credit-card"></i>
                            <i class="fa-brands fa-cc-mastercard"></i>
                            <i class="fa-brands fa-cc-paypal"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-box">
                        <h2>Location</h2>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>                    
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-box">
                        <h2>Newsletter</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloremque earum similique fugiat nobis. Facere?</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Enter your Email ..." aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">
                                <a href="#" type="button"><i class="fa fa-long-arrow-right"></i></a>
                            </span>
                        </div>
                        <h2>Follow us on</h2>
                        <p class="socials">
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="index.js"></script>
</body>
</html>