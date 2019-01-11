<?php $pageTitle = "Register" ?>

<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () { 
	global $conn; ?>

	<div class="container text-center"> 
		<h3><strong>Register</strong></h3> 
	</div>

	<div class="container">
		<form id="register_form">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="firstname"> First Name: </label>
						<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter first name">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="lastname"> Last Name: </label>
						<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last name">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="email"> Email: </label>
						<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="address"> Address: </label>
						<input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
						<span class="validation"></span>
					</div>
				</div> <!-- end of first col -->

				<div class="col-md-6">
					<div class="form-group">
						<label for="username"> Username: </label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="password"> Password: </label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="confirm_password"> Confirm Password: </label>
						<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
						<span class="validation"></span>
					</div>
				</div><!-- end of 2nd column -->


			</div> <!-- end of row -->
		</form>

				<div class="text-center mb-5 offset-md-4 col-md-4">
					<a href="./login.php" class="btn btn-secondary"> Login </a>
					<button id="add_user" type="button" class="btn btn-outline-danger my-2"> Register</button>
				</div>
	</div>
















<?php } ?> <!-- end of get page content -->