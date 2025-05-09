<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	
    <link rel="stylesheet" href="../css/logindanregister.css" />
    <title>Welcome to Nanyadulubang</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
	  
	  
        <form method = "post" action = "../proses_register.php">
          <h1>Create Account</h1>
          <div class="social-icons">
            <a href="#" class="icon"
              ><i class="fa-brands fa-google-plus-g"></i
            ></a>
            <a href="#" class="icon"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
          </div>
          <span>or use your email for registeration</span>
          <input type="name" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
		  <input type="text" name="nama" placeholder="Nama Lengkap" required />
		  <input type="email" name="email" placeholder="Email" required />
          <button type="submit">Sign Up</a></button>
        </form>
      </div>	
	  
	  
	
 <div class="form-container sign-in">
 <form method="post" action="../proses_login.php">	
  <h1>Sign In</h1>
  <div class="social-icons">
    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
  </div>
  <span>or use your email password</span>
  
  <input type="name" name="username" placeholder="Username" required />
  <input type="password" name="password" placeholder="Password" required />
  
  <a href="../reset_password.php">Forget Your Password?</a>
  <button type="submit">Sign In</button>
  
  
</form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

  </body>
  <script src="../js/logindanregister.js"></script>
</html>
