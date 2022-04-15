<?php
	require_once 'authorize.php';
?>

<!doctype html>

<html>
	<head>
        <meta charset="UTF-8">
        <title>Payrailz Admin</title>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        
        <style>
			p { line-height: 1.5em; }
            h4 { font-size: 1.1em; }
		</style>
    </head>
    
    
    <body>
    	<!-- HEADER -->
        <?php include("1_inc/header-admin.php"); ?>

        <main id="admin">
            <!--Login-->
            <section id="insideContent" class="pb-0">
                <div id="adminContent" class="container">
                    <h2 class="text-center">Admin</h2>
                    <hr class="pb-4">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="text-center adminLinks">
                                <a href="testimonials.php">
                                    <img class="icons" src="../images/testimonials_icon.png">
                                    <h4>Testimonials</h4>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="text-center adminLinks">
                                <a href="#">
                                    <img class="icons" src="../images/FAQ_icon.png">
                                    <h4>FAQs</h4>
                                </a>
                            </div>
                        </div> -->
                        <div class="col-3">
                            <div class="text-center adminLinks">
                                <a href="careers.php">
                                    <img class="icons" src="../images/careers_icon.png">
                                    <h4>Careers</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include("1_inc/footer-admin.php"); ?>
        
    </body>

</html>