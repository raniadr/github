<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login_sing-up.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container" >

      <!--------------login form------------->
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title1">Sign in &nbsp;<a href="#" class="logo-sign-in"> <i class="fas fa-paw"></i> Paws </a></h2>
            <div class="input-field-sign-in"><i class="fas fa-user"></i><input type="text" id="username" placeholder="Username" /></div>
            <div class="input-field-sign-in"><i class="fas fa-lock"></i><input type="password" id="password" placeholder="Password" /></div>
            <button type="submit" value="Login" class="learn-more-sign-in color1" ><a href="profile.html">login</a></button>
            <p class="social-text1">Or Sign in with social platforms</p>
            <div>
              <a href="#"><button type="button" value="Facebook" class="learn-more-sign-in"><i class="fab fa-facebook-f"></i></button></a>
              <a href="#"><button type="button" value="Twitter" class="learn-more-sign-in"><i class="fab fa-twitter"></i></button></a>
              <a href="#"><button type="button" value="Google" class="learn-more-sign-in"><i class="fab fa-google"></i></button></a>
              <a href="#"><button type="button" value="linkedin" class="learn-more-sign-in"><i class="fab fa-linkedin-in"></i></button></a>
            </div>
          </form>
      <!--------------sign up form------------->
          <form action="#" class="sign-up-form">
            <h2 class="title2">Join &nbsp;<a href="#" class="logo-sign-up"> <i class="fas fa-paw"></i> Paws </a></h2>
            <div class="input-field-sign-up"><i class="fas fa-user"></i><input type="text" id="username" placeholder="Username" /></div>
            <div class="input-field-sign-up"><i class="fas fa-envelope"></i><input type="email"  id="email" placeholder="Email" /></div>
            <div class="input-field-sign-up"><i class="fas fa-lock"></i><input type="password" id="password" placeholder="Password" /></div>
            <button type="submit" value="Login" class="learn-more-sign-up color2" ><a href="profile.html">Sign up</a></button>
            <p class="social-text2">Or Sign up with social platforms</p>
            <div>
              <a href="profile.html"><button type="button" value="Facebook" class="learn-more-sign-up"><i class="fab fa-facebook-f"></i></button></a>
              <a href="#"><button type="button" value="Twitter" class="learn-more-sign-up"><i class="fab fa-twitter"></i></button></a>
              <a href="#"><button type="button" value="Google" class="learn-more-sign-up"><i class="fab fa-google"></i></button></a>
              <a href="#"><button type="button" value="linkedin" class="learn-more-sign-up"><i class="fab fa-linkedin-in"></i></button></a>
            </div>
          </form>
        </div>
      </div>
      
      <!-------------sign up suggestion---------->
      <div class="panels-container">
        <div class="panel left-panel">
          <div  class="content">

            <!------arrow back to the previous page------>
            <a href = "javascript:history.back()"><button class="learn-more-sign-in arrow-back"><i class="	fas fa-angle-left"></i></button></a>
            <h3>New here ?</h3>
            <p>"&nbsp;Sign up before your hooman comes ! &nbsp; Get some treats !&nbsp;"<br>- Catto Agent - </p>
            <button type="submit" value="sign up" class="learn-more-sign-in color1" id="sign-up-btn">
              Sign Up
            </button>
          </div>
          <img src="image/squirrel copy.png" class="image1" alt="">
        </div>

        <!-------------sign in suggestion---------->
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              "&nbsp;We have some WOOF deals towday ! &nbsp; Check them out !&nbsp;"
              <br>- Doggo Agent -
            </p>
            <button type="submit" value="sign in" class="learn-more-sign-up color2" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="image/animals.png" class="image2" alt="" />
        </div>
      </div>
    </div>
    <script src="js/login-sign_up.js"></script>
  </body>
</html>
<?php
  
?>