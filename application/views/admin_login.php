<!DOCTYPE html>
<html>
<head>
	<title>LOGIN REGISTRATION</title>
​
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
​
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
​
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
​
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
​
<link rel="stylesheet" type="text/css" href="/assets/admin_style.css">
</head>
<body>
​
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <h2>Admin Login Page</h2>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
​
​
<?php
	if ($this->session->flashdata('errors')) {
		foreach ($this->session->flashdata('errors') as $value)
	{
?>		<?= $value ?>
<?php
	}
}
?>
​
​
	<?php echo $this->session->userData('loginError'); ?>
        <form action="/Users/process_admin_login" method="POST">
          <div class="container">
            <div class="col-md-6 col-md-offset-3">
            	<legend><h3>Please Log In, Master <span class="glyphicon glyphicon-user"></h3></legend>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.com">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-default" id="login_email" name="login_email" value="Login">
            </div>
            </div>
        </form>
    </div>
</div>
​
​
</div>
​
​
</body>
</html>