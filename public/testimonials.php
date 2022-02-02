<?php
	require('db.php');

    $sql = "SELECT * FROM testimonials
          WHERE active = 1 AND featured != 1
          ORDER by id DESC";
    $result = mysqli_query( $con, $sql );
	
	mysqli_close( $con );
?>

<!doctype html>

<html lang="en">
  <head>
    <meta name="robots" content="noindex">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Hear about the Payrailz experience and advantages from fellow financial industry professionals.">

      <title>Testimonials | What our customers are saying</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">    
  </head>

  <body>
    
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="testimonialBG d-flex align-items-center">
        <div class="container-fluid">
        <div class="row">
            <!-- Main Copy -->
            <div class="col-xs-12 col-md-6 offset-lg-1 col-lg-6">
                <h1>Testimonials</h1>
                <h2>What our customers are&nbsp;saying.</h2>
            </div>
        </div>
        </div>
      </section>
      <section id="heroLines2">
        <img src="images/hero-gray-lines.png" alt="">
      </section>
    </div>

    <div id="breadcrumbs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-11 offset-lg-1">
                    <p>
                        <a href="/">Home</a><span class="separator">/</span>
                        Testimonials
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <section id="testimonial">
            <div id="testimonialContent" class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Hear from the people who stood in&nbsp;your&nbsp;shoes.</h1>
                    </div>
                </div>
                <!-- Content -->
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="row" id="testimonials">
                        
                        <?php
                            if( $result ) {
                                while( $row = mysqli_fetch_array( $result ) ) {
                        ?>

                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <div class="testimonial shadow">
                                            <img src="../uploads/<?=$row['imageUrl']?>" alt="<?=$row['altTag']?> class="img-fluid">
                                            <?=$row['testimonial']?>
                                            <h2><?=$row['author']?></h2>
                                            <h3><?=$row['authorTitle']?></h3>
                                            <h4><?=$row['company']?></h4>
                                        </div>
                                    </div>
                        <?php
                                } // End of While loop
                            } // End of if
                        ?>

                            <!-- <div class="col-12 col-md-6 col-xxl-4">
                                <div class="testimonial shadow">
                                    <p>“I selected Payrailz – twice – as a trusted partner with a best of breed digital payments platform. I believe in Payrailz and love the vision that I have seen come to fruition over the past few years. The Payrailz platform is so much more than just Bill Pay, A2A and P2P. It is evolving with new innovations using AI for a a superior member&nbsp;experience.”</p>
                                    <h2>Ted Hassenfelt</h2>
                                    <h3>CIO</h3>
                                    <h4>Publix Employees Federal Credit&nbsp;Union</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="testimonial shadow">
                                    <p>“Having gone live with Payrailz, I can easily say this was one of the best conversion processes I have been involved with over the last 30 years. The teams from both sides were very responsive and dealt with any issues. Directly and quickly. We made the right choice in partners from both a partner standpoint and as an&nbsp;investor.”</p>
                                    <h2>Wade E. Bruendl</h2>
                                    <h3>SVP/Chief Digital Officer</h3>
                                    <h4>Meritrust Credit Union</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="testimonial shadow">
                                    <p>“At Purdue Federal, we live out the credit union philosophy of ‘people helping people’ and to help our members, providing innovative payment capabilities is&nbsp;vital.</p>
                                    <p>Purdue Federal and Payrailz have a shared vision to provide credit union members with payments solutions that meet their current and future needs to help set them up for financial&nbsp;success.”</p>
                                    <h2>Purdue Federal Credit&nbsp;Union</h2>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="testimonial shadow">
                                    <p>“At Liberty Bank we pride ourselves on our ability to drive continuous innovation in our digital engagement. Our goal isn’t just to keep pace with current trends; our goal is to offer a money movement experience that sets us apart from the abundance of competition, from large money center banks, to the new Fintech players. Payrailz’ revolutionary payments platform will be the foundation for Liberty to execute on our payments vision now and into the&nbsp;future.” </p>
                                    <h2>David Mitchell</h2>
                                    <h3>EVP, GM, and Chief Digital&nbsp;Officer</h3>
                                    <h4>Liberty Bank</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-4">
                                <div class="testimonial shadow">
                                    <p>“We are excited to support such a forward-thinking company that is disrupting the payments industry. Payrailz goes beyond a typical payments company, offering advanced technology that sets it apart from the current payments solutions offered by the industry. Payrailz’s approach to payments will give consumers an unmatched and more engaging experience compared to what is available in the marketplace&nbsp;today.”</p>
                                    <h2>James D. “Jay” Dreibelbis</h2>
                                    <h3>President and COO</h3>
                                    <h4>Woodforest National Bank</h4>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Careers -->
        <?php include("inc/about-module.php"); ?>
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>
    <script src="scripts/validation.js"></script>

  </body>

</html>