
// Validate form

$(document).ready(function () {

    $('#myform').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
			email: {
				email: true
			},
			subject: {
				required: true
			},
			mesaj: {
				required: true
			}

        }
    });

});

// scroll navbar

var zero = 0;

$(document).ready(function () {
	$(window).on('scroll', function () {
		$('header').toggleClass('hide', $(window).scrollTop() > zero);
		zero = $(window).scrollTop();
	});
});
















