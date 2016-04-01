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
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <h2>Welcome!</h2>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <form action="/Users/process_register" method="POST">
            <div class="col-md-4 col-md-offset-1">
                <div id = "errors">
<?php
    if ($this->session->flashdata('errors')) 
    {   
        echo $this->session->flashdata('errors');
    }
?>
                </div>
            	<legend><h3 class="header">Register</h3></legend>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" id="alias" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.com">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <p>* Password should be at least 8 characters</p>
                </div>
                <div class="form-group">
                    <label for="passwordconf">Confirm Password:</label>
                    <input type="password" class="form-control" name="passwordconf" id="passwordconf" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="birthday">Date of Birth:</label>
                    <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Birthday">
                </div>
                <input type="submit" class="btn btn-secondary" id="register_email" value="Register">
            </div>
       	</form>
        <form action="/Users/process_login" method="POST">
            <div class="col-md-4 col-md-offset-1">
            	<legend><h3 class="header">Have an Account? Login</h3></legend>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.com">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-secondary" id="login_email" name="login_email" value="Login">
            </div>
        </form>
    </div>
</div>

<?php $this->load->view('/partials/footer');?>



</body>
</html>