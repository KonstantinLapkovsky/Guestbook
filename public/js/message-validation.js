$(document).ready(function() {
	var captcha = function () {
		var code = '';
		var chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP';
		var max = 7;
		var min = 4;
		var digits = Math.round(Math.random() * (max - min + 1)) + min;;
		var size = chars.length - 1;
			// Generate random code.
		while (digits--) {
			var symbol = Math.floor(Math.random() * (size + 1))
			code += chars[symbol];
		}
		return code;
	};
	$('#captcha').val(captcha);
	$('.captcha').text($('#captcha').val());
	//var captchach = $('#captcha').val(captcha);
	//console.log(captchach);
	$('#message-create-form').validate({
		rules: {
			name: 'required',
			email: {
				required: true,
				email: true,
			},
			message: {
				required: true,
				minlength: 12,
			},
			captcha_confirmation: {
				required: true,
				equalTo: '#captcha',
			}
		},
		messages: {
			name: {
				required: 'Please enter your name'
			},
			email: {
				required: 'Please enter your email',
				email: 'Your email should have format like this: your@email.com'
			},
			message: {
				required: 'Please enter your message text'
			},
			captcha_confirmation: {
				required: 'Please enter the captcha text',
				equalTo: 'The captcha texts does not equal'
			}
		},
		submitHandler: function(form) {
	       	$.ajax({
	           	url: '/messages/create',
	           	type: 'POST',
	           	data: $(form).serialize(),
	           	success: function(response) {
	               	$('#success-message').show('fast').delay(3000).hide('fast');
	               	$(form)[0].reset();
	               	$('#captcha').val(captcha);
	               	$('.captcha').text($('#captcha').val());
	        }            
	    })
	  	}
	});
});
