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
    #container{
			margin:0px;
/*			border: 5px dotted red;*/
			width: 1010px;
			margin: 140px 0px 0px 160px; 
			
	}
</style>
</head>
<script>
$load->this->partial('header');
</script>
<body>
<div id = 'container'>
	<h1>Hello, Master!</h1>
	<h2>Here are all past orders.</h2>
	<table class = 'ordersList'>
		<tr>
			<td>Order ID</td>
			<td>User ID</td>
			<td>Items Ordered</td>
			<td>Order date</td>
			<td>Total $</td>
			<td>Billing and Shipping Information</td>
			<td>Order Status</td>
		</tr> 
	<?php
		foreach ($allOrders as $order)
		{
	?>
		<tr>
			<td><?=$order['id'] ?></td>
			<td><?=$order['user_id'] ?></td>
			<td> </td>
			<td><?=$order['created_at'] ?></td>
			<td>$<?=$order['subtotal'] ?></td>
			<td></td>
			<td>
				<?=$order['status'] ?>
				<form id = 'changestatus' action = '/Products/changeOrderStatus'>
					<input type = 'hidden' name = 'id' value = '<?=$order['id'] ?>'>
					<select name = 'status' form = 'changestatus'>
						<option selected>Change Status:</option>
						<option value = 'processed'>Processed</option>
						<option value = 'shipped'>Shipped</option>
						<option value = 'cancelled'>Cancelled</option>
					</select>
					<input type = 'submit' value = 'Finalize status'>
				</form>
			</td>
		</tr> 


	<?php
		}
	?>
	</table>
</div>