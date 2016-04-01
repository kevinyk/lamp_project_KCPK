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

        h2{
        }

</style>
<div id = 'container'>    
    <form action = '/Products/add_item' method = 'POST' enctype = 'multipart/form-data'>
        <h2>Input the item name:</h2>
        <input type = 'text' name = 'item_name'>
        <h2>Is this item for men or women?</h2>
        <input type = 'radio' name = 'gender' value = 'women'>Women
        <input type = 'radio' name = 'gender' value = 'men'>Men
        <h2>Input the item description:</h2>
        <input type = 'text' name = 'description'>
        <h2>Input the front image: </h2>
        <input type = 'file' name = 'front_image'>
        <h2>Input the back image:</h2>
        <input type = 'file' name = 'back_image'>
        <h2>Input the item price:</h2>
        <input type = 'text' name = 'price'>
        <h2>Input the item color:</h2>
        <input type = 'text' name = 'color'>
        <h2>Is this item a shirt or hoodie?</h2>
        <input type = 'radio' name = 'type' value = 'shirt'>Shirt
        <input type = 'radio' name = 'type' value = 'hoodie'>Hoodie
        <h2>Input the sizes and quantity to add:</h2>
        XS: <input type = 'text' name = 'quant_xs'><br>
        S:  <input type = 'text' name = 'quant_s'><br>
        M:  <input type = 'text' name = 'quant_m'><br>
        L:  <input type = 'text' name = 'quant_l'><br>
        XL: <input type = 'text' name = 'quant_xl'><br>
        <input type = 'submit' value = 'Add item to database'>
</form>
</div>