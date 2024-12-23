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
                        <form id="searchForm" action="includes/menusearch.inc.php" class="search-large-screen search-form form-inline my-2 my-lg-0" method="get">
                            <div class="form-group">
                                <input class="search-bar form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                <button class="search-button btn btn-outline-success mr-sm-2" type="submit" name="searchsubmit" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <div class="live-search-result">
                                <ul class="search-result">

                                </ul>
                            </div>
                        </form>

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
                            <li><a href="index.php?page=menu" class="dropdown-item">All</a></li>
                                <li><a href="index.php?page=menu&type=breakfast" class="dropdown-item">Breakfast</a></li>
                                <li><a href="index.php?page=menu&type=lunch" class="dropdown-item">Lunch</a></li>
                                <li><a href="index.php?page=menu&type=dinner" class="dropdown-item">Dinner</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="index.php?page=menu&type=drinks" class="dropdown-item">Drinks</a></li>
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

            <div class="search-form d-flex">
                <form id="searchFormSmall" action="includes/menusearch.inc.php" class="search-small-screen search-form form-inline my-2 my-lg-0" method="get">
                    <div class="form-group">
                        <input class="search-bar form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="search-button btn btn-outline-success mr-sm-2" type="submit" name="searchsubmit" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="live-search-result">
                        <ul class="search-result">

                        </ul>
                    </div>
                </form>
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

<script src="js/livesearch.js"></script>