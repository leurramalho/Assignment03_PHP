
<?php
session_start();
//var_dump($_SESSION);

require_once 'config/dbconfig.php';

if (isset($_POST['submit'])) {
    //print_r($_POST);

    $userName = $_POST['username'];
    $password = $_POST['password'];

    //print_r($userName);
    //print_r($password);

    $oConn = new DBConnect;
    //$oConn->testConnection();

    $sqlCheckUser = 'SELECT * FROM users WHERE email = "'.$userName.'" AND password = "'.$password.'" ';
    
    //print_r($sqlCheckUser);
    
    $users = $oConn->execSQL($sqlCheckUser);
    //print_r($users);  
    
    if ($users['email'] === $userName){
        //echo "Access allowed"; 
        $_SESSION['username']=$userName;
        $_SESSION['fullname']=$users['first_name'].' '.$users['last_name'];

        //print_r('session: '.$_SESSION['username']);
        //var_dump($_SESSION);

        header("Location: member.php");
        exit();
    } else {
        echo "<script>alert('Access denined')</script>";   
    }
}

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
            if (!isset($_SESSION['username'])) {
            echo '<form method="post" action="'.$_SERVER["PHP_SELF"].'">
                    <fieldset>
                    <legend>User Authentication</legend>
                    <div>
                        User Name: <input type="email" name="username" placeholder="Your Username" size="50" maxlength="50" required> 
                        <br>
                        Password: <input type="password" name="password" placeholder="Your Password" required>
                    </div>
                    </fieldset>
                    <div align=center>
                        <input type="submit" name="submit" value="Login">
                        <input type="reset" value="Clear">
                    </div>
                </form>
                <div>
                    <h4> To register use menu option or click <a href="register.php">here</a>.
                </div>
                ';
            } else {
                header("Location: member.php");
                exit();
            } 
        ?>


            </div> <!-- End div.main-contnet -->
        </div> <!-- End div#container -->
        <?php
            include('templates/footer.php');
        ?>
        

    </body>
</html>