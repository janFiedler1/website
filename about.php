<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
</head>
<!--this is a comment-->
<body>
    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="game.php">Game</a></li>
                <li><a href="about.php">About</a></li> 
                <li><a href="contact.php">Contact Us</a></li>
                <li id="sign-up-button"><a href="signup.php">Sign Up</a></li>
            </ul>  
        </nav>
        <h1 class="title">About</h1>

        <p>This is a paragraph</p>

        <?php 
            echo "<p>This is another paragraph</p>";
        ?>

        <?php
            //this is a php comment
            if(1 == 1) { 
        ?>
            <p>This is also a paragraph</p>

        <?php } ?>


    </div>
</body>

</html>