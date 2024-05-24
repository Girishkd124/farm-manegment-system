<?php require('connection.php'); 
      include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User - Login and Register</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <!-- for  BUYER -->
  <div class="popup-container" id="set-login-popup">
    <div class="popup">
      <h2>
          <span>SELECT USER TYPE</span>
          <button type="reset" onclick="popup('set-login-popup')">X</button>
        </h2>
      <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
        <button type='button' onclick="popup('buyer-popup'); popup('set-login-popup')" class="login-btn">BUYER</button>
        <button type='button' onclick="popup('farmer-popup'); popup('set-login-popup')" class="login-btn">FARMER</button>
        <button type='button' onclick="popup('admin-popup'); popup('set-login-popup')" class="login-btn">ADMIN</button>
      </div>
    </div>
  </div>

  
   <!-- for REGESTRATION -->
  <div class="popup-container" id="set-register-popup">
    <div class="popup">
      <h2>
          <span>SELECT USER TYPE</span>
          <button type="reset" onclick="popup('set-register-popup')">X</button>
        </h2>
      <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
        <button type='button' onclick="popup('buyer-register-popup'); popup('set-register-popup')" class="login-btn">BUYER</button>
        <button type='button' onclick="popup('farmer-register-popup'); popup('set-register-popup')" class="login-btn">FARMER</button>
      </div>
    </div>
  </div>


 <!-- for ADMIN LOGIN -->
  <div class="popup-container" id="admin-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>ADMIN LOGIN</span>
          <button type="reset" onclick="popup('admin-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="login-btn" name="admin-login">LOGIN</button>
      </form>
    </div>
  </div>  

 <!-- for BUYER LOGIN -->
  <div class="popup-container" id="buyer-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>BUYER LOGIN</span>
          <button type="reset" onclick="popup('buyer-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="login-btn" name="buyer-login">LOGIN</button>
      </form>
    </div>
  </div>

  <!-- for FARMER LOGIN -->
  <div class="popup-container" id="farmer-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>FARMER LOGIN</span>
          <button type="reset" onclick="popup('farmer-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="login-btn" name="farmer-login">LOGIN</button>
      </form>
    </div>
  </div>

  <!-- for  BUYER REGISTRATION -->
  <div class="popup-container" id="buyer-register-popup">
    <div class="register popup">
      <form method="post" action="login_register.php">
        <h2>
          <span>BUYER REGISTER</span>
          <button type="reset" onclick="popup('buyer-register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="email" placeholder="E-mail" name="email" required>
           
        <button type="submit" class="register-btn" name="buyer_register">REGISTER</button>
      </form>
    </div>
  </div>


   <!-- for FARMER  REGISTRATION -->
   <div class="popup-container" id="farmer-register-popup">
    <div class="register popup">
      <form method="post" action="login_register.php">
        <h2>
          <span>FARMER REGISTER</span>
          <button type="reset" onclick="popup('farmer-register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="email" placeholder="E-mail" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="register-btn" name="farmer_register">REGISTER</button>
      </form>
    </div>
  </div>
  
<!-- #############################   Home PAge ############################### -->
<?php
      include('gg.php');
      ?>


<script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

</body>
</html>