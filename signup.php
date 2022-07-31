<?php
    include_once 'header.php';
?>
    <section class='signup-form'>
        <h2 class="title" id="welcome">Sign Up</h2>
        <div class="signup-form">
            <form action="signup.inc.php" method="post">
                <input type="text" name="name" placeholder="John Smith">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="uid" placeholder="johnsmith7">
                <input type="password" name="pwd" placeholder="Password ">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>

    </section>
<?php
    include_once 'footer.php';
?>