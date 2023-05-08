<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Profile</title>
  </head>
  <body>
    <div class="container" >

      <!--------------login form------------->
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title1">Your &nbsp;Profile</h2>
            <div class="input-field-sign-in"><i class="fas fa-user"></i><input type="text" id="username" placeholder="Username" /></div>
            <div class="input-field-sign-in"><i class="fas fa-map-marker-alt"></i><input type="text" id="address" placeholder="Address" /></div>
            <div class="input-field-sign-in"><i class="fas fa-phone"></i><input type="number" id="phone number" placeholder="Phone number" /></div>
            <div class="input-field-sign-in"><i class="fas fa-lock"></i><input type="password" id="password" placeholder="Password" /></div>
            <div class="input-field-sign-in"><i class="fas fa-lock"></i><input type="password" id="password" placeholder="Confirm password" /></div>
            <button type="submit" value="Login" class="learn-more-sign-in color1" >Save</button>
          </form>
            </div>
        </div>
              <!-------------sign up suggestion---------->
      <div class="panels-container">
        <div class="panel left-panel">
          <div  class="content">
            <!------arrow back to the previous page------>
            <a href = "javascript:history.back()"><button class="learn-more-sign-in arrow-back"><i class="	fas fa-angle-left"></i></button></a>
            <h3>Welcome to <i class="fas fa-paw"></i> PAWS</h3>
            <p>"&nbsp;You're free to change your infos !<br>If you're good to go, U can check out some of our services down below !&nbsp;"<br>- Squirrel Agent - </p>
            <button type="submit" value="sign up" class="learn-more-sign-in color1" id="sign-up-btn">
                <a href="index.html">Browse our website</a>
              </button>
              <img src="image/cat house.png" class="image1" alt="">          
            </div>
        </div>
    </div>
    </body>
</html>
      