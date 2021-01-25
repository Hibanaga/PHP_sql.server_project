    <?php include('check_login.php') ?>
    <!DOCTYPE html>
    <html>
        <head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="../styles/style_login.css">
        </head>
        
        <body>
        <div class="header">
            <h2>Login</h2>
        </div>
    
        <form method="post" action="">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username_user" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_user">
            </div>
            <div class="input-group">
                <!-- <button type="submit" class="btn" name="login_user">Login</button> -->
                <input type="submit" value='Log in' class="btn btn_log" >
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
        </body>
    </html>