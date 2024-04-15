
    <div id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
                if(isset($_SESSION["username"])){
                    echo '<li><a href="member.php">Member</a></li>'; 
                }
            ?>
            <li><a href="register2.php">Register</a></li>
            <?php
                if(isset($_SESSION["username"])){
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
            ?>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <header id="banner">
        <img class="logo" src="images/logo_perfectjobs.jpg">
        <!-- <h1>Perfect Jobs</h1> -->
    </header>