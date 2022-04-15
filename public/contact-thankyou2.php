<!-- <?php
	session_start();
	$user_id = isset($_SESSION['contact_form2']) ? $_SESSION['contact_form2'] : 0;

	if ($user_id === 0) {
		header("Location: index.php");
		exit;
	}
?> -->

<!doctype html>

<html lang="en">
  <head>
  <meta name="robots" content="noindex">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Want to learn more about the latest developments at Payrailz? Reach out today via message, email or phone.">

      <title>Newsletter | Email </title>

      <link rel="stylesheet" href="css/bootstrap.min.css">    
  </head>


  <body>
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="contactUs d-flex align-items-center">
        <div class="container-fluid">
        <div class="row">
            <!-- Main Copy -->
            <div class="col-xs-12 col-md-6 offset-lg-1 col-lg-6">
                <h1>Contact Us</h1>
                <h2>We're all about making&nbsp;connections.</h2>
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
                        <a href="contact.php">Contact Us</a><span class="separator">/</span>
                        Thank you
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <section id="contact">
            <div id="contactContent" class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 id="contactH1">Thank you for subscribing!</h1>
                    </div>
                </div>
                <!-- Content -->
                <div class="row">
                    <!-- Form elements -->
                    <div class="col-12 col-md-8">
                        <p>Keep an eye on your inbox for exciting updates on our ever-evolving digital payments&nbsp;solutions.</p>

                        <p>To ensure delivery of future Payrailz updates, please add <a href="mailto:info@payrailz.com" class="bold">info@payrailz.com<a> to your contact&nbsp;list.</p>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-12 col-md-3 offset-md-1">
                        <div id="contactInfo">
                            <div class="contactInfo">
                                <img src="images/email.svg" alt="">
                                <p><a href="mailto:info@payrailz.com" class="bold">info@payrailz.com<a></p>
                            </div>
                            <div class="contactInfo">
                                <img src="images/phone.svg" alt="">
                                <p><a href="tel:8604305200" class="bold">800.555.1212</a></p>
                            </div>
                            <div class="contactInfo2 d-flex justify-content-center">
                                <p id="socialIcons">
                                    <a href="https://www.linkedin.com/company/payrailz/" target="_blank">
                                        <img src="images/linked-in.svg" class="socialIcon" alt="LinkedIn">
                                    </a>
                                    <a href="https://twitter.com/payrailz" target="_blank">
                                        <img src="images/twitter.svg" class="socialIcon" alt="twitter">
                                    </a>
                                    <a href="https://www.facebook.com/Payrailz/" target="_blank">
                                        <img src="images/facebook.svg" class="socialIcon" alt="facebook">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Careers -->
        <?php include("inc/about-module.php"); ?>
    </main>

    <!--FOOTER-->
    <div id="footerTopBorder">
      <div id="footerBorder"></div>
    </div>
    <footer id="footer">
      <div id="footerContent" class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <a href="index.php">
                <img src="images/logo.svg" id="footerLogo" alt="Payrailz">
            </a>
          </div>
          <div class="col-md-9">
            <div id="footerLine1"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div id="footerAddress">
              <p class="green">
                <a href="tel:8604305200">
                  <img src="images/phone.png" alt="Call Payrailz" style="padding-right: 8px; width: 23px;">
                  860.430.5200
                </a>  
              </p>
              <p><a href="mailto:info@payrailz.com">info@payrailz.com</a> </p>
              <p id="socialIcons">
                Follow Us <br>
                <a href="https://www.linkedin.com/company/payrailz/" target="_blank">
                    <img src="images/linked-in.svg" class="socialIcon" alt="LinkedIn">
                </a>
                <a href="https://twitter.com/payrailz" target="_blank">
                    <img src="images/twitter.svg" class="socialIcon" alt="twitter">
                </a>
                <a href="https://www.facebook.com/Payrailz/" target="_blank">
                    <img src="images/facebook.svg" class="socialIcon" alt="facebook">
                </a>
              </p>
            </div>
            <hr class="d-block d-md-none">
          </div>
          <div class="col-12 col-md-8 offset-md-1 footerNav">
            <div class="row">
              <div class="col-4">
                <ul class="list-unstyled">
                  <li><a href="payrailz_advantage.php">Payrailz Advantage</a></li>
                  <li><a href="products.php">Products</a></li>
                  <li><a href="smart_routing_hub.php">Paywayz Smart Routing Hub</a></li>
                  <li><a href="action_insights.php">Action Insights</a></li>
                  <li><a href="advanced_user_experience.php">Advanced User Experience</a></li>
                </ul>
              </div>
              <div class="col-4">
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="team.php">Our Team</a></li>
                  <li><a href="board_investors.php">Board & Investors</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-4">
                <ul class="list-unstyled">
                  <li><a href="careers.php">Careers</a></li>
                  <li><a href="/resources">Resources: News & Events</a></li>
                  <li><a href="curailz.php">Curailz</a></li>
                  <li><a href="testimonials.php">Testimonials</a></li>
                </ul>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <div id="footerLines">
        <img src="images/footer-lines.png" alt="">
      </div>
    </footer>

    <section id="subFooter">
      <div class="container">
        <div class="row">
        <div class="col-md-11">
          <p>© <?php echo date("Y"); ?> &nbsp;Payrailz. All Rights Reserved.</p> 
          <!-- <a href="privacy.php">Privacy Policy</a> | 
          <a href="Terms & Conditions">Terms & Conditions</a> -->
        </div>
      </div>
      </div>
    </section>

    <!-- JS Scripts -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>

  </body>

</html>