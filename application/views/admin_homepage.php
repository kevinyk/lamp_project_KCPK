<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Homepage</title>
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
/*          border: 5px dotted red;*/
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


        .iteminfo td{
            font-weight: normal;
            padding:5px;
            text-align:center;
            border-style:solid;
            border-width:1px;
        }
        #additembutton{
            background-color:black;
            color:white;
            margin:10px;
            padding:4px;
        }
        .actionlink{
        	color:black;
        }
        .productPreview{
            height:50px;
        }

</style>


</head>
<body>
<div id = 'container'>
    <a href = "/Products/add_item_form" id = 'additembutton'>Click here to add an item.</a>
    <br>
    <a href = "/Users/admin_orders" id = 'additembutton'>Click here to view all orders and modify their status.</a>
<table>
    <tr>
        <td>Product id</td>
        <td>Product name</td>
        <td>Product description</td>
        <td>Product price</td>
        <td>Product type</td>
        <td>Product size: Product stock</td>
        <td>Actions</td>
    </tr>
<?php
    foreach ($allProducts as $product)
    {
        $previousProductID=$product['id'];
?>
    <tr class = 'iteminfo'>
        <td><?= $product['id']?></td>
        <td><?= $product['name']?> <br><img class = 'productPreview' src = '/assets/currentProducts/<?= $product['front_image_filename']?>'></td>
        <td><?= $product['description']?></td>
        <td><?= $product['price']?></td>
        <td><?= $product['type']?></td>
        <td><?= $product['size']?>: <?= $product['stock']?></td>
        <td><a class = 'actionlink' href = '/Products/removeProductConfirm/<?= $product['id'] ?>'>Remove</a><br> <a class = 'actionlink' href = '/Products/editProductForm/<?= $product['id'] ?>'>Edit Product</a></td>
    </tr>
<?php
    }
?>
</div>
</body>
</html>