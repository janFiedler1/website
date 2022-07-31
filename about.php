<?php 
    include_once 'header.php';
?>
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

<?php 
    include_once 'footer.php';
?>