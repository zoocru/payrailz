<?php include("inc/email.php"); ?>

<!doctype html>

<html lang="en">
  <head>
        <meta name="robots" content="noindex">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="By seamlessly integrating with any and all funding sources, money goes where it’s supposed to go.">

      <title>Paywayz | Smart Routing Hub</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">   
      <style>
          main { margin-top: 0;}
      </style>  
  </head>


  <body>
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="products d-flex align-items-center">
        <div class="container-fluid">
        <div class="row">
            <!-- Main Copy -->
            <div class="col-10 offset-1">
                <h1>PayWayz</h1>
                <h2>Smart Payments Made&nbsp;Simple</h2>
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
                        <a href="/">Home</a><span class="separator">/
                        PayWayz
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <section id="actionInsights">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="miniLine"></div>
                    </div>
                </div>
            </div>
            <div class="container  border-top border-left">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 text-center">
                        <h1 class="pt-4">Your money goes where it’s supposed&nbsp;to&nbsp;go</h1>
                        <p class="mb-5">The PayWayz Smart Payment Routing Hub simplifies the payment process at every step along the way. By seamlessly integrating with any and all funding sources, you no longer need to spend time managing those relationships. With PayWayz, it happens automatically. Pair that with our ability to deliver payments via every distribution rail, and the result is a smarter experience that enables you to better meet the payment expectations of today’s&nbsp;consumers.</p>
                    </div>
                </div>
            </div>
            <div class="container border-top border-right">
                <div class="row">
                    <div class="col-10 offset-1 text-center">
                        <img id="AIImg" src="images/charts/PayWayz.svg" class="img-fluid mb-5" alt="">
                        <p class="mb-1">Want to learn more?</p>
                        <a id="button1" href="contact.php">
                            <button type="button" class="btn">Contact Us</button>  
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Smarter Payment Solutions -->
        <?php include("inc/smarter-payment-solutions.php"); ?>

    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>

  </body>

</html>