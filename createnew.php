<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
    <link rel="canonical" href="../../../../favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>create new account</title>
	<style type="text/css">
		body{
			/*background-image: url(<?php echo base_url(); ?>/assets/image/fall.jpg);*/
			background: rgb(238,174,202);
background: -moz-radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
background: -webkit-radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#eeaeca",endColorstr="#94bbe9",GradientType=1);
		}
	</style>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-8 mt-5 bg-light w-100">
			<div class="col-lg-6 bg-light w-50 float-left">
				<img class="img-thumbnail mt-5" src="<?php echo base_url(); ?>/assets/image/signup-image.jpg" alt="img" >
			</div>	
			<div class="col-lg-6 bg-light w-50 float-right">
				<h1 class="text-success align-content-center w-100">Create Account</h1>
				<?php echo "<span class='text-danger'>",validation_errors(),"</span>"; ?>
				<?php 
				 echo "<span class='text-danger'>",$this->session->flashdata('msg'),"</span>";
				echo form_open('admin/regdata'); ?>
				<div class="form-group">
					<input type="text" name="name" id="exampleInputName1" class="form-control" aria-describedly="NameHelp" placeholder="User Name" value="<?php echo set_value('name'); ?>">
				</div>

				<div class="form-group">
					<input type="text" name="phone" id="exampleInputNumber1" class="form-control" aria-describedly="NameHelp" placeholder="Phone Number" value="<?php echo set_value('phone'); ?>">
				</div>

				<div class="form-group">
					<input type="email" name="email" id="exampleInputEmail1" class="form-control" aria-describedly="emailHelp" placeholder="Email" value="<?php echo set_value('email'); ?>">
				</div>

				<div class="form-group">
					<input type="password" name="pswd" id="exampleInputPassword1" class="form-control" aria-describedly="emailHelp" placeholder="Password" value="<?php echo set_value('pswd'); ?>">
				</div>

				<div class="form-group">
					<input type="password" name="pswdconf" id="exampleInputPassword1" class="form-control" aria-describedly="emailHelp" placeholder="Confirm Password" value="<?php echo set_value('pswdconf'); ?>">
				</div>

				<button type="submit" class="btn btn-primary mt-3 mb-5 float-left">Submit</button>
				<?php echo form_close(); ?>
				<span class="float-left mt-4 ml-3"><?php echo anchor('admin/index',"Have already an Account"); ?></span>
			</div></div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>