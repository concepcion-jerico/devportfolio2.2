<?php require_once './connect.php' 
?>

<?php

	session_start();

	if(isset($_GET['sort'])) {
		if($_GET['sort'] == "asc") {
			$_SESSION['sort'] = " ORDER BY price ASC";
		} else {
			$_SESSION['sort'] = " ORDER BY price DESC";
		}
	}


	header('location: '.$_SERVER["HTTP_REFERER"]); // will go back to the page who requested
	
	









?>
