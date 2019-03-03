
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-compatible" content="IE=Edge">

	<title> Jerico Concepcion | Web Developer Portfolio </title>

	<!-- fontawesome icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<!-- fav icon -->
	<link rel="icon" type="image/gif/png" href="../assets/images/fav.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- materialize -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	 <!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans|Fahkwang|Oswald|Poiret+One|Roboto|Roboto+Condensed|Staatliches" rel="stylesheet">
	
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">


</head>
<body>

<?php
	if(isset($_GET['success']))	{ ?>
    	<?php  unset($_GET['success']) ?>
    	<script type="text/javascript">
	    	alert('Message has been sent');
    	</script>

<?php	}	?>

	<main class="container-fluid">
		
		<section class="row">
			<div id="section1" class="col-md-4 col-sm-12">
				
				<h2 id="myname1" class="text-center mt-4 font-beige"><a href="./home.php">Jerico </a> </h2>
				<h3 id="myname2" class="text-center margin1"> Concepcion  </h3>
				
			
				<div class="text-center mb-4 mt-3">
					<img id="myimage" src="../assets/images/dp.jpeg" alt="myimage" class="img-fluid">
					<!-- <img id="myimage2" src="assets/images/me.png" alt="myimage" class="img-fluid"> -->
				</div>

				<div class="text-center">
					<ul id="links">
						<i class="material-icons text-center">info_outline</i> <li class="mb-4"> <a id="btnAbout" href="#about"> About </a>  </li>
						<i class="material-icons text-center">laptop_mac</i><li class="mb-4"><a id="btnProjects" href="#projects"> Projects </a></li>
						<i class="material-icons text-center">mail_outline</i><li class=""><a id="btnContact" href="#contact"> Contact </a></li>
					</ul>
				</div>


				<div class="text-center">
					<h2 class="hometitle2 col-md-8 text-center">FULL STACK <br> WEB DEVELOPER</h2>
				</div>
			</div> <!-- end 4 cols -->


			<div id="home" class="col-md-8 p-0 zindex col-sm-12">
				<h2 class="hometitle display-4 col-md-8 text-center zindex">FULL STACK <br> WEB DEVELOPER</h2>

				<img class="d-block img-fluid imghome" src="../assets/images/cagayan1.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan5.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan6.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan7.jpg">
 
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan5.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan6.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan7.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan1.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon3.jpg">
 
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan6.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan5.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan7.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan1.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon4.jpg">
 
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan1.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan5.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan6.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan7.jpg">
 
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon4.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan3.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan5.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan6.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan7.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/cagayan1.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon2.jpg">
				<img class="d-block img-fluid imghome" src="../assets/images/romblon3.jpg">
 
			</div>

			<div id="about" class="col-md-8">
				<h1 class="mb-2 pt-3 font-beige">About</h1>

				<h3 class="my-3 resume"> <i class="far fa-file-alt px-3"></i><a href="../assets/docs/cv.pdf" class="font-beige" download>  View My Resume </a></h3>

				<h4 class="mb-5">  <i class="material-icons">language</i> Skills </h4>

				<div class="row">
					<div class="col-md-3 text-center mb-3">
						<img class="icons img-fluid" src="../assets/images/html-5.png" alt="html5">
					</div>
	 
					<div class="col-md-3 text-center mb-3">
						<img class="icons" src="../assets/images/css.png" alt="css3">			
					</div>
						 
					<div class="col-md-3 text-center mb-3">
						<img class="icons" src="../assets/images/bootstrap.jpg" alt="bootstrap4">			
					</div>
						 
					<div class="col-md-3 text-center mb-3">
						<img class="icons" src="../assets/images/js.png" alt="javascript">			
					</div>
						 
					<div class="col-md-4 text-right mb-3 pr-5">
						<img class="icons" src="../assets/images/jquery.png" alt="jquery">			
					</div>						 
					<div class="col-md-4 text-center mb-3">
						<img class="icons" src="../assets/images/php.png" alt="php">			
					</div>						 
					<div class="col-md-4 text-left mb-3 pl-5">
						<img class="icons" src="../assets/images/laravel.png" alt="laravel">			
					</div>						 
					<div class="col-md-3 text-center offset-md-3">
						<img class="icons" src="../assets/images/gitlab.png" alt="gitlab">			
					</div>						 
					<div class="col-md-3 text-center">
						<img class="icons" src="../assets/images/github.png" alt="github">			
					</div>					
					<div class="col-md-3 text-center">
						<img class="icons" src="../assets/images/mongo.png" alt="mongoDB">			
					</div>
 					<div class="col-md-4 offset-md-4 text-center">
						<img class="icons" src="../assets/images/nodeJS.png" alt="nodeJS">			
					</div> 					
					<div class="col-md-4">
						<img class="icons" src="../assets/images/mysql.png" alt="mysql">			
					</div>
 
	 			</div>
 
			</div> <!-- end 8cols -->
			
			<div id="projects" class="col-md-8">

				<h1 class="mb-3 pt-3 font-beige">Projects</h1>

				<div class="row">
					<div class="col-md-4 p-3">
						<button class="cardprojectbtn btn btn-block p-0">
							<a href="https://concepcion-jerico.github.io/travelandcapture/" target="_blank">
								<img class="capstone-img img-fluid card-img-top" src="../assets/images/capstone1.png" alt="image">
							</a>
						</button>
						<div id="project1" class="card">
							<div class="cardbody card-body">
								<h4 class="card-title text-center"> Travel & Capture </h4>
								<p> This website features various photographs of places, memories, nature, and people taken from different travel destinations</p>
							</div>
							<div class="cardfooter card-footer text-center">
								<img class="iconsize img-fluid" src="../assets/images/html-5.png" alt="html5">
								<img class="iconsize" src="../assets/images/css.png" alt="css3">
								<img class="iconsize" src="../assets/images/bootstrap.jpg" alt="bootstrap4">
							</div>
						</div> <!-- end of card -->
					</div> <!-- end of col -->
	 
		

	 

					<div class="col-md-4 p-3">
						<button class="cardprojectbtn btn btn-block p-0">
							<a href="https://agile-garden-53940.herokuapp.com" target="_blank">
								<img class="capstone-img img-fluid card-img-top" src="../assets/images/unibal.jpg" alt="image">
							</a>
						</button>
						<div id="project1" class="card">
							<div class="cardbody card-body">
								<h4 class="card-title text-center"> UNI-BAL </h4>
								<p> Borrow-a-laptop system in a University</p>
							</div>
							<div class="cardfooter card-footer text-center">
								<img class="iconsize img-fluid" src="../assets/images/html-5.png" alt="html5">
								<img class="iconsize" src="../assets/images/css.png" alt="css3">
								<img class="iconsize" src="../assets/images/bootstrap.jpg" alt="bootstrap4">
								<img class="iconsize" src="../assets/images/js.png" alt="javascript">	
								<img class="iconsize" src="../assets/images/jquery.png" alt="javascript">	
								<img class="iconsize" src="../assets/images/laravel.png" alt="laravel">
							</div>
						</div> <!-- end of card -->
					</div> <!-- end of col -->

					<div class="col-md-4 p-3">
						<button class="cardprojectbtn btn btn-block p-0">
							<a href="https://shrouded-ridge-46685.herokuapp.com/" target="_blank">
								<img class="capstone-img img-fluid card-img-top" src="../assets/images/yourinn.jpg" alt="image">
							</a>
						</button>
						<div id="project1" class="card">
							<div class="cardbody card-body">
								<h4 class="card-title text-center"> YOUR INN </h4>
								<p> A hotel/inn booking system using the concept of slots. Admin and User's accounts has its own CRUD functionality. </p>
							</div>
							<div class="cardfooter card-footer text-center">
								<img class="iconsize img-fluid" src="../assets/images/html-5.png" alt="html5">
								<img class="iconsize" src="../assets/images/css.png" alt="css3">
								<img class="iconsize" src="../assets/images/bootstrap.jpg" alt="bootstrap4">
								<img class="iconsize" src="../assets/images/js.png" alt="javascript">	
								<img class="iconsize" src="../assets/images/jquery.png" alt="jquery">	
								<img class="iconsize" src="../assets/images/mongo.png" alt="mongoDB">	
								<img class="iconsize" src="../assets/images/laravel.png" alt="laravel">
								<img class="iconsize" src="../assets/images/nodeJS.png" alt="nodeJS">	
							</div>
						</div> <!-- end of card -->
					</div> <!-- end of col -->
	 
				</div> <!-- end 8cols -->
			</div> 

			
			<div id="contact" class="col-md-8 col-sm-12">
				<h1 class="mb-5 pt-3 font-beige">Contact Me</h1>

				<div class="col-md-9 offset-md-1 col-sm-12">
					<form method="POST" action="../controllers/email.php">
						
						<div class="input-container row">
							<i class="far fa-user-circle icon col-sm-1"> </i>
							<input type="text" name="name" class="col-md-10 input-field col-sm-8" placeholder="Enter your name">
						</div>						
						<div class="input-container row">
							<i class="far fa-envelope icon col-sm-1"></i>
							<input type="email" name="email" class="col-md-10 input-field col-sm-8" placeholder="Your email address">
						</div>			
						<div class="input-container row">
							<i class="fas fa-bullseye icon col-sm-1"></i>
							<input type="text" name="subject" class="col-md-10 input-field col-sm-8" placeholder="Enter a subject">
						</div>						
						<div class="input-container row">
							<i class="far fa-envelope-open icon col-sm-1"></i>
							<textarea name="message" class="col-md-10 input-field form-control col-sm-8" placeholder="Your message here" rows="5"></textarea>
						</div>

						<button id="btnSend" class="btn btn-primary offset-md-8 p-3 active"> SEND MESSAGE </button>

					</form> 

				</div>

			</div> <!-- end 8cols -->
			
		</section> <!-- end of ROW -->
	</main>

	<footer class="footer container-fluid">

		<div class="row row-media">
			<div class="col-md-12 text-center pt-3">
				<span id="footer1">Jerico Concepcion</span> <span id="footer2"> | Tuitt Coding Bootcamp &copy; 2019 </span>
			</div>
		</div> <!-- end row -->

	</footer>





 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="../assets/js/script.js"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>