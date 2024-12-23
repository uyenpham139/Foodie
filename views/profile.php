<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Main -->
    <main>
    <section class="profile section py-5" id="signup">
            <div class="container">
                <h2 class="section-title text-center pt-5 pb-5">
                    Profile
                </h2>
                <div class="signup-box container">
                    <div class="item">
                        <div class="register-form">
                            <header>Create account</header>
                            <form action="includes/signup.inc.php" method="post">
                                <div class="input-field">
                                    <input type="text" name="firstname" class="input" placeholder="Enter your first name" required>
                                    <label for="firstname">First name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="lastname" class="input" placeholder="Enter your last name" required>
                                    <label for="firstname">Last name</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" class="input" placeholder="Enter your email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="tel" name="phone-no" class="input" placeholder="Enter your phone number" required>
                                    <label for="phone-number">Phone number</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" name="pwd" class="input" placeholder="Enter your password" required>
                                    <label for="pwd">Password</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" name="repwd" class="input" placeholder="Repeat your password" required>
                                    <label for="repwd">Repeat Password</label>
                                </div>
                                <input type="submit" name="submit" class="submit-btn" value="Sign up">
                                <div class="input-field">
                                    <span>Already have an account? <a href="index.php?page=login">Log in here</a></span>
                                </div>
                                
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

<?php
