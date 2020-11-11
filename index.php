<?php
//include_once 'header.php';
if (isset($_GET['err'])) {
  $err=$_GET['err'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="checkLogin.php?req=auth" class="sign-in-form">
            <h2 class="title">Sign in</h2>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" onchange="setValue()" id="switch1" name="faculty"> 
                <label class="custom-control-label" for="switch1">Faculty</label>
              </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="lemail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="lpassword" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
          <form class="sign-up-form" id="form-signup">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="name" placeholder="Name" />
            </div>
             <div class="input-field">
              <i class="fas fa-sort-numeric-up"></i>
              <input type="text" id="prn" placeholder="PRN" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-mobile"></i>
              <input type="text" id="mob" placeholder="Mobile_no" />
            </div>
            <div class="input-field">
            	<i></i>
            	<select class="dropdown" id="dept">
            		<option value="Select_option" disabled="true" >Select your department</option>
            		<option value="ME">Mechanical</option>
            		<option value="CE">Civil</option>
            		<option value="CS">Computer</option>
            		<option value="IT">Information Technology</option>
            		<option value="ETX">Electronics</option>
            		<option value="ENTC">Electronics and Telecommunication</option>
            		<option value="CM">Chemical</option>
            	</select>
            </div>
            <div class="input-field">
            	<i></i>
            	<select class="dropdown" id="year">
            		<option value="Select_option" disabled="true" >Select your year</option>
            		<option value="FY">F.Y Btech</option>
            		<option value="SY">S.Y Btech</option>
            		<option value="TY">T.Y Btech</option>
            		<option value="Btech">Btech</option>
            	</select>
            </div>
            
           
            <input type="button" class="btn" value="Sign up" onclick="validate()" target="sign-in-form" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Let's make an account quickly to make it easy.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              You're just one step behind, sign in for better experience.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="register" />
        </div>
      </div>
    </div>
   
    <script src="app.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
      alert("<?php echo $err?>")

     
    </script>
  </body>
</html>