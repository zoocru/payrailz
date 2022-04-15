// FORM VALIDATION ==========================
// focusout ids

$('#email').focusout(function(){
    if ($('#email').val().length == 0 ) {
        $('.email-group').attr({ class:"has-error form-group email-group" })
    } else {
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
    

    let sEmail = $('#email').val()
    if ($.trim(sEmail).length == 0) {
        $('.email-group').attr({ class:"has-error form-group email-group" })
        submit.preventDefault()
        proceedWithSubmission = false
    }
    if (validateEmail(sEmail)) { // email is valid
        $('.email-group .help-block').text('') 
    } else { // not valid
        $('.email-group').attr({ class:"has-error form-group email-group" })
        submit.preventDefault()
        proceedWithSubmission = false
    }
    
    if (proceedWithSubmission === true) $('#form').submit()
})