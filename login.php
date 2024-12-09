<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
<title>Registration system PHP and mySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div class="header"> LOGIN</div>
        <form method="post" action="login.php">
		<!--display validation errors here-->
		  <?php include('errors.php') ; ?>
    <div class="input-group">
             <label>Username</label>
             <input type="text" name="username">
    </div>

    <div class="input-group">
             <label>Password</label>
             <input type="password" name="password">
    </div>

    <div class="input-group">
             
             <button type="submit" name="login" class="btn">
			Login</button>
    </div>


      <p>
        Not yet member? <a href="register.php">Sign up</a>
        
      
      </p>




        </form>

  </body>

</html>