<?php $pageTitle = "Register" ?>

<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () { ?>

	<div class="container py-5">
	<section class="row">
		<div class="offset-md-4 col-md-4">
			<h1 class="text-center"> Register </h1>
			<form id="register_form" action="../controllers/register_endpoint.php" method="POST">
				<div class="form-group">
					<label for="firstname"> First Name: </label>
					<input type="text" name="firstname" id="firstname" class="form-control">
					<span></span>
				</div>
				<div class="form-group">
					<label for="lastname"> Last Name: </label>
					<input type="text" name="lastname" id="lastname" class="form-control">
					<span></span>
				</div>
				<div class="form-group">
					<label for="username"> Username: </label>
					<input type="text" name="username" id="username" class="form-control">
					<span></span>
				</div>
				<div class="form-group">
					<label for="password"> Password: </label>
					<input type="password" name="password" id="password" class="form-control">
					<span></span>
				</div>
				<div class="form-group">
					<label for="email"> Email: </label>
					<input type="text" name="email" id="email" class="form-control">
					<span></span>
				</div>
				<div class="form-group">
					<label for="address"> Address: </label>
					<input type="text" name="address" id="address" class="form-control">
					<span></span>
				</div>

				<button id="registerBtn" type="button" class="btn btn-outline-dark btn-block mb-5"> Register</button>
			</form>
		
		</div>
			
	</section>

</div> 















<?php } ?> <!-- end of get page content -->