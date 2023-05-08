<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Paws</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../css/index_shop_style.css">
</head>

<body>

  <!-- header section starts  -->

  <header class="header">
      <!-- navbar  -->

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Paws </a>

      <!-- navbar  -->

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="shop.php">shop</a>
      <a href="#about">Vows</a>
      <a href="#services">services</a>
      <a href="#us_section">Why us?</a>
      <a href="#contact">contact</a>
    </nav>

        <!-- icons  -->

    <div class="icons">
      <!-- hidden menu button -->

      <div class="fas fa-bars" id="menu-btn"></div>
      <a href="cart.php" class="fas fa-shopping-cart"></a>
      <a href="login.php" class="fas fa-user" id="login-btn"></a>
    </div>
    <form action="" class="login-form"></form>
  </header>

  <!-- header section ends -->

  <!-- front image section starts  -->

  <section class="home" id="home">
    <div class="content">
      <h3> Welcome to <span> <i class="fas fa-paw"></i>  PAWS </span> </h3>
      <a href="shop.php"><button align=center type="button" value="shop" class="learn-more-submit" >Shop now</button></a>
    </div>
    <img src="../image/bottom_wave.png" class="wave" alt="">
  </section>

  <!-- front image section ends -->

  <!-- vows section starts  -->

  <section class="about" id="about">
    <div class="image">
      <img src="../image/uss.png" alt="">
    </div>
    <div class="content">
      <h3>premium <span>pet care</span> </h3>
      <p> <b>We promise to guarantee your best friends with the best care and food depending on their age and race ♥ . </b></p>
      <a href="#services"><button class="learn-more-submit" >Read more</button></a>
    </div>
  </section>

  <!-- vows section ends -->

  <!-- services section starts  -->

  <section class="services" id="services">
    <h1 class="heading"> our <span>services</span> </h1>
    <div class="box-container">
      <div class="box">
        <i class="fas fa-bath"></i>
        <h3>Hygiene Products</h3>
      </div>
      <div class="box">
        <i class="fas fa-drumstick-bite"></i>
        <h3>healthy treats</h3>
      </div>
      <div class="box">
        <i class="fas fa-baseball-ball"></i>
        <h3>Toys and Accessories</h3>
      </div>
    </div>
  </section>

  <!-- services section ends -->


  <!-- why choose us section starts -->

  <section id="us_section" class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h1 class="heading"> Why choose <span>us </span> ? </h1>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img1-box">
            <img src="../image/pet1.png" alt="">
          </div>
          <div class="img2-box">
            <img src="../image/omega.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              PET NUTRITIONISTS
            </h2>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="../image/pet2.png" alt="">
          </div>
          <div class="img2-box">
            <img src="../image/dog.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              STANDARDS
            </h2>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="../image/pet3.png" alt="">
          </div>
          <div class="img2-box">
            <img src="../image/shield.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              QUALITY & SAFETY
            </h2>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- why choose us section  ends -->

  <!-- contact section starts -->

  <section class="contact" id="contact">
    <!--image of dog-->
    <div class="image">
      <img src="../image/contact.png" alt="">
    </div>
    <!--form to contact-->
    <form action="#">
      <h2 align=center class="title2">Contact&nbsp;<a href="#" class="logo-sign-up"> <i class="fas fa-paw"></i> Paws </a></h2>
      <div class="input-field-sign-up"><i class="fas fa-user"></i><input type="text" placeholder="Your name" /></div>
      <div class="input-field-sign-up"><i class="fas fa-envelope"></i><input type="email" placeholder="Your email" /></div>
      <div class="input-field-sign-up"><i class="fas fa-comment"></i><input type="text" placeholder="Your message" /></div>
      <div align=center><button type="submit" value="message sent" class="learn-more-submit">Submit</button></div>
    </form>
  </section>

  <!-- contact section ends -->

  <!-- footer section starts -->

  <section class="footer">
    <img src="../image/top_wave.png" alt="">
    <!--social section-->
    <div class="share">
      <a href="#"><button type="button" value="facebook" class="learn-more"><i class="fab fa-facebook-f"></i></button></a>
      <a href="#"><button type="button" value="twitter" class="learn-more"><i class="fab fa-twitter"></i></button></a>
      <a href="#"><button type="button" value="google" class="learn-more"><i class="fab fa-google"></i></button></a>
      <a href="#"><button type="button" value="linkedIn" class="learn-more"><i class="fab fa-linkedin-in"></i></button></a>
    </div>
    <div class="credit"> made with <span> ♥ </span>&nbsp;  We animals stand for each other ! </div>
  </section>

  <!-- footer section ends -->
  <script src="../js/navbar.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }

  </script> 
</body>
</html>
