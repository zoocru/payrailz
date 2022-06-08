$(document).ready(function(){

    $(window).on('load resize', function(){
        // Product page
        var $productTop = $('#productTop').height()
        var $productsSection = $('#productsSection').height()
        var $adTeasers = $('.adTeasers').height()
        var $totalPContentHeight = $productTop + $productsSection + $adTeasers
        $('#productLine1').height($totalPContentHeight + 170)

        // Products pages
        var $contentHeight = $('#productDetailPage').height()
        $('#productsLine').height($contentHeight + 139)


        // Payadvantage
        var $expectationsHeight = $('#expectations').height()
        var $paywayz = $('#paywayz').height()
        var $actionInsightsAd = $('#actionInsightsAd').height()
        var $totalPayadvantage1 = $expectationsHeight + $paywayz + $actionInsightsAd
        $('#payAdvantageLine').height($totalPayadvantage1 + 233)

    })

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
        $('#payAPerson, #transferMoney, #payALoan, #billerServices, #businessSolutions, #fraudMonitor, #actInsights').hide()
        $('#paybillsBtn').addClass('active2')
        $('#payABill').fadeIn(200)
    })

    $('#payAPersonBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payALoan, #transferMoney, #billerServices, #businessSolutions, #fraudMonitor, #actInsights').hide()
        $('#payAPersonBtn').addClass('active2')
        $('#payAPerson').fadeIn(200)
    })

    $('#transferMoneyBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #payALoan, #billerServices, #businessSolutions, #fraudMonitor, #actInsights').hide()
        $('#transferMoneyBtn').addClass('active2')
        $('#transferMoney').fadeIn(200)
    })

    $('#payALoanBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #billerServices, #businessSolutions, #fraudMonitor, #actInsights').hide()
        $('#payALoanBtn').addClass('active2')
        $('#payALoan').fadeIn(200)
    })

    $('#bsolBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #payALoan, #billerServices, #fraudMonitor, #actInsights').hide()
        $('#bsolBtn').addClass('active2')
        $('#businessSolutions').fadeIn(200)
    })

    $('#bserBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #payALoan, #businessSolutions, #fraudMonitor, #actInsights').hide()
        $('#bserBtn').addClass('active2')
        $('#billerServices').fadeIn(200)
    })

    $('#fraudBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #payALoan, #businessSolutions, #billerServices, #actInsights').hide()
        $('#fraudBtn').addClass('active2')
        $('#fraudMonitor').fadeIn(200)
    })

    $('#actionInsightsBtn').on('click', function(){
        $('.product').removeClass('active2')
        $('#payABill, #payAPerson, #transferMoney, #payALoan, #businessSolutions, #billerServices, #fraudMonitor').hide()
        $('#actionInsightsBtn').addClass('active2')
        $('#actInsights').fadeIn(200)
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

