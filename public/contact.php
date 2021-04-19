<?php
    $your_email ='rschimoler@crystalengineering.com';// <<=== update to your email address

	session_start();
    $errors = '';
    $name = '';
    $visitor_email = '';
    $description = '';

    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $visitor_email = isset($_POST['email']) ? $_POST['email'] : "";
        $description = isset($_POST['description']) ? $_POST['description'] : "";

        if(empty($_SESSION['6_letters_code'] ) ||
            strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0) $errors .= "\n The captcha code does not match!";
        
        if(empty($errors)) {
            //send the email
            $to = $your_email;
            $subject = "Crystal Engineering contact form submission";
            //$from = $your_email;
            $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
            
            $body = "$name submitted the contact form:\n".
            "Email: $visitor_email \n" .
            "Description: $description \n".
            "IP: $ip\n";
            
            $headers = "From: $your_email \r\n";
            $headers .= "Reply-To: $visitor_email \r\n";
            
            mail($to, $subject, $body, $headers);

            session_start();
            $_SESSION['filled_out_form'] = "Yes";
            
            header('Location: thank-you.php');
        }
    }

    $galleryCount = 1;
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
            <div class="container">
                <div class="insideHeroContent">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <h1 class="text-uppercase">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BREADCRUMBS -->
        <section id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pl-0">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>/&nbsp;&nbsp;
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- PAGE CONTENT -->
        <section id="insideContent">
            <div class="container pr-0">
                <div class="row justify-content-center">
                    <div class="text-center col-md-8 pb-4">
                        <h2>Get in Touch</h2>
                        <p>We are a group of passionate and experienced people seeking to transform the world of manufacturing. 
                        We welcome your comments, questions and inquiries.</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <!--Main Content-->
                    <div id="formContent" class="col-md-7">
                        <h4 class="pt-0">Message Us</h4>
                        <p>Please fill out the form below to contact us for questions or more information.</p>
                        <form id="form1" name="contact_form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
                            <div class="form-group name-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value='<?php echo htmlentities($name) ?>'>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group email-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" value='<?php echo htmlentities($visitor_email) ?>'>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="9"><?php echo htmlentities($description) ?></textarea>
                            </div>

                            <!-- Captcha -->
                            <div class="form-group2 captcha-group">
                                <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                                <label for="6_letters_code">Enter Code</label>
                                <small>Can't read the image? <a href='javascript: refreshCaptcha();'>Click here</a> to refresh</small>
                                <input type="text" name="6_letters_code" class="form-control" id="captcha">
                                <span class='help-block'></span>
                                <?php
                                    if(!empty($errors)){
                                        echo "<span class='help-block' style='color: #a94442'>" . $errors . "</span>";
                                ?>
                                        <script>
                                            $('.captcha-group').attr({ class:"has-error form-group2 captcha-group" })    
                                            $('html, body').animate({ scrollTop: $('#description').offset().top }, 'slow')
                                        </script>
                                <?php
                                    }
                                ?>
                            </div>

                            <button type="submit" id="submit" name="submit" class="btn2">Submit</button>
                        </form>
                    </div>
                    <!--CONNECT WITH US-->
                    <div class="sidebarContent col-md-5 pl-md-5">
                        <img src="images/contact-image.jpg" class="img-fluid" alt="Crystal Engineering Building">
                        <h4>Connect With Us</h4>
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
                <div class="row no-gutters">
                    <div id="contactMap" class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2927.268634069173!2d-70.89866368397571!3d42.80380897915966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e2e18e39111cf3%3A0x1536b53edc08c740!2s2+Stanley+Tucker+Dr%2C+Newburyport%2C+MA+01950!5e0!3m2!1sen!2sus!4v1547650706148" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            
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
    <script src="http://www.crystalengineering.com/scripts/lightboxgallery-min.js"></script>
    <script>
        jQuery(function($) {
            $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
              event.preventDefault();
              $(this).lightboxgallery({
                  showCounter: true,
                  showTitle: true,
                  showDescription: true
                  })
            })
        })
    </script>

</body>

</html>