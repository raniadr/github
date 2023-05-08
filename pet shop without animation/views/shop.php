<?php
    require_once     '../controller/product.php';
    
 $product = new product();
 
    $productS = $product->afficherproduit();
    $bdd = new PDO('mysql:host=localhost;dbname=paws;charset=utf8','root','');
    
   
     $produitS = $bdd->prepare("
           SELECT id, description, nom, quantite 
           FROM produit
           
        ");

       // $articles->execute();
        $produitS=$produitS->fetchAll(PDO::FETCH_ASSOC);

       


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>paws</title>
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
    <a href="cart.php">cart</a>
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
      <h3> <span>You want to spoil your pet ?</span> You're in the right place ! </h3>
    </div>
    <img src="../image/bottom_wave.png" class="wave" alt="">
  </section>
  
  <!-- front image section ends -->
<!-------------------------SHOP'S MAIN CATEGORIES--------------------->
  <!-- dog  banner starts -->

  <div class="dogfood_accessories">
    <div class="image"><img src="../image/doggfood.png" alt=""></div>

    <div class="content">
      <h3><span>Dog</span> food </h3>
      <p><b>For doggos only ! &nbsp; pick your fav snack.</b></p>
      <div class="amount">$16.00 - $30.00</div>
      <a href="#shopdog"> <img src="../image/shop_now_dog.png" alt=""></a>
    </div>
  </div>

  <!-- dog  banner ends -->
  
  <!-- cat  banner starts -->

  <div class="catfood_hygiene">
    <div class="content">
      <h3><span>cat </span>food </h3>
      <p><b>For Cattos only ! &nbsp; Life is too short to be slim !</b></p>
      <div class="amount">$16.00 - $30.00</div>
      <a href="#shopcat"> <img src="../image/shop_now_cat.png" alt=""> </a>
    </div>

    <div class="image"><img src="../image/caatf.png" alt=""></div>
  </div>

  <!-- accessories  banner  starts -->

  <div class="dogfood_accessories">
    <div class="image"><img src="../image/acc.png" alt=""></div>

    <div class="content">
      <h3> <span>Pet</span> Accessories </h3>
        <P><b>We make sure that you Stay Cute and elegant !</b></P>>      
        <div class="amount">$18.00 - $28.00</div>
            <a href="#shopacc"> <img src="../image/shop_now_dog.png" alt=""></a>
        </div>
    </div>

  <!-- accessories  banner  ends -->

  <!-- hygiene banner starts -->

  <div class="catfood_hygiene">
    <div class="content">
      <h3> <span>Pet </span> Hygiene </h3>
        <p><b>Your pet hates baths ? &nbsp; Have you tried one of our products ?</b></p>       
      <div class="amount">$10.00 - $26.00</div>
      <a href="#shopbath"> <img src="../image/shop_now_cat.png" alt=""> </a>
    </div>

    <div class="image"><img src="../image/bath.png" alt=""></div>
  </div>

  <!-- hygiene banner ends -->
<!-------------------------SHOP'S PRODUCTS--------------------->
  <!-- dog products section starts -->
  <?php 
                foreach ($produitS as $produit)
                {
  ?>
  <section class="shop" id="shopdog">
    <h1 class="heading"> our <span> dog products </span> </h1>
    <div class="box-container">
      <!--product one-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart" idP=<?php echo $produit["idP"];?></a>
        </div>
        <div class="image">
          <img src="../image/dog food 1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kippy </h3>
          <div class="amount"> $16.00 </div>
        </div>
      </div>
     
      
  </section>
  <?php
                }
  ?>
  <?php
                  foreach ($produitS as $produit)
                {
                            ?>
    			<section class="shop" id="shopdog">
    <h1 class="heading"> our <span> dog products </span> </h1>
    <div class="box-container">
    <div class="box">
        <div class="icons">
              
                      <h4 class="idP"> <img src="../<?php echo $produit['image_url']; ?>"alt="" style= width='100px' height='100px'> </timezone_identifiers_list><p>  
                        </div>
                 <h4><label for="nom">nom produit:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $produit['nomP'] ?></a></h43>
                <h4><label for="prix">prix produit:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $produit['prixP'] ?></h4>
                <h4><label for="quantite">quantite produit:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $produit['quantité'] ?></h4>
	    					<p><h4><label for="idP">idP: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $produit['idP'] ?></h4></p>
                <p><h4><label for="description">description:&nbsp;&nbsp; <?php echo $produit['description'] ?></h4></p>
                   <a href="achete.php" idP="<?php echo $produit['idP'];?>"><p><button>ajouter au panier</button></p></a>
                    </div>
                   
                    </div>
                    
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
                </div>
          <?php
                }
          ?>
  <!-- dog products section ends -->

  <!-- cat products section starts -->

  <section class="shop" id="shopcat">
    <h1 class="heading"> our <span> cat products </span> </h1>
    <div class="box-container">
      <!--product one-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/cat food 1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kippy</h3>
          <div class="amount"> $16.00 </div>
        </div>
      </div>
      <!--product two-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/cat food 2.png" alt="">
        </div>
        <div class="content">
          <h3>LicKitty</h3>
          <div class="amount"> $27.00 </div>
        </div>
      </div>
      <!--product three-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/cat food 3.webp" alt="">
        </div>
        <div class="content">
          <h3>Ribbles</h3>
          <div class="amount">$30.00 </div>
        </div>
      </div>
    </div>
  </section>

  <!-- cat products section ends -->

  <!-- accessories products section starts -->

  <section class="shop" id="shopacc">
    <h1 class="heading"> our <span> Accessories </span> </h1>
    <div class="box-container">
      <!--product one-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/acc cat.jpg" alt="">
        </div>
        <div class="content">
          <h3>Cat Leash</h3>
          <div class="amount"> $18.00 </div>
        </div>
      </div>
      <!--product two-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/Kippy-EVO-pet-gps-Pink.jpg" alt="">
        </div>
        <div class="content">
          <h3>Pet Tracker</h3>
          <div class="amount"> $28.00</div>
        </div>
      </div>
      <!--product three-->
      <div class="box">
        <div class="icons">
          <a href="achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/collars.jpg" alt="">
        </div>
        <div class="content">
          <h3>Dog Collar</h3>
          <div class="amount"> $19.00 </div>
        </div>
      </div>
  </section>
  <!-- hygiene  section starts -->

  <section class="shop" id="shopbath">
    <h1 class="heading"> our <span> hygiene products </span> </h1>
    <div class="box-container">
      <!--product one-->
      <div class="box">
        <div class="icons">
          <a href="#achete.php" class="fas fa-shopping-cart"></a>
        </div>
        <div class="image">
          <img src="../image/shampoing-hydratant.jpg" alt="">
        </div>
        <div class="content">
          <h3>Hydrating Shampoing</h3>
          <div class="amount"> $18.00 </div>
        </div>
      </div>
      <!--product two-->
      
      <!--product three-->
      
  </section>

  <!--------- shop prodcts section ends -------->

  <!----------- contact section starts --------->

  <section class="contact" id="contact">
    <div class="image">
      <img src="../image/contact.png" alt="">
    </div>

    <form action="#" class="sign-up-form">
      <h2 align=center class="title2">Contact &nbsp; <a href="#" class="logo-sign-up"> <i class="fas fa-paw"></i> Paws </a></h2>
      <div class="input-field-sign-up"><i class="fas fa-user"></i><input type="text" placeholder="Your name" /></div>
      <div class="input-field-sign-up"><i class="fas fa-envelope"></i><input type="email" placeholder="Your email" />
      </div>
      <div class="input-field-sign-up"><i class="fas fa-comment"></i><input type="text" placeholder="Your message" />
      </div>
      <div align=center><button type="submit" value="message sent" class="learn-more-submit">Submit</button></div>
    </form>
  </section>

<!-- contact section ends --> 

<!-- social section starts -->

  <section class="footer">
    <img src="../image/top_wave.png" alt="">
    <div class="share">
      <a href="index.php"><button class="learn-more"><i class="fab fa-facebook-f"></i></button></a>
      <a href="index.php"><button class="learn-more"><i class="fab fa-twitter"></i></button></a>
      <a href="index.php"><button class="learn-more"><i class="fab fa-google"></i></button></a>
      <a><button class="learn-more"><i class="fab fa-linkedin-in"></i></button></a>
    </div>
    <div class="credit"> made with <span> ♥ </span>&nbsp;  We animals stand for each other ! </div>
  </section>

<!-- social section ends -->
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
