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

  <style type="text/css">
  .container{
    width: 1000px;
    height: 550px;
    margin-top: 100px;
  }
  #picture{
    width: 40%;
  }
  .row {
    display: inline-block;
  }
  .about_us {
    width: 500px;
  }
  #about {
    display: inline-block;
    margin-left: 40px;
    text-align: justify;
  }
  #picture {
    display: inline-block;
    background-color: blue;
  }
  h2 {
    text-align: center;
    margin-top: 70px;
    font-weight: bolder;
  }
  </style>

</head>
<body>


<div class="container">
    <div class="row">
            	<legend><h2>About Us</h2></legend>

              <img id="picture" src="/assets/group.png">

              <div id="about">
                <h4 class="about_us">KCPC is a global online destination for men and women who love fashion. It was founded in 2016 by 4 coders from Burbank, California.</h4><br>
                <h4>Kevin Kim</h4>
                <h4>Daniel Chang</h4>
                <h4>Jasper Pascual</h4>
                <h4>Joanne Kim</h4>
            </div>
       	</form>

    </div>
</div>


<?php $this->load->view('/partials/footer');?>


</body>
</html>