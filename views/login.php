<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Main -->
    <main>
    <section class="login section py-5" id="login">
            <div class="container">
                <h2 class="section-title text-center pt-5 pb-5">
                    Log in
                </h2>
                <div class="login-box container">
                    <div class="item">
                        <div class="side-image"></div>
                        <div class="login-form">
                            <header>Welcome back!</header>
                            <form action="includes/login-processing.inc.php" method="post">
                                <div class="input-field">
                                    <input type="email" name="username" class="input" placeholder="Enter your email" required >
                                    <label for="username">Username</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" name="pwd" class="input" placeholder="Enter your password" required>
                                    <label for="pwd">Password</label>
                                </div>
                                <div class="input-box">
                                    <input type="checkbox" name="remember-me" id="remember-me"> <label for="remember-me">Remember me</label>
                                </div>
                                <input type="submit" name="submit" class="submit-btn" value="Log in">
                                <div class="input-field">
                                    <span>Don't have an account yet? <a href="index.php?page=signup">Sign up here</a></span>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Javascript -->
    <script src="index.js"></script>
</body>
</html>