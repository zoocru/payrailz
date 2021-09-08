$(document).ready(function(){

    // BACK TO TOP FUNCTIONALITY ************************************************
    $('#backToTop').hide()

    $(window).scroll(function(){
        // if ($(window).width() > 0) {
        if ($(this).scrollTop() > 5){
            $('header').addClass("scrolledHeader")
        } else {
            $('header').removeClass("scrolledHeader") 
        }

        //Toggles the back to top button on scroll position
		if ($(this).scrollTop() > 200  &&  $(window).width() > 767){
            $('#backToTop').fadeIn()
		} else {
			$('#backToTop').fadeOut()
        }
	})

	// Click function to animate to the top
	$('#backToTop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 800)
		return false
    })

    // Dropdown nav clicks
    $('#servicesLink').on("click", function(){
        $('#servicesLink').toggleClass("bgToggle")
        $('#dropdown').slideToggle()
    })
    $('#dropdown').mouseleave(function() {
        $('#servicesLink').toggleClass("bgToggle")
        $('#dropdown').slideToggle()
    })



    $('#payAPersonBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill').hide()
        $('#payAPersonBtn').addClass('active2')
        $('#payAPerson').fadeIn(200)
    })

    $('#payAbillBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payAPerson').hide()
        $('#payAbillBtn').addClass('active2')
        $('#payABill').fadeIn(200)
    })



}) // end ready

