$('#fname').focusout(function(){
	if ($('#fname').val().length == 0 ) {
		$('.fname-group .help-block').text('Please enter your first name.')
		$('.fname-group').attr({ class:"has-error form-group fname-group" })
	} else {
		$('.fname-group .help-block').text('')
		$('.fname-group').attr({ class:"form-group fname-group" })
	}
})

$('#lname').focusout(function(){
	if ($('#lname').val().length == 0 ) {
		$('.lname-group .help-block').text('Please enter your last name.')
		$('.lname-group').attr({ class:"has-error form-group lname-group" })
	} else {
		$('.lname-group .help-block').text('')
		$('.lname-group').attr({ class:"form-group lname-group" })
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
	
// function for validating email address
function validateEmail(sEmail) {
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
	if (filter.test(sEmail)) {
		return true
	} else {
		return false
	}
}



// submit prevention
$('#submit').click(function(submit){
	
	let proceedWithSubmission = true
	
	if ($('#fname').val().length == 0 ) {
		$('.fname-group .help-block').text('Please enter your first name.')
		$('.fname-group').attr({ class:"has-error form-group fname-group" })
		submit.preventDefault()
		proceedWithSubmission = false
	} else {
		$('.fname-group .help-block').text('')
    }
    
    if ($('#lname').val().length == 0 ) {
		$('.lname-group .help-block').text('Please enter your last name.')
		$('.lname-group').attr({ class:"has-error form-group lname-group" })
		submit.preventDefault()
		proceedWithSubmission = false
	} else {
		$('.lname-group .help-block').text('')
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

function refreshCaptcha() {
    var img = document.images['captchaimg']
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000
}