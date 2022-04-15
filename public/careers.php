<?php
	require('db.php');

	$sql = "SELECT * FROM careers
			ORDER by dateModified ASC";
    $result = mysqli_query( $con, $sql );
	
	mysqli_close( $con );
?>

<?php include("inc/email.php"); ?>

<!doctype html>

<html lang="en">
  <head>
    <meta name="robots" content="noindex">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Join our team of passionate, tech-focused individuals working together to shape the future of bill pay">

      <title>Careers at Payrailz | Opportunities for success</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">    

      <style>
          main { 
            margin-top: -15px; 
          }
      </style>
  </head>


  <body>
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="careers d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <!-- Main Copy -->
                <div class="col-10 offset-1">
                    <h1>Careers</h1>
                    <h2>Spend your future shaping the&nbsp;future.</h2>
                </div>
            </div>
        </div>
      </section>
      <section id="heroLines2">
        <img src="images/hero-gray-lines.png" alt="">
        <div id="heroGreenLinesInside">
            <div id="heroGreenLines2"></div>
            <div id="heroGreenLines3"></div>
        </div>
      </section>
    </div>

    <div id="breadcrumbs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-11 offset-lg-1">
                    <p>
                        <a href="/">Home</a><span class="separator">/</span>
                        Careers
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <main style="position: relative;">
        <section id="about" style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1">
                        <h1>Get ready to make a&nbsp;difference.</h1>
                        <p>At Payrailz, we believe that satisfied employees deliver superior performance. To achieve this, we’re committed to creating a diverse, family environment where our employees feel valued and welcomed. Today, our team is making a real difference in the world in a positive, memorable way, and we have our passionate, committed team to thank for that. If making a difference is what motivates you, then check us out&nbsp;today!</p>
                        <p>Send your resume to <a href="mailto:info@payrailz.com" target="_blank" id="infoEmail"> info@payrailz.com</a> and we’ll contact you regarding next&nbsp;steps.</p>

                        <small>Payrailz is an equal opportunity employer.</small>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section id="curailz">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-12 col-md-6 offset-md-2">
                        <div id="jobs">
                            <section>
                                <?php
                                    if( $result ) {
                                        while( $row = mysqli_fetch_array( $result ) ) {
                                ?>
                                    <div class="row no-gutters careerTitle">
                                        <div class="col-11">
                                            <h2><?=$row['title']?></h2>
                                        </div>
                                        <div class="col-1">
                                            <img src="../images/faqArrow.svg" class="careerArrow rotate-reset">
                                        </div>
                                    </div>
                                    <div class="careerDetail">
                                        <?=$row['overview']?>
                                
                                        <p class="mt-4">Send your resume to <a href="mailto:info@payrailz.com" target="_blank"> info@payrailz.com</a> and we’ll contact you regarding next&nbsp;steps.</p>

                                        <small>Payraliz is an equal opportunity&nbsp;employer.</small> 
                                    </div>
                                <?php
                                        }
                                    }
                                ?>
                            </section>
                        </div>
                    </div>
                    <div class="col-12 offset-md-1 col-md-3 d-none d-md-block" style="padding-right: 0 !important;">
                        <div id="womanPA">
                            <img src="images/interview.jpg" class="img-fluid shadow2" alt="About Payrailz">
                        </div>
                    </div>
                </div>
            </div>
            <div id="smarterLine2"></div>
        </section>
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>

  </body>

</html>