<?php require_once '../partials/template.php'; ?>

<?php function get_page_content () { 
	if (isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1 ) {
	global $conn;
	?>


	<div class="container">
		<h4 class="text-center"> Orders Admin Page </h4>
		<div class="row">
			<div class="offset-md-3 col-md-10">
				<table class="table table-responsive table-striped">
					<thead>
						<tr>
							<th class="text-center"> Transaction Code </th>
							<th class="text-center"> Status </th>
							<th class="text-center"> Actions </th>
						</tr>
					</thead>
					<tbody>
						<?php 

							$order_query = "SELECT o.id, o.transaction_code, o.status_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id=s.id) ORDER BY o.status_id;";
							$orders = mysqli_query($conn, $order_query);

							foreach($orders as $order) { ?>
								<tr>
									<td> <?php echo $order['transaction_code'] ?> </td>
									<td> <?php echo $order['status'] ?> </td>
									<td>
										<?php if($order['status'] == "pending") { ?>

										<a href="../controllers/complete_order.php?id=<?php echo $order['id'] ?>" class="btn btn-block btn-success"> Complete Order </a>
										<a href="../controllers/cancel_order.php?id=<?php echo $order['id'] ?>" class="btn btn-block btn-danger"> Cancel Order </a>

										<?php } ?>
									</td>					
								</tr>

							<?php } ?>



						 
					</tbody>
				</table>
			</div> <!-- end 8 cols -->
		</div> <!-- end  row -->
	</div> <!-- end container -->
















	<?php } else {
		header ("location: ./error.php");
	} ?>



<?php } ?> <!-- end of get page content -->