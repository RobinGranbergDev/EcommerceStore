<?php
require "header.php";
?>

<main>
    <section>

    <?php
        if (isset($_SESSION["userId"])) {
            echo '<div class="form-container">
                        <form class="login-page" action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>
                    </div>';
                
        } 
        else {
            echo '
            <div class="form-container">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="E-mail/Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a id="signup" href="signup.php">Signup</a>
            </div>';
        }                       
    ?>

    </section>
</main>

<?php
require "footer.php";
?>