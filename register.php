
<?php
session_start();
//var_dump($_SESSION);

require_once 'config/dbconfig.php';

if (isset($_POST['submit'])) {
    //print_r($_POST);
    
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $oConn = new DBConnect;
    //$oConn->testConnection();
    $sqlCheckUser = 'SELECT count(*) as "true" FROM users WHERE email = "'.$userName.'" ';
    print_r($sqlCheckUser);
    $users = $oConn->execSQL($sqlCheckUser);
    print_r($users);  
    if ($users['true'] == 1){
        echo "<script>
                alert('User ahead registred!')
                history.back()
            </script>";     
        exit();
    }	

    $sqlinsert = 'INSERT INTO users (first_name, last_name, email, password) VALUES ("'.$firstname.'", "'.$lastname.'", "'.$userName.'", "'.$password.'")';
    print_r($sqlinsert);
    $stmt = $oConn->insertData($sqlinsert);
    print_r($stmt);
    if ($stmt){
        $_SESSION['username']=$userName;
        $_SESSION['fullname']=$firstname.' '.$lastname;

        //print_r('session: '.$_SESSION['username']);
        //var_dump($_SESSION);

        header("Location: member.php");
        exit();
    }
}
?>

<!DOCTYPE HTML> 
<html>
<head>
    <meta charset="utf-8">
    <link href="css/styles.css" rel="stylesheet">
    <title>Perfect Jobs</title>
</head>
    <body>
        <div id="container">
            <?php
                include('templates/header.php');
            ?>
            <div class="main-content">
            
            <form method="post" action="register.php">
                    <div>
                        First Name: <input type="text" name="firstname" placeholder="Your Fisrt name" size="30" maxlength="30" required> <br>
                        Last Name: <input type="text" name="lastname" placeholder="Your Last name" size="30" maxlength="30" required> <br>
                        E-mail(User Name): <input type="email" name="username" placeholder="Your Email(Username)" size="50" maxlength="50" required> <br>
                        Password: <input type="password" name="password" placeholder="Your Password" required>
                    </div>
                    <div align="center">
                        <input type="submit" name="submit" value="Login">
                        <input type="reset" value="Clear">
                    </div>
                </form>
            </div> <!-- End div.main-contnet -->
        </div> <!-- End div#container -->
        <?php
            include('templates/footer.php');
        ?>
    </body>
</html>