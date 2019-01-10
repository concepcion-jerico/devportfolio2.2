<?php $pageTitle = "Register" ?>

<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () { ?>

	<h1 class="text-center"> Register </h1>
	<div class="container py-5">
	<section class="row">
		<div class="col-md-4">
			<form id="register_form" action="../controllers/create_user.php" method="POST">
				<div class="form-group">
					<label for="firstname"> First Name: </label>
					<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter first name">
					<span></span>
				</div>
				<div class="form-group">
					<label for="lastname"> Last Name: </label>
					<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last name">
					<span></span>
				</div>

				<div class="form-group">
					<label for="email"> Email: </label>
					<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
					<span></span>
				</div>
				<div class="form-group">
					<label for="address"> Address: </label>
					<input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
					<span></span>
				</div>

				<div class="form-group">
					<label for="username"> Username: </label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
					<span></span>
				</div>
				<div class="form-group">
					<label for="password"> Password: </label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
					<span></span>
				</div>
				<div class="form-group">
					<label for="confirm_password"> Confirm Password: </label>
					<input type="confirm_password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
					<span></span>
				</div>

				<button id="registerBtn" type="button" class="btn btn-outline-danger btn-block"> Register</button>
				<button id="loginBtn" type="button" class="btn btn-primary btn-block mb-5"> Login</button>
			</form>
		
		</div>
			
	</section>

</div> 















<?php } ?> <!-- end of get page content -->