<?php
    include_once 'header.php';
?>
    <section class='signup-form'>
        <h2 class="title" id="welcome">Sign Up</h2>
            <form action="includes/signup.inc.php" method="post">
                <input class="input-form-text" type="text" name="name" placeholder="Full Name">
                <input class="input-form-text" type="text" name="email" placeholder="Email">
                <input class="input-form-text" type="text" name="uid" placeholder="Username">
                <input class="input-form-text" type="password" name="pwd" placeholder="Password ">
                <input class="input-form-text" type="password" name="pwdrepeat" placeholder="Repeat Password">
                <button class="input-form-button" type="submit" name="submit">Sign Up</button>
            </form>
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyInput"){
                        echo "<p>Fill in all fields</p>";
                    }
                    else if ($_GET["error"] == "invalidUID"){
                        echo "<p>Choose a proper username</p>";
                    }
                    else if ($_GET["error"] == "invalidEmail"){
                        echo "<p>Invalid Email</p>";
                    }
                    else if ($_GET["error"] == "passwordsDontMatch"){
                        echo "<p>Passwords don't match</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "usernameTaken"){
                        echo "<p>Username is taken, choose another one!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p>You have signed up!</p>";
                    }
                }
            ?>
    </section>

    
<?php
    include_once 'footer.php';
?>