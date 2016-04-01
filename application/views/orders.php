<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https:/.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="/maxcdnsha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<?php $this->load->view('partials/header'); ?>

	<style type="text/css">
		*{
			padding:0px;
			margin:0px;
		}
		#container {
			margin: 150px 0px 0px 300px;
			width:1010px;
			height: 900px;
		}
		.bold{
			font-weight: bold;
			font-size: 13px;
		}
		.return{
			height: 55px;
			width: 450px;
			background-color: black;
		}
		.black{
			color:white;
		}
		td{
			padding: 30px;
		    font-size: 11px;
		    font-weight: bold;
		    text-align: center;
    		border: 2px solid black;
		}



	</style>

	<script type="text/javascript">
		$(document).ready(function(){

			$('img').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#MT1').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#T1F').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});		
			$('#T1B').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});
		});
	</script>

</head>
<body>
	<div id="container">

		<h1>Items ordered</h1>

		<table>
			<tr>
				<td><span class='bold'>Name</span></td>
				<td><span class='bold'>Gender</span></td>
				<td><span class='bold'>Description</span></td>
				<td><span class='bold'>Type</span></td>
				<td><span class='bold'>Price</span></td>
				<td><span class='bold'>Order Date</span></td>
			</tr>
			<?php
				foreach($productInfo as $info) { 

			?>
					<tr>
						<td><?= $info['name']?></td>
						<td><?= $info['gender']?></td>
						<td><?= $info['description']?></td>
						<td><?= $info['type']?></td>
						<td><?= $info['price']?></td>
						<td><?= $info['created_at']?></td>
					</tr>
			<?php
				}
			?>
		</table>

		<!-- Give a URL to return to profile page!!!-->
		<h4 class='return'><a class='black' href="#">Return to Profile</a></h4>

	</div>
	<?php $this->load->view('partials/footer'); ?>
</body>
</html>