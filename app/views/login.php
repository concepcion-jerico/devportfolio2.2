<?php $pageTitle = "Login" ?>

<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () { ?>

	<div class="container">
		<div class="jumbotron bg-dark text-light text-center mt-5">
			<h4>Login</h4>
		</div> <!-- end jumbo -->

		<form>
			<div class="row">
				<div class="offset-md-4 col-md-4">		
					<div class="form-group">
						<label for="username">Username: </label>
						<input id="username" type="text" name="username" class="form-control" placeholder="Enter Username">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="password">Password: </label>
						<input id="password" type="password" name="password" class="form-control" placeholder="Enter Password">
						<span class="validation"></span>
					</div>
				

				</div> <!-- end of col -->
			</div> <!-- end row -->
		</form>
					<div class="text-center py-1">
						<a href="./register.php" class="btn btn-secondary"> Register </a>
						<button id="login" type="button" class="btn btn-primary">Login</button>
					</div>

	</div> <!-- end of container -->















<?php } ?> <!-- end of get page content -->