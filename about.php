<?php 
    include_once 'header.php';
?>
    <!--  INTRO    -->
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
    $name = "Jan Fiedler";
    $bool = true;   // also 1 or 0

    // array
    $names = array("Jan", "Melynda", "Mr. Moose");
    //$array = [1,2,3];
    echo $name;
    $object = null;
    ?>

    <!--  EPISODE 5    -->
    <?php
    $_SERVER["DOCUMENT_ROOT"];  //root path
    echo "<br>";
    $_SERVER["PHP_SELF"];    //name and parent folder of current file
    echo "<br>";
    $_SERVER["SERVER_NAME"];    //name and parent folder of current file
    echo "<br>";
    $_SERVER["REQUEST_METHOD"];    //name and parent folder of current file

    echo $_GET["name"];   //http://localhost/website-repo/about.php?name=jan


    $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILES[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""];
    
    ?>
    


<?php 
    include_once 'footer.php';
?>