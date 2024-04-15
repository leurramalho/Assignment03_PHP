<!DOCTYPE HTML> 
<html>
<head>
    <meta charset="utf-8">
    <link href="css/styles2.css" rel="stylesheet">
    <title>Perfect Jobs</title>
</head>
<body>
    <div class="container">
        <?php include('templates/header.php'); ?>
        <div class="main-content">
            
            <form method="post" action="register.php">
                <fieldset>
                    <legend>New user Information</legend>
                    <div>
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Your First name" size="30" maxlength="30" required> <br>
                    </div>
                    <div>
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Your Last name" size="30" maxlength="30" required> <br>
                    </div>
                    <div>
                        <label for="username">E-mail(User Name):</label>
                        <input type="email" id="username" name="username" placeholder="Your Email(Username)" size="50" maxlength="50" required> <br>
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Your Password" required>
                    </div>
                </fieldset>
                <div>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </form>
        </div> <!-- End div.main-content -->
    </div> <!-- End div.container -->
    <?php include('templates/footer.php'); ?>
</body>
</html>