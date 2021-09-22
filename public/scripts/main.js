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



    // PRODUCTS
    $('#paybillsBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payAPerson, #transferMoney, #creditPayPro, #billerServices, #businessSolutions').hide()
        $('#payAbillBtn').addClass('active2')
        $('#payABill').fadeIn(200)
    })

    $('#payAPersonBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #creditPayPro, #transferMoney, #billerServices, #businessSolutions').hide()
        $('#payAPersonBtn').addClass('active2')
        $('#payAPerson').fadeIn(200)
    })

    $('#transferMoneyBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #creditPayPro, #billerServices, #businessSolutions').hide()
        $('#transferMoneyBtn').addClass('active2')
        $('#transferMoney').fadeIn(200)
    })

    $('#ccpBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #billerServices, #businessSolutions').hide()
        $('#ccpBtn').addClass('active2')
        $('#creditPayPro').fadeIn(200)
    })


    $('#bsolBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #creditPayPro, #billerServices').hide()
        $('#bsolBtn').addClass('active2')
        $('#businessSolutions').fadeIn(200)
    })

    $('#bserBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #creditPayPro, #businessSolutions').hide()
        $('#bserBtn').addClass('active2')
        $('#billerServices').fadeIn(200)
    })
    
    // Hover on team photos on team teaser
    $(function(){
        $('.teamInfoContent').hover(function() {
          $(this).addClass('teamActive')
        }, function() {
          $(this).removeClass('teamActive')
        })
    })

    $('#teamPics img').on('click', function(){
        $data = $(this).data('name')
        $('#teamPics img').removeClass('teamActive2')
        $(this).addClass('teamActive2')
        $('#bios div').removeClass('teamBioActive')
        $('.' + $data).addClass('teamBioActive')
    })

   

})

