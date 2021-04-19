// Positioning 
function positioning(){
    var headerheight = (parseFloat($('header').height())) /2,
        heroHeight = parseFloat($('#hero').height()),
        heroContentHeight = parseFloat($('.wrapper').height()),
        heroContentMargin = ((heroHeight - heroContentHeight) / 2) + headerheight /2
    $('.wrapper').css( "margin-top", heroContentMargin + "px" ).fadeIn()
}

$(window).on("load resize", function() {
    positioning()
})


$(document).ready(function(){
    
    // VIDEO TRANSCRIPT
    $('#videoTranscript').on("click", function(){
        $('#transcriptOverlay')
            .css("display","block")
            .animate({opacity: 10}, 300)
    })
    $('#transcriptClose').on("click", function(){
        $('#transcriptOverlay')
            .animate({opacity: 0}, 300, function(){
                $('#transcriptOverlay').css("display","none")
            })     
    })


    // BACK TO TOP FUNCTIONALITY ************************************************
    $('#backToTop').hide()

    $(window).scroll(function(){
		// Toggles the back to top button on scroll position
		if ($(this).scrollTop() > 450  &&  $(window).width() > 767){
            $('#backToTop').fadeIn()
		} else {
			$('#backToTop').fadeOut()
        }
        
        if ($(this).scrollTop() > 100){
            $('#scrollDown').fadeOut()
		} else {
			$('#scrollDown').fadeIn()
		}
	}) // end of function

	// Click function to animate to the top
	$('#backToTop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 800)
		return false
    })

    // NAV clicks
    $('#servicesLink').on("click", function(){
        $('#servicesLink').toggleClass("bgToggle")
        $('#dropdown').slideToggle()
    })
    $('#dropdown').mouseleave(function() {
        $('#servicesLink').toggleClass("bgToggle")
        $('#dropdown').slideToggle()
    })

    // Services click through
    $('#engineering').on("click", ()=> window.location = "engineering-services.php")
    $('#stamping').on("click", ()=> window.location = "precision-stamping.php")
    $('#machining').on("click", ()=> window.location = "cnc-machining.php")
    $('#washer').on("click", ()=> window.location = "world-washer-stamping.php")
    $('#robotic').on("click", ()=> window.location = "robotic-integration.php")

   
    // GALLERY MODULE ************************************************
    // Hide overlays for the gallery images
    $('.imageOverlay').hide()

    $('.galleryImg')
        .mouseenter(function() {
            $(this).find('.imageOverlay').fadeIn("fast")
        }).mouseleave(function() {
            $(this).find('.imageOverlay').fadeOut("fast")
        })
    

    // SERVICES MODULE ************************************************

    // Hide all service content to begin with, except first one
    $('#cncContent, #engineeringContent, #worldWasherContent, #additiveContent').hide()

    // Tab 1 button highlighted to begin with
    $('#tab1').css({'background-color' : '#fff'})
    $('#tab1').find('h5').css({'color' : '#ff6600'})

    // Function to hide all content
    function contentHide() {
        $('#precisionContent, #cncContent, #engineeringContent, #worldWasherContent, #additiveContent').hide()
    }

    // Click function to have style on tab once clicked
    $('.tab').click(function() {
        $(this).css({'background-color' : '#fff'})
        $(this).find('h5').css({'color' : '#ff6600'})
    })

    // Click functions to show each service
    $('#tab1').click(function() {
        contentHide()
        $('.tab').not($(this)).css({'background-color' : '#e9e9e9'})
        $('.tab').not($(this)).find('h5').css({'color' : '#575757'})
        $('#precisionContent').fadeIn(300)
    })

    $('#tab2').click(function() { 
        contentHide()
        $('.tab').not($(this)).css({'background-color' : '#e9e9e9'})
        $('.tab').not($(this)).find('h5').css({'color' : '#575757'})
        $('#cncContent').fadeIn(300)
    })

    $('#tab3').click(function() {
        contentHide()
        $('.tab').not($(this)).css({'background-color' : '#e9e9e9'})
        $('.tab').not($(this)).find('h5').css({'color' : '#575757'})
        $('#engineeringContent').fadeIn(300)
    })

    $('#tab4').click(function() { 
        contentHide()
        $('.tab').not($(this)).css({'background-color' : '#e9e9e9'})
        $('.tab').not($(this)).find('h5').css({'color' : '#575757'})
        $('#worldWasherContent').fadeIn(300)
    })

    $('#tab5').click(function() { 
        contentHide()
        $('.tab').not($(this)).css({'background-color' : '#e9e9e9'})
        $('.tab').not($(this)).find('h5').css({'color' : '#575757'})
        $('#additiveContent').fadeIn(300)
    })


    // GALLERY CATEGORIES ************************************************
    // Start with carpentry category button highlighted
    $('#all').css({'color' : '#ff6600'})

    // Click functions to show each gallery category
    $('#all').click(function() {
        categoryHide()
        clearColor()
        $('.Plant, .People, .Parts').fadeIn(300)
        $(this).css({'color' : '#ff6600'})
    })

    $('#plantCategory').click(function() {
        categoryHide()
        clearColor()
        $('.Plant').fadeIn(300)
        $(this).css({'color' : '#ff6600'})
    })

    $('#peopleCategory').click(function() {
        categoryHide()
        clearColor()
        $('.People').fadeIn(300)
        $(this).css({'color' : '#ff6600'})
    })

    $('#partsCategory').click(function() {
        categoryHide()
        clearColor()
        $('.Parts').fadeIn(300)
        $(this).css({'color' : '#ff6600'})
    })

    // Function to hide all case studies
    function categoryHide() {
        $('.Plant, .People, .Parts').hide()
    }

    // Clear button color back to original
    function clearColor() {
        $('#all, #plantCategory, #peopleCategory, #partsCategory').css({'color' : ''})
    }


    // CASE STUDIES PAGE ************************************************

    // Hide all images to begin with, except first one
    $('#img2, #img3, #img4').hide()

   // Function to hide all images
   function imageHide() {
        $('#img1, #img2, #img3, #img4').hide()
    }

    // Have image highlighted to begin with
    $('#imgBtn1').css({'opacity' : '1'})
    $('#imgBtn2, #imgBtn3, #imgBtn4').css({'opacity' : '0.4'})

    // Function to clear opacity on other thumbnails
    function styleClear() {
        $('.thumbOverlay img').not($(this)).css({'opacity' : '0.4'})
        $(this).find('.thumbOverlay img').css({'opacity' : '1'})
    }


    // Click functions to show each image
    $('#imgBtn1').click(function() {
        imageHide()
        styleClear()
        $('.mainCase #img1').fadeIn(300)
        $(this).css({'opacity' : '1'})
    })

    $('#imgBtn2').click(function() {
        imageHide()
        styleClear()
        $('.mainCase #img2').fadeIn(300)
        $(this).css({'opacity' : '1'})
    })

    $('#imgBtn3').click(function() {
        imageHide()
        styleClear()
        $('.mainCase #img3').fadeIn(300)
        $(this).css({'opacity' : '1'})
    })

    $('#imgBtn4').click(function() {
        imageHide()
        styleClear()
        $('.mainCase #img4').fadeIn(300)
        $(this).css({'opacity' : '1'})
    })

    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


}) // end ready

