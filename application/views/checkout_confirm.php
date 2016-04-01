<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<?php $this->load->view('partials/header'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bag</title>

<style type="text/css" >
		*{
			padding: 0px;
			margin: 0px;
		}
		#container{
			margin:0px;
/*			border: 5px dotted red;*/
			width: 1010px;
			margin: 140px 0px 0px 160px; 
			
		}
		.description{
			font-size: 11px;
			font-weight: bold;
			width:312px;
			height:132px;
		}
		.productImage{
			height:131px;
			width:87px;
		}
		.bagList{
			margin: 8px 0px;

		}
		.size, .qty, .price{
			text-align: center;
		}
		.bottomContents{
			margin: 15px;
		}
		.continue{
			font-size: 11px;
			font-weight: bold;
			display:inline-block;
			vertical-align: top;
		}
		.total{
			display: inline-block;
			margin-left: 378px;
		}
		.totalStyle{
			width: 333px;
			font-size: 11px;
			font-weight: bold;
		}
		.money{
			text-align: right;
		}
		img{
			max-width:100%;
			max-height:100%;
		}
		.clothesList{
			width: 950px;
			border-top: 2px solid #d3d3d3;
			border-bottom: 2px solid #d3d3d3;
		}

		td{
			padding: 0px 30px;
			font-size: 11px;
			font-weight: bold;
		}
		input{
			background-color: black;
			color: white;
			width: 366px;
			height: 50px;
			margin: 10px 0px 10px 28px;
			border-radius: 0px;
			border:none;
		}
</style>


</head>
<body>

	<div id="container">
		
<h4>SHOPPING BAG</h4>
	<table class='clothesList'>
			<tr>
				<td class ='style'>ITEM</td>
				<td class ='style'>DESCRIPTION</td>
				<td class ='size'>SIZE</td>
				<td class ='qty'>QTY</td>
				<td class ='price'>PRICE</td>
				<td class = 'action'>ACTION</td>
			</tr>
<?php
		foreach($allItems as $cartItem)
		{

?>
			<div class="bagList">
				<tr>
					<td class ='style'><a href='/ItemDetails/<?= $cartItem['id'] ?>'><img class='productImage' src = '/assets/currentProducts/<?= $cartItem['front_image_filename'] ?>'/></a></td>
					<td class ='name'><?= $cartItem['name'] ?></td>
					<td class ='size'><?= $cartItem['size'] ?></td>
					<td class ='qty'><?= $cartItem['quantity'] ?></td>
					<td class ='price'>$<?= $cartItem['price'] ?></td>
					<td class='action'><a href="#">REMOVE</a></td>
					<!-- NEED TO ADD REMOVE FUNCTIONALITY -->
				</tr>
			</div>


<?php
		}
?>


		</table>

		<div class="bottomContents">
			
			<p class='continue'><a href="/Products"> < CONTINUE SHOPPING</a></p>

			<div class="total">
				<table class='orderTotal'>
					<tr>
						<td class='totalStyle'>SUBTOTAL</td>
						<td class='money'>$78</td>
					</tr>

					<tr>
						<td class='totalStyle'>ESTIMATED SHIPPING</td>
						<td class='money'>FREE</td>

					</tr>
					<tr>
						<td class='totalStyle'>ESTIMATED TOTAL</td>
						<td class='money'>$78</td>
					</tr>
				</table>
				<form action='/Products/shipping' method = 'POST'>
					<input type='submit' value='PROCEED TO SHIPPING'></input>	
				</form>

			</div>







		</div>






	</div>


</body>
</html>