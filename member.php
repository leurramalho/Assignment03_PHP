<?php
    session_start();
    //var_dump($_SESSION);
    
    if (!isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }     
?>

<!DOCTYPE HTML> 
<html>
<head>
    <meta charset="utf-8">
    <link href="css/styles.css" rel="stylesheet">
    <title>PHP Final Assignment</title>
</head>
    <body>
        <div id="container">
            <?php
                include('templates/header.php');
            ?>
            <div class="main-content">
        <?php
            echo "<h3>Member's page (".$_SESSION['username'].")</h3>";
            echo '<h1>Welcome '.$_SESSION['fullname'].', to our amazing features </h1>';

            echo '<section>';
            echo '<h2>Best programming job</h2>';
            echo '<div class="random-text">';
            echo '    <p>';

            echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            echo 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
            echo 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            echo 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
            echo 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

            echo '    </p>';
            echo '</div>';
            echo '<figure>';
            echo '<img src="images/img01.jpg" alt="Image 01">';
            echo '<figcaption>fullstack development</figcaption>';
            echo '</figure>';
        echo '</section>';

        echo '<section>';
            echo '<h2>Paradise relaxing</h2>';
            echo '<div class="random-text">';
            echo '<p>';
                
            echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            echo 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
            echo 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            echo 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
            echo 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
        
            echo '</p>';
            echo '</div>';
            echo '<figure>';
            echo '<img src="images/img02.jpg" alt="Image 01">';
            echo '<figcaption>beach time</figcaption>';
            echo '</figure>';
        echo '</section>';

        echo '<section>';
            echo '<h2>Dreams</h2>';
            echo '<div class="random-text">';
            echo '<p>';
        
            echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            echo 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
            echo 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            echo 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
            echo 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
        
            echo '</p>';
            echo '</div>';
            echo '<figure>';
            echo '<img src="images/img03.jpg" alt="Image 01">';
            echo '<figcaption>supercars</figcaption>';
            echo '</figure>';
        echo '</section>';            
        ?>                
            </div> <!-- End div.main-contnet -->
        </div> <!-- End div#container -->
        <?php
            include('templates/footer.php');
        ?>
    </body>
</html>