<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
	 
  <form method="post" action="login.php">
	<h1>Login</h1>
  	<?php include('errors.php'); ?>
  	<div class="input-box">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Username" >
  	</div>
  	<div class="input-box">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-box">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>