<?php
    include_once 'header.php';
?>
    <section class='signup-form'>
        <h2 class="title" id="welcome">Log In</h2>
        <div class="signup-form">
            <form action="login.inc.php" method="post">
                <input type="text" name="uid" placeholder="johnsmith7">
                <input type="password" name="pwd" placeholder="Password ">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>

    </section>
<?php
    include_once 'footer.php';
?>