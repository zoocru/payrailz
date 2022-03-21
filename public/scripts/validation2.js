// FORM VALIDATION ==========================
// focusout ids

$('#email').focusout(function(){
    if ($('#email').val().length == 0 ) {
        $('.email-group .help-block').text('Enter your email.')
        $('.email-group').attr({ class:"has-error form-group email-group" })
    } else {
        $('.email-group .help-block').text('')
        $('.email-group').attr({ class:"form-group email-group" })
    }
})


//function for validating email address
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true
    } else {
        return false
    }
}

//submit prevention
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

    let sEmail = $('#email').val()
    if ($.trim(sEmail).length == 0) {
        $('.email-group .help-block').text('Please enter a valid email.')
        $('.email-group').attr({ class:"has-error form-group email-group" })
        submit.preventDefault()
        proceedWithSubmission = false
    }
    if (validateEmail(sEmail)) { // email is valid
        $('.email-group .help-block').text('') 
    } else { // not valid
        $('.email-group .help-block').text('Please enter a valid email.')
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