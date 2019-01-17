<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () {
	if (isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1 ) {
	global $conn;
	?>

	<div class="container">
		<h4 class="text-right py-1">User Admin Page</h4>

		<div class="row">
			<div class="offset-md-1 col-md-10">
				<table class="table table-responsive table-striped">
					<thead>
						<tr>
							<th class="text-center">Username</th>
							<th class="text-center">First Name</th>
							<th class="text-center">Last Name</th>
							<th class="text-center">Email</th>
							<th class="text-center">Role</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$get_user_detail_query = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name AS role FROM users u JOIN roles r ON(u.roles_id = r.id); ";

						$user_details = mysqli_query($conn, $get_user_detail_query);
						foreach($user_details as $indiv_user) { ?>
							<tr>
								<td> <?php echo $indiv_user['username'] ?></td>
								<td> <?php echo $indiv_user['firstname'] ?></td>
								<td> <?php echo $indiv_user['lastname'] ?></td>
								<td> <?php echo $indiv_user['email'] ?></td>
								<td> <?php echo $indiv_user['role'] ?></td>
								<td>
									<?php 
										$id = $indiv_user['id'];
										if($indiv_user['role'] == "admin") { 

									?>

									<a href="../controllers/grant_admin.php?id=<?php echo $id ?>" class="btn btn-danger btn-block">Revoke Admin</a>

									<?php } else { ?>

									<a href="../controllers/grant_admin.php?id=<?php echo $id ?>" class="btn btn-primary btn-block">Make Admin</a>

									<?php } ?>
								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
			</div> <!-- end cols -->
		</div> <!-- end row -->
	</div> <!-- end container -->























	<?php } else {
		header ("location: ./error.php");

	} ?>



<?php } ?> <!-- end of get page content -->