$(function() {
	$('#inputEmail3').unbind('blur').on('blur', function () {
		var email = $(this).val(),
			testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
			data = {
				'email': email
			};
		
		$("#email_msg").removeClass().html('').css({display: 'none'});
		if (email.length==0) {
			$("#email_msg").addClass("alert alert-danger alert-error").html('E-mail field is required').fadeIn();
			return;
		} else if (testEmail.test(email)) {
			$.post('checkmail.php', {data: data}, function(data) {
				if (data == 'fail') {
					$("#email_msg").addClass("alert alert-danger alert-error").html('E-mail is already taken').fadeIn();
				}
			});
		} else {
			$("#email_msg").addClass("alert alert-danger alert-error").html('Incorrect E-mail').fadeIn();
		}

		



	});

});



