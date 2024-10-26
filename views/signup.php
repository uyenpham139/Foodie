<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Main -->
    <main>
    <section class="about section py-5" id="about">
            <div class="container">
                <h2 class="section-title text-center pt-5 pb-5">
                    Sign up
                </h2>
                
                <form action="../includes/login_processing.inc.php" method="post">
                    <input type="text" name="firstname" placeholder="First name">
                    <input type="text" name="lastname" placeholder="Last name"> </br>>
                    <input type="email" name="email" placeholder="Email"> </br>
                    <input type="password" name="pwd" placeholder="Password"> </br>
                    <input type="password" name="repwd" placeholder="Reapeat Password"> </br>
                    <input type="submit" value="Submit" > </br>
                </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Javascript -->
    <script src="index.js"></script>
</body>
</html>