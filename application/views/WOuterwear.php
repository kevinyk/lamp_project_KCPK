<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Outerwear</title>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <?php $this->load->view('partials/header'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css" >
        *{
            padding: 0px;
            margin: 0px;
        }
        #container{
/*          border: 5px dotted red;*/
            width: 1100px;
            margin: 130px 0px 0px 70px; 
            
        }
        .categories{
            height: 400px;
            width: 190px;

            display: inline-block;
            vertical-align: top;
            margin-left: 10px;
            margin-top: 40px;
        }
        .rightSide{
            /*border: 2px dotted black;*/
            display: inline-block;
            vertical-align: top;
            width: 890px;
        }
        .classContent{
            text-align: center;
        }
        .product{
            width: 230px;
            height: 430px;
            text-align: center;
            display:inline-block;
            margin: 5px;
            vertical-align: top;
        }
        .picSize{
            height: 365px;
            width: 230px;

        }
        .bold{
            font-weight: bold;
        }
        ul{
            list-style: none;
        }
        li{
            margin-left: 20px;
        }

                /* Footer style */
        .footer {
            background-color: black;
            height: 320px;
            margin-top: 80px;
        }
        .page_title {
            text-align: center;
            font-weight: bolder;
            text-decoration: underline;
        }
        .label {
            margin-left: 600px;
        }
        .category {
            margin-left: 30px;
            font-weight: bolder;
        }
        .type {
            margin-left: 40px;
            color: black;
        }
    </style>

    <script type="text/javascript">
       $(document).ready(function(){
          $('img').hover(function(){
            var temp = $(this).attr("src");
            var newimage = $(this).attr("data-alt-src");
            $(this).attr("src", newimage);
            $(this).attr("data-alt-src",temp);
          }, function(){
            var temp = $(this).attr("src");
            var newimage = $(this).attr("data-alt-src");
            $(this).attr("src", newimage);
            $(this).attr("data-alt-src",temp);
          });
       });
   </script>
</head>
<body>

<div id='container'>

    <div class='categories'>
        <h3 class="category">Category</h3>
        <h5 class="category">WOMEN</h5>
        <ul>
            <li><a class="type" href="/products/womenTees">Shirts</a></li>
            <li><a class="type" href="/products/womenOuterwears">Outerwear</a></li>
        </ul>


        <h5 class="category">MEN</h5>
        <ul>
            <li><a class="type" href="/products/menTees">Shirts</a></li>
            <li><a class="type" href="/products/outerwear">Outerwear</a></li>
        </ul>

</div>
<div class="rightSide">
    <p><h3 class="page_title">WOMEN OUTERWEAR</h3>

    <form action = '/Products/sortWomenTees' method = "POST" >
        <label class="label">SORT BY:</label>
        <select class="turnintodropdown" name ="sort_by" onchange='this.form.submit()'>
            <option>Please select</option>
            <option value = 'created_at'>New Arrivals</option>
            <option value = 'price'>Price: High to Low</option>
        </select>
    </p>
    </form>

<div class="classContent">
<?php 
           foreach($allWOuterwears as $hoodies){

       ?>

           <div class="product">
               <img id = '<?= $hoodies['id'] ?>' class="picSize" src="/assets/currentProducts/<?= $hoodies['front_image_filename']?>" alt="Tee 1" data-alt-src='/assets/currentProducts/<?= $hoodies['back_image_filename']?>'/>
               <h6><?= $hoodies['name']?></h6>
               <p class='bold'>$<?= $hoodies['price']     ?></p>
           </div>


       <?php
           }
       ?>
        </div>

        </div>
    </div>
</div>

<?php $this->load->view('/partials/footer');?>

</body>
</html>