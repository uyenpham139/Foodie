<!DOCTYPE html>
<html lang="en">

<?php 
// Sample temporary address//
    $address = "Quận 10, Thành phố Hồ Chí Minh, Việt Nam";
    $latitude = 10.7769; // Example latitude
    $longitude = 106.7009; // Example longitude
?>

<body>
    <main>
        <section class="contact section py-5" id="contact">
            <div class="container">
                <h2 class="contact-section-title text-center pt-5 pb-5">
                    Contact
                </h2>
                <div class="contact-box">
                    <div class="item">
                        <div class="contact-info d-flex">
                            <h1 class="first-text">Let's get in touch</h2>
                            <div class="map">
                                <?php if (!empty($address)): ?>
                                    <iframe width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo urlencode($address); ?>&output=embed"></iframe>
                                <?php elseif (!empty($latitude) && !empty($longitude)): ?>
                                    <iframe width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
                                <?php else: ?>
                                    <p>No location data available.</p>
                                <?php endif; ?>
                            </div>
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
    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>


