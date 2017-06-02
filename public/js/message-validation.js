$(document).ready(function() {
	var captcha = $('#captcha').text();
	console.log(captcha);
	$('#message-create-form').submit(function(e){
	
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
				equalTo: captcha,
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
            	data: $('#message-create-form').serialize(),
            	success: function(response) {
                	$('#answers').html(response);
            }            
        });
    	}
	})
});
});