<!DOCTYPE html>
<html lang="en">
<?php 
// Sample temporary address//
    $address = "Quận 10, Thành phố Hồ Chí Minh, Việt Nam";
    $latitude = 10.7769; // Example latitude
    $longitude = 106.7009; // Example longitude
?>  
<body>
    <!-- Main -->
    <main>
    <section class="about section py-5" id="about">
            <div class="container">
                <h2 class="section-title text-center pt-5 pb-5">
                    About
                </h2>
                <div class="components row align-items-center gx-3 gy-5 py-5">
                    <div class="col-12 col-md-12 col-lg-5 mt-0">
                        <?php if (!empty($address)): ?>
                            <iframe width="70%" height="500" src="https://maps.google.com/maps?q=<?php echo urlencode($address); ?>&output=embed"></iframe>
                        <?php elseif (!empty($latitude) && !empty($longitude)): ?>
                            <iframe width="70%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
                        <?php else: ?>
                            <p>No location data available.</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-12 text-center text-lg-start col-lg-7 mt-0">
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
                        <ul class="location-text">
                            <li>
                            <?php if (!empty($address)): ?>
                                <p><?php echo $address; ?></p>
                            <?php elseif (!empty($latitude) && !empty($longitude)): ?>
                                <p><?php echo $latitude;?>, <?php echo $longitude;?></p>
                            <?php else: ?>
                                <p>No location found.</p>
                            <?php endif; ?>
                            </li>
                        </ul>
                        
                        <button
                        class="read-more-btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium"
                        type="button">
                            Read More
                        </button>
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