<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper1">
  	
  </div>
 
  <form method="post" action="register.php">
    <h1 style="font-family: 'Poppins', sans-serif;">Register</h1> <!-- Apply Poppins font family -->
  	<?php include('errors.php'); ?>
  	<div class="input-box">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-box">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-box">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Password">
  	</div>
  	<div class="input-box">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div class="input-box">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
