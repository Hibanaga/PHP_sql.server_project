<?php include('register_check.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="../styles/style_login.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="">
        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username_reg" value="">
        </div>
        <div class="input-group">
        <label>Email</label>
        <input type="email" name="email_reg" value="">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_reg">
        </div>
        <div class="input-group">
        <button type="submit" class="btn" >Register</button>
        </div>
        
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
  </form>
</body>
</html>