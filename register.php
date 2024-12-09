<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
<title>Registration system PHP and mySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div class="header"> REGISTER</div>
        <form method="post" action="register.php">
            <!-- display validate errors here -->

     <?php include('errors.php') ; ?>
  
    <div class="input-group">
             <label>Username</label>
             <input type="text" name="username" value=<?php  echo $username; ?> >
    </div>
    </div>


     <div class="input-group">
             <label>Email</label>
             <input type="text" name="email" value=<?php echo $email; ?> >
    </div>


    <div class="input-group">
             <label>Password</label>
             <input type="password" name="password_1" >
    </div>



    <div class="input-group">
             <label>Confirm Password</label>
             <input type="password" name="password_2"  >
    </div>

    
    <div class="input-group">
             
             <button type="submit" name="register" class="btn">Register</button>
    </div>



     <p>Already a member? <a href="login.php">Sign in</a></p>



        </form>

  </body>

</html>