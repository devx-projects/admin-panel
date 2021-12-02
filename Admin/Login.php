<!DOCTYPE html>
<?php session_start();?>
<html>

<head>
    <title>Admin Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"> ;
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="img">
            <img src="images/side_frame.svg">
        </div>
        <div class="login-content">
            <form action="secure.php" method="post">
                <img src="images/profile.svg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text"name="username" class="input" placeholder="Username" requie >
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password"  name="pass" class="input" placeholder="Password" require>
                    </div>
                </div>
                  
                <input type="submit" class="btn" value="Login">
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
            </form>
        </div>
    </div>

</body>

</html>
<?php
    unset($_SESSION["error"]);
?>