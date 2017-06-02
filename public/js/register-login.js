$(document).ready(function() {
	$('.login-btn').click(function() {
		$('#register').fadeOut(400);
		$('.register-login row').html('#login');

		$('#login').fadeIn(400);
	});

	$('.register-btn').click(function() {
		$('#login').fadeOut(400);
		$('.register-login row').html('#register');
		$('#register').fadeIn(400);
	});
});