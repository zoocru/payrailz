// Footer email signup form

// $('#email2').focusout(function(){
// 	if ($('#email2').val().length == 0 ) {
// 		$('.email2-group .help-block').text('Please enter your email.')
// 		$('.email2-group').attr({ class:"has-error form-group email2-group"})	
// 	} else {
// 		$('.email2-group .help-block').text('')
// 		$('.email2-group').attr({ class:"form-group email2-group"})	
// 	}
// })

// submit prevention
$('#submit2').click(function(submit){
	
	let proceedWithSubmission1 = true
	
	var sEmail2 = $('#email2').val()
	// Check if email field is empty
	if ($.trim(sEmail2).length == 0) {
		$('.email2-group .help-block').text('Please enter a VALID email.')
		$('.email2-group').attr({ class:"has-error form-group email2-group" })
		submit.preventDefault()
		proceedWithSubmission1 = false;
	}
	
	if (validateEmail(sEmail2)) {
		// email is valid
		proceedWithSubmission1 = true
	} else { // not valid
		proceedWithSubmission1 = false
	}
	
	if (proceedWithSubmission1 === true) $('#form2').submit()

})





// =============================================================
// Contact page form
$('#name').focusout(function(){
	if ($('#name').val().length == 0 ) {
		$('.name-group .help-block').text('Please enter your name.')
		$('.name-group').attr({ class:"has-error form-group name-group" })
	} else {
		$('.name-group .help-block').text('')
		$('.name-group').attr({ class:"form-group name-group" })
	}
})

$('#company').focusout(function(){
	if ($('#company').val().length == 0 ) {
		$('.company-group .help-block').text('Please enter your company name.')
		$('.company-group').attr({ class:"has-error form-group company-group" })
	} else {
		$('.company-group .help-block').text('')
		$('.company-group').attr({ class:"form-group company-group" })
	}
})

$('#email').focusout(function(){
	if ($('#email').val().length == 0 ) {
		$('.email-group .help-block').text('Please enter your email.')
		$('.email-group').attr({ class:"has-error form-group email-group"})	
	} else {
		$('.email-group .help-block').text('')
		$('.email-group').attr({ class:"form-group email-group"})	
	}
})

$('#captcha').focusout(function(){
    if ($('#captcha').val().length == 0 ) {
        $('.captcha-group .help-block').text('Please enter code.')
        $('.captcha-group').attr({ class:"has-error form-group2 captcha-group" })
    } else {
        $('.captcha-group .help-block').text('');
        $('.captcha-group').attr({ class:"form-group2 captcha-group" })	
    }
}) 

// submit prevention
$('#submit').click(function(submit){
	
	let proceedWithSubmission = true
	
	if ($('#name').val().length == 0 ) {
		$('.name-group .help-block').text('Please enter your name.')
		$('.name-group').attr({ class:"has-error form-group name-group" })
		submit.preventDefault()
		proceedWithSubmission = false
	} else {
		$('.name-group .help-block').text('')
	}

	if ($('#company').val().length == 0 ) {
		$('.company-group .help-block').text('Please enter your company name.')
		$('.company-group').attr({ class:"has-error form-group company-group" })
		submit.preventDefault()
		proceedWithSubmission = false
	} else {
		$('.name-group .help-block').text('')
	}
	
	var sEmail = $('#email').val();
	if ($.trim(sEmail).length == 0) {
		$('.email-group .help-block').text('Please enter a VALID email.')
		$('.email-group').attr({ class:"has-error form-group email-group" })
		submit.preventDefault()
		proceedWithSubmission = false;
	}
	
	if (validateEmail(sEmail)) {
		// email is valid
		$('.l-name-group .help-block').text('');
	} else { // not valid
		$('.email-group .help-block').text('Please enter a VALID email.')
		$('.email-group').attr({ class:"has-error form-group email-group" })
		submit.preventDefault()
		proceedWithSubmission = false
	}
	
	if (proceedWithSubmission === true) $('#form1').submit()

})



//  ============================================================
// Utilities

// function for validating email address
function validateEmail(sEmail) {
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
	if (filter.test(sEmail)) {
		return true
	} else {
		return false
	}
}

// Function for refreshing Captcha
function refreshCaptcha() {
    var img = document.images['captchaimg']
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000
}