
$(document).ready( () => {
	function validate_registration_form() {
		let errors = 0;
		let username = $('#username').val();
		let password = $('#password').val();
		let firstname = $('#firstname').val();
		let lastname = $('#lastname').val();
		let email = $('#email').val();
		let address = $('#address').val();

		//username should be greater than or equal to 10 chars
		if(username.length < 10) {
			$('#username').next().html("Username should be at least 10 characters");
			$('#username').next().css('color', 'red');
			errors++;
		} else {
			$('#username').next().html(' ');
		}


		//password should be at least 8 characters
		if(password.length < 8) {
			$('#password').next().html("Please provide a stronger password");
			$('#password').next().css('color', 'red');
			errors++;
		} else {
			$("#password").next().html(" ");
		}

		//email 
		if(!email.includes("@")) {
			$('#email').next().html("Please provide a valid email");
			$('#email').next().css('color', 'red');
			errors++;
		} else {
			$('#email').next().html(" ");
		}

		//address
		if(!address != "") {
			$('#address').next().html("Please provide a valid address");
			$('#address').next().css('color', 'red');
			errors++;
		} else {
			$('#address').next().html(" ");
		}
 
 		//firstname
 		if(!firstname != "") {
 			$('#firstname').next().html("Please provide a valid first name");
 			$('#firstname').next().css('color', 'red');
 			errors++;
 		} else {
 			$('#firstname').next().html(" ");
 		}
 
 		//lastname
 		if(!lastname != "") {
 			$('#lastname').next().html("Please provide a valid last name");
 			$('#lastname').next().css('color', 'red');
 			errors++;
 		} else {
 			$('#lastname').next().html(" ");
 		}

 		//confirm password
 		if(password !== $('#confirm_password').val()) {
 			$('#confirm_password').next().html("Passwords should match");
 			$('#confirm_password').next().css('color', 'red');
 			errors++;
 		} else {
 			$('#confirm_password').next().html(" ");
 		}

		if (errors > 0) {
			return false; //this means there are errors
		} else {
			return true; 
		}

	} /*end of function*/

	$('#add_user').click( (e) => {
		if(validate_registration_form()) {
			let username = $('#username').val();
			let password = $('#password').val();
			let firstname = $('#firstname').val();
			let lastname = $('#lastname').val();
			let email = $('#email').val();
			let address = $('#address').val();

			$.ajax ({
				"url": '../controllers/create_user.php',
				"method": 'POST',
				"data": {
					'username' : username,
					'password' : password,
					'firstname' : firstname,
					'lastname' : lastname,
					'email' : email,
					'address' : address
				},
				"success": (data) => {
					if (data == "user_exists") {
						$('#username').next().html("Username already exists");
						$('#username').next().css('color', 'red');
					} else {
						alert("user created successfully");
						// redirect browser
						window.location.replace("../../index.php"); //window.location.replace same as header in php
					}
				}
			})
		} /*end of if*/
	}); /*end of add_user click btn*/

	//login and session
	$('#login').click( (e) => {
		let username = $('#username').val();
		let password = $('#password').val();

		$.ajax({
			"url": "../controllers/authenticate.php",
			"method": "post",
			"data": {
				'username' : username,
				'password' : password
			},
			"success":(data) => {
				if (data == "login_failed") {
					$('#username').next().html("Please provide correct credentials");
					$('#username').next().css('color', 'red');
				} else {
					window.location.replace("../views/home.php");
				}
			}
		})
	});

	//prep for add to cart

	$(document).on('click', '.add-to-cart', (e) => {
		//to prevent default behavior and to override it with our own
		e.preventDefault();
		// prevent parent elements to be triggered
		e.stopPropagation();

		// target is the one who triggered the event
		let item_id = $(e.target).attr("data-id");
		let item_quantity = parseInt($(e.target).prev().val());

		$.ajax({
			"url" : "../controllers/update_cart.php",
			"method" : "post",
			"data" : {
				'item_id' : item_id,
				'item_quantity' : item_quantity,
				'update_from_cart_page': 0
			},
			"success" : (data) => {
				$("#cart-count").html(data);
			}
		});
	});

	function getTotal() {
		let total = 0;
		$(".item_subtotal").each(function(e) {
			total += parseFloat($(this).html());
		});
		$("#total_price").html(total.toFixed(2));
	}











}); /*end of document ready*/