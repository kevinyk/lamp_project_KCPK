<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title></title>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- CSS here -->
<link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">

<script>
$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});
</script>




<nav class="navbar navbar-default navbar-fixed-top">
  <div class="top">
<ul class="nav navbar-nav navbar-right">
    <li><a href="#search"><span class="glyphicon glyphicon-search white_search"></a></li>
</ul>

<div id="search">
    <button type="button" class="close">×</button>
    <form action="/Products/search" method='post'>
        <input type="search" name="color" placeholder="What are you searching for?"/>
        <input type="submit" class="btn btn-primary" id="search_button">Search</input>
    </form>
</div>
    <p class="white">FREE SHIPPING ON ORDERS $75+</p>


  </div>


  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="logo" href="/Products"><img src="/assets/kcpk.png"></a>
    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/products/newArrivals">New Arrivals</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/MShirts">Shirts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/outerwear">Outerwear</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/WShirts">Shirts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/products/womenOuterwears">Outerwear</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<!--       <form class="navbar-form navbar-left" role="search">
   <div class="input-group">
       <input type="Search" class="form-control" />
       <div class="input-group-btn">
        <button type="button" id="search" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
        </button>
       </div>
   </div>
      </form> -->

        <li><a href="/products/login">My Account</a></li>
        <li><a href="/Products/DisplayBag">My Bag <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a> -->
<!--           <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul> -->
<!--         </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

