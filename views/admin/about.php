<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Main -->
    <main>
    <section class="admin setting-location section py-5" id="about">
            <div class="container">
                <h2 class="section-title pt-5 pb-5">
                    Location
                </h2>
                <div class="row align-items-center gx-3 gy-5 py-5">
                    <div class="col-12 col-md-12 col-lg-5">
                        <iframe width="60%" height="500" src="https://maps.google.com/maps?"></iframe>
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
                            <form action="includes/map.inc.php" method="post">
                                <label for="address">Address</label>
                                <input type="text" name="address" placeholder="Enter address">
                                <label for="longtitude">Longtitude</label>
                                <input type="text" name="longtitude" placeholder="Enter longtitude">
                                <label for="lattitude">Lattitude</label>
                                <input type="text" name="lattitude" placeholder="Enter lattitude">
                                <input type="submit" name="submit" value="Submit">
                            </form>
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
    </main>
    <!-- Javascript -->
    <script src="index.js"></script>
</body>
</html>