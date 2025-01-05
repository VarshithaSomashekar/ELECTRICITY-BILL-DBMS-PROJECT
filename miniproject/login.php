<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <h2>Login</h2>
      <form action ="logindisplay.php" method="post">
      <div class="txt_field">
        <label>Email Address</label>
        <span></span>
		    <input type="text" name="email_id">
	    </div>
      <div class="txt_field">
        <label>Password</label>
        <span></span>
		    <input type="password" name="password">
	    </div>
        <button>Log in</button>
        <p class="message">Not registered? <a href="register.php">Create an account</a></p>
      </form>
    </div>
  </div>
</body>
</html>