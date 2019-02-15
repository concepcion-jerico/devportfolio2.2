
$(document).ready(function() {

	$("#btnAbout").click(function () {
		$('#projects').hide();
		$('#contact').hide();
		$('#home').hide();
		$('#home').show();
		$('#home').addClass('zindex');
		$('.hometitle').addClass('zindex');
		$('#home').removeClass('zindex');
		$('.hometitle').removeClass('zindex');		
		$('#about').slideDown(1200);


	});

	$("#btnProjects").click(function () {
		$('#about').hide();
		$('#contact').hide();
		$('#home').hide();
		$('#home').show();
		$('#home').addClass('zindex');
		$('.hometitle').addClass('zindex');
		$('#home').removeClass('zindex');
		$('.hometitle').removeClass('zindex');
		$('#projects').slideDown(1200);

	});

	$("#btnContact").click(function () {
		$('#about').hide();
		$('#projects').hide();
		$('#home').hide();
		$('#home').show();
		$('#home').addClass('zindex');
		$('.hometitle').addClass('zindex');
		$('#home').removeClass('zindex');
		$('.hometitle').removeClass('zindex');
		$('#contact').slideDown(1200);

	});	
	$("#myimage").hover(function () {
		// $('#myimage').remove();
		$('#myimage2').addClass('display', 'block');
		$('#myimage').addClass('display', 'none');
		$('#myimage2').show();


	});		

	$("#myimage2").hover(function () {
		// $('#myimage').remove();
		$('#myimage2').hide();
		$('#myimage1').addClass('display', 'block');
		$('#myimage1').show();


	});	

});