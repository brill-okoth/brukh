<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");

guestsOnly();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register | BrukhMinistries</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <?php include(ROOT_PATH . "/app/includes/favicon.php");?>

    <!--STYLESHEET-->
    <link rel="stylesheet" href="forms/style.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="logins/Plugins/fontawesome-free/css/all.min.css">
    
    
  
  <link rel="stylesheet" href="Plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    </head>

    <body>
    
    <!--FORM AREA START-->
        
    <div class="form">
        
       <!--LOGIN FORM START-->
        <form  action="register.php" method="post">
        <h2 class="form-title"> Register</h2>

        <div class="icons">
            <a href="#"> <i class="fab fa-facebook"></i> </a>
            <a href="#"> <i class="fab fa-google"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            </div>

           

 <?php include("app/helpers/formErrors.php");?>


      
            <div>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" placeholder="Username">
            </div>
            <div>
            <input type="text" name="email" value="<?php echo $email; ?>"class="text-input" placeholder="Email">
            </div>
            <div>
             <input type="password"name="password"value="<?php echo $password; ?>"class="text-input" placeholder="Password">
            </div>
            <div>
             <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input" placeholder="Retype-Password">
            </div>
            
            
        <!--- <div class="icheck-primary">
                
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              
            <label for="agreeTerms"> I agree to the <a href="#">terms</a></label>
        
            </div> -->
      
                  <div>
            <button type="submit" name="register-btn">Register</button>

            <p class="options">I am a member<a href=" <?php echo BASE_URL . '/login.php'?>">Login</a></p>
            
        </form>
</div>

       
        
        <!--LOGIN FORM END-->
        </div>
        
        
          
    <!---FORM AREA END-->
        
        
        
        
        
        
    
    </body>
</html>
    
    
    
    