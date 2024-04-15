<?php
    session_start();
?>

<!DOCTYPE HTML> 
<html>
<head>
    <meta charset="utf-8">
    <link href="css/styles2.css" rel="stylesheet">
    <title>Perfect Jobs</title>
</head>
    <body>
        <div class="container">
            <?php
                include('templates/header.php');
            ?>
            <div class="main-content">
            
            <?php
                if (!isset($_POST['submit'])) {
                    echo '<form method="post" action="contact.php">
                        <fieldset>
                        <legend>Send us your question</legend>
                            <div>
                                <label for="fullname">Full Name:</label> 
                                <input type="text" name="fullname" placeholder="Your name" size="60" maxlength="60" required> <br>
                                <label for="email">Email</label> 
                                <input type="email" name="username" placeholder="Your Email" size="50" maxlength="50" required> <br>
                                <label for="message">Message:</label>
                                <textarea name="message" rows="5" cols="60" required></textarea>
                            </div>
                        <fieldset>
                        <div>
                            <input type="submit" name="submit" value="Send message">
                            <input type="reset" value="Clear">
                        </div>
                    </form>';
                }
                else {
                    echo '<h4>'.$_POST['fullname'].', thank you for your contact!<p>';
                }
            ?>
            </div> <!-- End div.main-contnet -->
        </div> <!-- End div#container -->
        <?php
            include('templates/footer.php');
        ?>
    </body>
</html>