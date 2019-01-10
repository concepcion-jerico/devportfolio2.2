<?php 
	$section = NULL;

	if(isset($_GET["section"])) {

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
	} 
	
 	
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  	<a class="navbar-brand" href="<?php get_url() ?>app/views/home.php?section=home"> JconStore</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sandbox-navbar" aria-controls="sandbox-navbar" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button> 

	  <div class="collapse navbar-collapse" id="sandbox-navbar">
	    <ul class="navbar-nav ml-auto">

	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "home") {echo "active";} ?>" href="<?php get_url() ?>app/views/home.php?section=home"> Home</a>
	      </li>
	       
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "catalog") {echo "active";} ?>" href="<?php get_url() ?>app/views/catalog.php?section=catalog"> Catalog</a>
	      </li>
	       
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "artists") {echo "active";} ?>" href="<?php get_url() ?>app/views/artists.php?section=artists"> Cart</a>
	      </li>      
      
	      <?php if(isset($_SESSION['logged_in_user'])): ?>

	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "logout") {echo "active";} ?>" href="<?php get_url() ?>app/controllers/logout.php"> Logout </a>
	      </li>	
 
	      <?php else: ?>
	      	
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "login") {echo "active";} ?>" href="<?php get_url() ?>app/views/index.php?section=login"> Login </a>
	      </li>	
	            	
	      <li class="nav-item">
	        <a class="nav-link <?php if($section == "register") {echo "active";} ?>" href="<?php get_url() ?>app/views/register.php?section=register"> Register </a>
	      </li>

		  <?php endif; ?>

	    </ul>
	  </div>
  </div>
</nav> <!-- end of navbar -->