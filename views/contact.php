<!DOCTYPE html>
<html lang="en">

<?php 
// Sample temporary address//
    $address1 = "Quận 10, Thành phố Hồ Chí Minh, Việt Nam";
    $address2 = "Từ Liêm, Hà Nội, Việt Nam";
    $address3 = "Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam";
    $latitude = 10.7769; // Example latitude
    $longitude = 106.7009; // Example longitude
?>

<body>
    <main class="contact-page">
        <section class="contact section pt-5" id="contact">
            <div class="header-section container">
                <h1 class="contact-section-title text-center pt-5 pb-5">
                    Contact Us
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit repellendus non facere repudiandae sit alias veniam consequuntur quisquam, rem sint, reiciendis veritatis aliquam animi qui totam asperiores possimus, ea nesciunt?</p>
            </div>
            <div class="contact-section container-fluid">
                <div class="contact-component container">
                    <div class="contact-info-section d-flex">
                        <h2 class="first-text">Let's get in touch</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam odio, alias nam, laboriosam repellat quae eaque sed amet aut perspiciatis rerum reprehenderit tempora in blanditiis enim. Nam magni quas voluptatibus?</p>
                        <div class="contact-info">
                            <div class="item">
                                <i class="list-icon fa-solid fa-phone"></i>
                                <div>
                                    <p class="text">Phone number</p>
                                    <p>+84 123 456 789</p>
                                </div>
                            </div>
                            <div class="item">
                                <i class="list-icon fa-solid fa-envelope"></i>
                                <div>
                                    <p class="text">Email address</p>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <div class="item">
                                <i class="list-icon fa-solid fa-location-dot"></i>
                                <div>
                                    <p class="text"> Address</p>
                                    <ul class="address">
                                        <li data-address="<?php echo urlencode($address1); ?>" class="active">
                                            <i class="fa-solid fa-utensils"></i>    
                                            <span>Food Store 1, <?php echo $address1; ?></span>
                                        </li>
                                        <li data-address="<?php echo urlencode($address2); ?>">
                                            <i class="fa-solid fa-utensils"></i>
                                            <span>Food Store 2, <?php echo $address2; ?></span>
                                        </li>
                                        <li data-address="<?php echo urlencode($address3); ?>">
                                            <i class="fa-solid fa-utensils"></i>
                                            <span>Food Store 3, <?php echo $address3; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="social-links">
                            <p class="text">Connect with us:</p>
                            <ul class="social-media">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="submit-form">
                        <h4>Send a message</h4>
                        <form action="#" method="post">
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
                <div class="map container">
                    <?php if (!empty($address1)): ?>
                        <iframe id="map" width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo urlencode($address1); ?>&output=embed"></iframe>
                    <?php elseif (!empty($latitude) && !empty($longitude)): ?>
                        <iframe id="map" width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
                    <?php else: ?>
                        <p>No location data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/map.js"></script>
</body>
</html>


