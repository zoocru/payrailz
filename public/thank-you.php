<?php
    session_start();
    $filled_out_form = isset($_SESSION['filled_out_form']) ? $_SESSION['filled_out_form'] : "";

	if ($filled_out_form === "") {
		header("Location: contact.php");
		exit;
	}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Metal Fabricator Newburyport, MA 01950. Robotic Integrator, Precision Stamping, System Integration, CNC Machining, Engineering Services, Manufacturing.">

    <title>Crystal Engineering - Contact Us</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- For Gallery -->
    <link rel="stylesheet" href="css/lightboxgallery.css">
    <link rel="stylesheet" href="css/gallery-style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173134071-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173134071-1');
    </script>
</head>

<body>
    <!--Back to Top-->
    <div id="backToTop"> 
        <a href="#"><img src="images/back-to-top.svg" alt="back to top"></a> 
    </div>
  
    <?php include("inc/header.php"); ?>
  
    <main>
        <!-- HERO -->
        <section id="heroContact">
            <div class="insideHeroContent container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h1 class="text-uppercase">Contact Us - Thank You</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BREADCRUMBS -->
        <section id="breadcrumb">
            <div class="container">
                <div class="col-md-12 row pl-0">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>/&nbsp;&nbsp;
                        <li><a href="contact.php">Contact Us</a></li>
                        <li class="active">Thank You</li>
                    </ol>
                </div>
            </div>
        </section>
      
        <!-- PAGE CONTENT -->
        <section id="insideContent">
            <div class="container pr-0">
                <div class="row justify-content-center">
                    <div class="text-center col-md-8 pb-4">
                        <h2>Thank You!</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <!--Main Content-->
                    <div id="formContent" class="col-md-7">
                        <h4>Thank you for contacting us. Someone will reach out to you shortly.</h4>
                    </div>

                    <!--CONNECT WITH US-->
                    <div class="sidebarContent col-md-5 pl-md-5">
                        <!--<img src="images/contact-image.jpg" class="img-fluid" alt="Crystal Engineering Building">-->
                        <h4 style="margin-top: 0;">Connect With Us</h4>
                        <p>
                            <span class="boldText">Phone:</span> (978) 465-7007<br>
                            <span class="boldText">Fax:</span> (978) 465-9977
                        </p>
                        <p>
                            <span class="boldText">Address:</span><br>
                            2 Stanley Tucker Drive<br>
                            Newburyport, MA 01950
                        </p>
                        <p>
                            <span class="boldText">Email:</span><br>
                            <a href="mailto:info@crystalengineering.com">info@CrystalEngineering.com</a>
                        </p>
                    </div>
                </div>

                    
            </div>

            <!--MAP-->
            <div class="row">
                <div id="contactMap" class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2927.268634069173!2d-70.89866368397571!3d42.80380897915966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e2e18e39111cf3%3A0x1536b53edc08c740!2s2+Stanley+Tucker+Dr%2C+Newburyport%2C+MA+01950!5e0!3m2!1sen!2sus!4v1547650706148" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <!--</div>-->
        </section>

        <!--GALLERY MODULE-->
        <?php include("inc/gallery-module.php"); ?>

        <!--ABOUT CTA-->
        <?php include("inc/about-cta-module.php"); ?>

        <!--CLIENT MODULE-->
        <?php include("inc/clients-module.php"); ?>
      
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>
    <script src="scripts/validation.js"></script>

</body>

</html>