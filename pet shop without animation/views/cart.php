 <?php
   ob_start();
   require_once '../config.php';

  require_once '../controller/product.php';
   
 $article = new product();

 $articleS = $article->afficherproduit();
 require_once '../controller/Order.php';
    $commande = new commande();
   $commandeS = $commande->afficherOrder(); 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_cart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

  <!--------------------------main container----------------------------->

  <main class="container">

    <!------------------------header----------------------------->
    
    <div class="heading">
      <a href = "index.php"><button class="buttons-design arrow-back"><i class="	fas fa-angle-left"></i></button></a>
      <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Paws </a>
    </div>
    

    <div class="item-flex">

      <!---------------------checkout section----------------------->

      <section class="checkout">
        <h2 class="section-heading">Payment Details</h2>
        <div class="payment-form">

          <!------------payment method------------->

          <div class="payment-method">
            <button type="submit" value="credit card" class="method selected input-field ">
              <i class="fas fa-credit-card"></i>              
              <span>Credit Card</span>
              <i class="checkmark fas fa-check-circle"></i>
            </button>
            <button type="submit" value="paypal" class="method input-field ">
              <i class="fa fa-paypal" aria-hidden="true"></i>           
              <span>PayPal</span>
              <i class="checkmark far fa-check-circle"></i>
            </button>
          </div>
          
          <!-----------------------credentials------------------------->

          <form action="#">
            <div class="input-field "><i class="fas fa-user"></i><input type="text" id="Cardholder name" placeholder="Cardholder name" /></div>
            <div class="input-field "><i class="far fa-credit-card"></i><input type="number" id="Card number" placeholder="Card number" /></div>
            <div class="input-flex">
              <div class="expire-date">
                <div class="input-flex">
                  <div class="input-field "><i class="fas fa-user"></i><input type="number" name="day" id="expire-day" placeholder="Expiration day" min="1" max="31"></div>
                  <b class="slash">/</b>
                  <div class="input-field "><i class="fas fa-user"></i><input type="number" name="month" id="expire-month" placeholder="Expiration month" min="1" max="12"></div>
                </div>
              </div>
              <div class="cvv">
                <div class="input-field "><i class="fas fa-tag"></i><input type="number" id="cvv" placeholder="cvv"/></div>
              </div>
            </div>
          </form>
        </div>
        <div align=center>
          <button type="submit" value="pay" class="buttons-design"><b>Pay</b> $ <span id="payAmount">2.15</span></button>
        </div>
      </section>

      <!--------------------------cart section------------------------>

      <section class="cart">
        <div class="cart-item-box">
          <h2 class="section-heading">Shopping cart</h2>

          <!----------------- cards section------------------->

          <div class="product-card">
          
          </div>

          <!----------------- cards section------------------->

          <div class="product-card">
            <div class="card">
              <div class="img-box">
                <img src="../image/cat food 3.webp" alt="ribbles" width="80px" class="product-img">
              </div>
              <div class="detail">
                <h4 class="product-name"><?php echo $produit['nomP'];?></h4>
                <div class="wrapper">
                  <div class="product-qty">
                    <button type="button" value="decrement" id="decrement">
                      <i class="fa fa-minus"></i>
                    </button>
                    <span id="quantity"><?php echo $produit['quantité'];?></span>
                    <button type="button" value="increment" id="increment">
                      <i class="fa fa-plus"></i>                    
                    </button>
                  </div>
                  <div class="price">
                    <span id="price"> <?php echo $produit['prixP'];?>TND</span>
                  </div>
                </div>
              </div>
              <button name="removeButtonCommande" type="button" value="remove" class="product-close-btn">
                <i name="close-outline"></i>
              </button>
              <?php
                if(isset($_POST['removeButtonCommande']))
                {
                  require '../controller/commande.php';
                  $commande = new commande();
                  $commande->supprimercommande($_GET['id']);
                  header('Location:cart.php');
                }
              ?>

            </div>
          </div>
        </div>

        <div class="wrapper">

        <!----------------------pricing section--------------------->

          <div class="amount">
          <?php 
              
              foreach($commandeS as $commande) {
                  $produit = $commande->getproduitbyID($commande['IDC']); }
                  
                    $somme += $produit['prixP'];
                     $tot = $somme;
                        
           ?>
            <div class="subtotal">
              <span>Subtotal</span> <span><span id="subtotal"><?php echo $somme; ?></span></span>
            </div>
            <?php
                                                                            
                $tax = $somme/100*18;
             ?>
            <div class="tax">
              <span>Tax</span> <span><span id="tax"><?php echo $tax; ?></span></span>
            </div>
            <div class="shipping">
              <span>Shipping</span> <span><span id="shipping">0.00</span></span>
            </div>                                                                 
            <div class="total">
              <span>Total :</span> <span> <span id="total"><?php echo $somme+$tax; ?></span></span>
            </div>                                                                                       
          </div>
        </div>
      </section>
    </div>
  </main>
  
</body>
</html>
<?php  
    ob_end_flush();
    ?>
   
