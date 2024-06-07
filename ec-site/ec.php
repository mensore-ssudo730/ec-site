<?php require_once 'products.php'; ?>
<?php //require_once 'functions.php'; ?>
<?php 
//require_once 'classes/product.php';
//$banana = new Product('apple');
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">Shopping</h1>
      <form id="cart" method="post" action="cart2.php">
        <div class="cards-container">
          <?php foreach($products as $product): ?>
          <div class="card">
            <img class="card-image" src="<?php echo $product->getImage(); ?>" alt="">
            <p class="card-title"><?php echo $product->getName(); ?></p>
            <div class="flex justify-between">
              <p class="card-price"><?php echo $product->displayPrice(); //displayPrice($product->getPrice()); ?></p>
              <input min="0" name="<?php echo $product->getId(); ?>" class="item-number" type="number" value="0">
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </form>
      <div class="btn-footer bg-white">
        <input form="cart" class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>

<!-- 

 -->