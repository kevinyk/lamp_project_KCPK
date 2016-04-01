<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('/partials/header');?>
	<title>LOGIN REGISTRATION</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">
<style type="text/css" >
	.ordersList{
			width: 950px;
			border-top: 2px solid #d3d3d3;
			border-bottom: 2px solid #d3d3d3;
	}
	.ordersList td{
            font-weight: normal;
            padding:5px;
            text-align:center;
            border-style:solid;
            border-width:1px;
        }
</style>
</head>
<script>
$load->this->partial('header');
</script>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <h2>Welcome!</h2>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id = 'container'>
	<h1>Hello, <?= $userInfo['first_name'] ?>!</h1>
	<h2>Here are your past orders.</h2>
	<table class = 'ordersList'>
		<tr>
			<td>Order ID</td>
			<td>Items Ordered</td>
			<td>Order date</td>
			<td>Subtotal</td>
			<td>Billing and Shipping Information</td>
			<td>Order Status</td>
		</tr> 
	<?php
		foreach ($orders as $order)
		{
	?>
		<tr>
			<td><?=$order['id'] ?></td>
			<td><a href = '/Products/getOrderInfo/<?=$order['id'] ?>'>Click here to view the products ordered.</a></td>
			<td><?=$order['created_at'] ?></td>
			<td><?=$order['subtotal'] ?></td>
			<td><a href = '/Products/getBillAndShipInfo/<?=$order['id'] ?>'>Click here to view your address information.</a></td>
			<td><?=$order['status'] ?></td>
		</tr> 


	<?php
		}
	?>
	</table>
</div>


</body>
</html>