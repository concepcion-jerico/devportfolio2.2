<?php 
	$section = NULL;

	if(isset($_GET["section"])) {

		if($_GET["section"] == "home") {
			$section = "home";
		}
 
		if($_GET["section"] == "catalog") {
			$section = "catalog";
		}
 
		if($_GET["section"] == "cart") {
			$section = "cart";
		}
  
		if($_GET["section"] == "register") {
			$section = "register";
		}
 
		if($_GET["section"] == "login") {
			$section = "login";
		}
		if($_GET["section"] == "logout") {
			$section = "logout";
		}
		if($_GET["section"] == "profile") {
			$section = "profile";
		}
		if($_GET["section"] == "items") {
			$section = "items";
		}
		if($_GET["section"] == "users") {
			$section = "users";
		}
		if($_GET["section"] == "orders") {
			$section = "orders";
		}

	} 
	
 	
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
  	<a class="navbar-brand" href="<?php get_url() ?>app/views/home.php?section=home"> JconStore</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sandbox-navbar" aria-controls="sandbox-navbar" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button> 

	  <div class="collapse navbar-collapse" id="sandbox-navbar">
	    <ul class="navbar-nav ml-auto">
	    	<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && ($_SESSION['user']['roles_id'] == 2))) { ?>

	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "home") {echo "active";} ?>" href="<?php get_url() ?>app/views/home.php?section=home"> Home</a>
	      </li>
	       
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "catalog") {echo "active";} ?>" href="<?php get_url() ?>app/views/catalog.php?section=catalog"> Catalog</a>
	      </li>
	       
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "cart") {echo "active";} ?>" href="<?php get_url() ?>app/views/cart.php?section=cart"> Cart <span class="badge bg-dark text-light" id="cart-count">
	        	<?php 
	        		if(isset($_SESSION['cart'])) {
	        			echo array_sum($_SESSION['cart']);
	        		} else {
	        			echo 0;
	        		}

	        	 ?>

	        </span></a>
	      </li>

	      <?php } elseif((isset($_SESSION['user'])) && ($_SESSION['user']['roles_id'] == 1)) { ?>

	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "items") {echo "active";} ?>" href="<?php get_url() ?>app/views/items.php?section=items"> Items </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "users") {echo "active";} ?>" href="<?php get_url() ?>app/views/users.php?section=users"> Users </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "orders") {echo "active";} ?>" href="<?php get_url() ?>app/views/orders.php?section=orders"> Orders </a>
	      </li>

		  <?php } ?>
      
	      <?php if(isset($_SESSION['user'])): ?>

	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "profile") {echo "active";} ?>" href="<?php get_url() ?>app/views/profile.php?section=profile"> Welcome, <?php echo $_SESSION['user']['firstname'] ?> </a>
	      </li>	
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "logout") {echo "active";} ?>" href="<?php get_url() ?>app/controllers/logout.php"> Logout </a>
	      </li>	
 
	      <?php else: ?>
	      	
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "login") {echo "active";} ?>" href="<?php get_url() ?>app/views/login.php?section=login"> Login </a>
	      </li>	
	            	
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "register") {echo "active";} ?>" href="<?php get_url() ?>app/views/register.php?section=register"> Register </a>
	      </li>

		  <?php endif; ?>

	    </ul>
	  </div>
  </div>
</nav> <!-- end of navbar -->