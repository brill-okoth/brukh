<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");

guestsOnly();
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Logi | BrukhMinistries</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <?php include(ROOT_PATH . "/app/includes/favicon.php");?>
    <!--STYLESHEET-->
    <link rel="stylesheet" href="logins/style.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="logins/Plugins/fontawesome-free/css/all.min.css">
    </head>

    <body>
    
    <!--FORM AREA START-->
        
    <div class="form">
        
       <!--LOGIN FORM START-->
        <form  action="login.php" method="post">
        <h2 class="form-title">Login</h2>

        <?php include("app/helpers/formErrors.php");?>


        <div class="icons">
            <a href="#"> <i class="fab fa-facebook"></i> </a>
            <a href="#"> <i class="fab fa-google"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            </div>
            <input type="text" name="username" value="<?php echo $email; ?>"placeholder="Username/Email" class="text-input">

             <input type="password" name="password" value="<?php echo $password; ?>"placeholder="Password" class="text-input">

            <button type="submit" name="login-btn">Login</button>

              <p class="options"><a href="change_password.php">Forgot Password</a></p>
             <p class="options">Not Registered <a href="register.php">Create an Account</a></p>
            
        </form>
              
        
        
        <!--LOGIN FORM END-->
        </div>
        
        
          
    <!---FORM AREA END-->
        
        
        
        
        
        
    
    </body>
</html>
    
    
    
    