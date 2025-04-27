<?php
    $pageTitle = 'Login';
    require '../config/config.php';  
    require './component/header.php';
?>

<head>
  <link rel="stylesheet" href="../styles/login.css">
</head>
  
  
  <div class="body-content">

    <div class="description">
      <h1>Welcome to your dream apartment!</h1><br>
      <p>We're thrilled to have you here.  Whether you're a seasoned investor or a first-time buyer, our online platform makes searching for and purchasing your perfect apartment easy and convenient.</p>
      <p>Browse through our extensive listings, explore vibrant neighborhoods, and find your ideal place to call home - all from the comfort of your couch.</p>
    </div>
  
    <div class="login-form">
      <form action="login-display.php" method="post">
        <fieldset>
          <h2>Login</h2> <br>
          <input type="email" id="username" name="username" placeholder="Username"><br><br>
          <input type="password" id="password" name="password" placeholder="Password"><br><br>
          <div class="link-area flex flex-vertical-center flex-space-between">
            <div class="check-box">
              <input type="checkbox">
              <lab>Remember me</lable>
            </div>
            <a href="forget-password.php" id="pw" name="resetPw">Forget my password</a><br><br>
          </div>
          <input type="submit" name="btnSubmit" id="btn" value="Login"><br><br>
          Still don't have an account?
          <a href="#" id="register">Register</a><br><br>
          <a href="#" id="link1">Terms & Conditions | </a>
          <a href="#" id="link2">Privacy</a>
          </fieldset>
      </form>
    </div>
  </div>

  <?php
    require './component/footer.php'; 
  ?>