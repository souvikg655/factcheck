$(function() {

	$("form[name='search']").validate({
		rules: {
			country: "required",
			postal_code: "required",
			house_no: "required",
			address: "required",
		},

		messages: {
			country: "Please enter country name",
			postal_code: "Please enter postal code",
			house_no: "Please enter house number",
			address: "Please enter house number",
		},

		submitHandler: function(form) {
			form.submit();
		}
	});

});

$(function() {

	$("form[name='login']").validate({
		rules: {
			emailid: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
		},

		messages: {
			emailid: "Please enter a valid email address",
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
		},

		submitHandler: function(form) {
			form.submit();
		}
	});
	
});


$(function() {

	$("form[name='registration']").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			cpassword: {
				required: true,
				minlength: 5,
				//equalTo: "#password"
			},
			licence_image: "required"
		},

		messages: {

			name: "Enter Name",
			email: "Please enter a valid email address",
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			cpassword: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				//equalTo: "Please enter the same password as above"
			},
			licence_image: "Upload your ID proof"
		},

		submitHandler: function(form) {
			form.submit();
		}
	});
	
});

$(function() {

	$("form[name='add_home']").validate({
		rules: {
			title: "required",
			bedroom: "required",
			bathroom: "required",
			//property: "required",
			house_age: "required",
			area: "required",
			// beside_road:{
			// 	required: true,
			// },
			postal: "required",
			house_no: "required",
			address: "required",
		},

		messages: {
			title: "Please enter title",
			bedroom: "Please enter number of bedrooms",
			bathroom: "Please enter number of bathroom",
			//property: "Please enter property",
			house_age: "Please enter house age",
			area: "Please enter area",
			// beside_road: "Please select your choice",
			postal: "Please enter postal code",
			house_no: "Please enter house no",
			address: "Please enter address",
		},

		submitHandler: function(form) {
			form.submit();
		}
	});
	
});