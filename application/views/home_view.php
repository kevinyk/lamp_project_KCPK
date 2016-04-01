<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to NastyKev</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title></title>
<!-- CSS here -->
<link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<?php
$this->load->view('/partials/header.php');
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="/products/womenTees"><img src="/assets/banner_2.png" alt="Chania"></a>
    </div>

    <div class="item">
      <a href="/products/shopOuterwear"><img src="/assets/banner_1.png" alt="Chania"></a>
    </div>

    <div class="item">
      <a href="/products/menTees"><img src="/assets/banner_3.png" alt="Flower"></a>
    </div>

    <div class="item">
      <a href="/products/newArrivals"><img src="/assets/banner_4.png" alt="Flower"></a>
    </div>

    <div class="item">
      <a href="/products/men_all"><img src="/assets/banner_5.png" alt="Flower"></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="shop">
<a href="/products/women_all">SHOP WOMEN</a>
</div>
<div class="shop">
<a href="/products/men_all">SHOP MEN</a>
</div>

<div id = 'container'>
	<div class = 'subcontent'>
		<a href = '/Products/item'>
    <img src="/assets/adidas.png">
    <img src = '/assets/image_2.png'></a>
    <div class="shop_bottom">
      <a href="/products/shopOuterwear">SHOP OUTERWEAR</a>
    </div>
	</div>
	<div class = 'subcontent'>
    <img src="/assets/denim.png">
		<img src = '/assets/image_1.png'>
    <div class="shop_bottom">
      <a href="/Products/newArrivals">SHOP NEW ARRIVALS</a>
    </div>
	</div>
	<div class = 'subcontent'>
    <img src="/assets/basics.png">
		<img src = '/assets/image_3.png'>
    <div class="shop_bottom">
      <a href="/Products/shopShirts">SHOP SHIRTS</a>
    </div>
	</div>
</div>


<div class="promoBox">
  <div class="boxLeft">
        <h6 class='h6_title'>LET'S KEEP IN TOUCH!</h6>
        <p class='black'>Be the first to know the latest trends for this upcoming season!</p><br>
        <p class='black'>Enter your email to <span>save 10%</span> on your first purchase!</p><br>
<form class="form-inline" role="form">
  <div class="form-group">
    <label for="email"></label>
    <input type="email" class="form-control" id="email" placeholder="Email address...">
  </div>
  <button type="submit" class="btn btn-secondary" id="submit">></button>
</form>
  </div>

  <div class="boxRight">
        <h6 class='h6_title'>SHIPPING & RETURNS</h6>
        <p class='black2'>GET <span>FREE USPS 2-3 DAY PRIORITY SHIPPING</span> </p>
        <p class='black2'>ON ALL ORDERS + <span>FREE RETURNS!</span></p>
        <form method="/users/shipping_returns">
          <input class='learnMore' type='submit' value='LEARN MORE'>          
        </form>
  </div>
</div>


<?php $this->load->view('/partials/footer');?>

</body>
</html>