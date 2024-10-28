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
                            <a class="nav-link home nav-btn mx-md-2" aria-current="page" href="index.php?page=home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="index.php?page=menu" class="nav-link menu nav-btn mx-md-2 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=menu-breakfast" class="dropdown-item">Breakfast</a></li>
                                <li><a href="index.php?page=menu-lunch" class="dropdown-item">Lunch</a></li>
                                <li><a href="index.php?page=menu-dinner" class="dropdown-item">Dinner</a></li>
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
                        <?php
                            if(isset($_SESSION["username"])) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link mx-md-2">
                                    <?php echo $_SESSION["username"]; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="includes/logout.inc.php" class="nav-link login-button mx-md-2">Log out</a>
                            </li> 
                        <?php
                            }
                            else{
                        ?>
                            <li class="nav-item">
                                <a href="index.php?page=signup" class="nav-link signup-button mx-md-2">Sign up</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=login" class="nav-link login-button mx-md-2">Log in</a>
                            </li> 
                        <?php        
                            }
                        ?>
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