<?php
    include_once 'header.php';
?>
    <section class='signup-form'>
        <div class="signup-form">
        <h2 class="title" id="welcome">Log In</h2>
            <form action="includes/login.inc.php" method="post">
                <input class="input-form-text" type="text" name="uid" placeholder="Username">
                <input class="input-form-text" type="password" name="pwd" placeholder="Password ">
                <button class="input-form-button" type="submit" name="submit">Log In</button>
            </form>
        </div>

    </section>
<?php
    include_once 'footer.php';
?>