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
        <form action="/Users/process_billing_address" method="POST">
            <div class="col-md-4 col-md-offset-1">
<?php
    if ($this->session->flashdata('errors')) {
        foreach ($this->session->flashdata('errors') as $value)
    {
?>      <?= $value ?>
<?php
    }
}
?>

    <?php echo $this->session->userData('loginError'); ?>
                <legend><h3 class="header">Billing Information</h3></legend>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Street">
                </div>
                <div class="form-group">
                    <label for="address2">Address 2:</label>
                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apt #">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="State">
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip Code">
                </div>
                <input type="submit" class="btn btn-secondary" id="pay" name="pay" value="Submit billing address">
            </div>
        </form>
    </div>
</div>
</div>

<?php $this->load->view('/partials/footer');?>  


</body>
</html>