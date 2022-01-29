$(document).ready(function(){

    // BACK TO TOP FUNCTIONALITY ************************************************
    $('#backToTop').hide()

    $(window).scroll(function(){
        // if ($(window).width() > 0) {
        if ($(this).scrollTop() > 5){
            //$('header').addClass("scrolledHeader")
            $('header#mainHeader').addClass("scrolledHeader")
        } else {
            //$('header').removeClass("scrolledHeader") 
            $('header#mainHeader').removeClass("scrolledHeader") 
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
        $('#payAPerson, #transferMoney, #creditPayPro, #billerServices, #businessSolutions, #accountFunding').hide()
        $('#paybillsBtn').addClass('active2')
        $('#payABill').fadeIn(200)
    })

    $('#payAPersonBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #creditPayPro, #transferMoney, #billerServices, #businessSolutions, #accountFunding').hide()
        $('#payAPersonBtn').addClass('active2')
        $('#payAPerson').fadeIn(200)
    })

    $('#transferMoneyBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #creditPayPro, #billerServices, #businessSolutions, #accountFunding').hide()
        $('#transferMoneyBtn').addClass('active2')
        $('#transferMoney').fadeIn(200)
    })

    $('#ccpBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #billerServices, #businessSolutions, #accountFunding').hide()
        $('#ccpBtn').addClass('active2')
        $('#creditPayPro').fadeIn(200)
    })

    $('#bsolBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #creditPayPro, #billerServices, #accountFunding').hide()
        $('#bsolBtn').addClass('active2')
        $('#businessSolutions').fadeIn(200)
    })

    $('#bserBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #creditPayPro, #businessSolutions, #accountFunding').hide()
        $('#bserBtn').addClass('active2')
        $('#billerServices').fadeIn(200)
    })

    $('#accountFundingBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #creditPayPro, #businessSolutions, #billerServices').hide()
        $('#accountFundingBtn').addClass('active2')
        $('#accountFunding').fadeIn(200)
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

    // FAQs & Careers ==========================
    // FAQs 
    $('.faqQuestion').on('click', function() {
        $(this).next(".faqAnswer").slideToggle(500)
        $(this).find('.faqArrow').toggleClass('rotate')
        $(this).find('.faqArrow').toggleClass('rotate-reset')
    })
    // Careers
    $('.careerTitle').on('click', function() {
        $(this).next(".careerDetail").slideToggle(500)
        $(this).find('.careerArrow').toggleClass('rotate')
        $(this).find('.careerArrow').toggleClass('rotate-reset')
    })




    function hideTestimonials() {
        $('#content1, #content2, #content3').fadeOut().css("z-index", "-1")
        $('#indicator1, #indicator2, #indicator3').removeClass('active')
    }
    $('#indicator1').on('click', function(){
        hideTestimonials()
        $(this).addClass('active')
        $('#content1').css("z-index", "2").fadeIn()
    })

    $('#indicator2').on('click', function(){
        hideTestimonials()
        $(this).addClass('active')
        $('#content2').css("z-index", "2").fadeIn()
    })

    $('#indicator3').on('click', function(){
        hideTestimonials()
        $(this).addClass('active')
        $('#content3').css("z-index", "2").fadeIn()
    })

})

