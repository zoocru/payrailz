<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else { 
        $id = "Did not originate from a products page.";
    }

    // For Contact form
    $your_email ='MGoldwasser@payrailz.com';
    $your_email2 ='JKern@payrailz.com';
    
	session_start();
    $errors = '';
    
    $reason = '';
    $name = '';
    $visitor_email = '';
    $company = '';
    $phone = '';
    $comments = '';
    

    if(isset($_POST['submit'])){
        $reason = isset($_POST['reason']) ? $_POST['reason'] : "";
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $visitor_email = isset($_POST['email']) ? $_POST['email'] : "";
        $company = isset($_POST['company']) ? $_POST['company'] : "";
        $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
        $comments = isset($_POST['comments']) ? $_POST['comments'] : "";  
        $comments = trim($comments);    

        if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0) $errors .= "\n The captcha code does not match!";
        
        if(empty($errors)) {
            //send the email
            $to = $your_email;
            $subject = "Payrailz contact form submission";
            //$from = $your_email;
            $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
            
            $body = "$name submitted the contact form:\n".
            "Reason: $reason \n".
            "Company: $company \n" .
            "Email: $visitor_email \n" .
            "Phone: $phone \n".
            "Comments\Question: $comments \n".
            "Came from page: $id \n".
            "IP: $ip\n";
            
            $headers = "From: $your_email \r\n";
            $headers .= "Reply-To: $visitor_email \r\n";
            
            mail($to, $subject, $body, $headers);
            mail($your_email2, $subject, $body, $headers);

            session_start();
            $_SESSION['contact_form'] = "Yes";
            
            header('Location: contact-thankyou.php');
        }
    }
?>

<!doctype html>

<html lang="en">
  <head>
    <meta name="robots" content="noindex">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Want to learn more about the latest developments at Payrailz? Reach out today via message, email or phone.">

      <title>Contact Us |Message, Email, Phone</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">    
      <style>
        small { 
            display: block;
            color: white; 
        }
        .captcha-group a:hover { 
            color: white !important;
            text-decoration: underline; 
        }
      </style>
  </head>


  <body>
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="contactUs d-flex align-items-center">
        <div class="container-fluid">
        <div class="row">
            <!-- Main Copy -->
            <div class="col-10 offset-1">
                <h1>Contact Us</h1>
                <h2>We’re all about making&nbsp;connections.</h2>
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
                        Contact Us
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
                        <h1 id="contactH1">Want to learn more?</h1>
                    </div>
                </div>
                <!-- Content -->
                <div class="row">
                    <!-- Form elements -->
                    <div class="col-12 col-md-7 col-lg-8">
                        <form id="form1" name="contact_form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Reason for Contacting (Optional) -->
                                    <div class="form-group reason-group">
                                        <label for="reason">Reason for Contacting (Optional)</label>
                                        <select class="form-control" name ="reason" id="reason">
                                            <option value="">-- Select Reason --</option>
                                            <option value="demo">Demo</option>
                                            <option value="digitalPayments">Digital Payments</option>
                                            <option value="cuRailz">CU Railz</option>
                                            <option value="careers">Careers</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <!-- Name -->
                                    <div class="form-group name-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value='<?php echo htmlentities($name) ?>'>
                                        <span class="help-block"></span>
                                    </div>
                                    <!-- Company -->
                                    <div class="form-group company-group">
                                        <label for="company">Bank, Credit Union, or Organization</label>
                                        <input type="text" name="company" class="form-control" id="company" value='<?php echo htmlentities($company) ?>'>
                                        <span class="help-block"></span>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group email-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value='<?php echo htmlentities($visitor_email) ?>'>
                                        <span class="help-block"></span>
                                    </div>
                                    <!-- Captcha -->
                                    <div class="form-group captcha-group mt-4">
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
                                                    $('html, body').animate({
                                                                scrollTop: $('#zip').offset().top
                                                            }, 'slow')
                                                </script>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Phone -->
                                    <div class="form-group phone-group">
                                        <label for="phone">Phone (Optional)</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value='<?php echo htmlentities($phone) ?>'>
                                        <span class="help-block"></span>
                                    </div>
                                    <!-- Comments -->
                                    <div class="form-group">
                                        <label for="comments">Comments/Questions (Optional)</label>
                                        <textarea class="form-control" name="comments" id="comments" rows="8">
                                            <?php echo htmlentities($comments) ?>
                                        </textarea>
                                    </div>
                                </div>
                                <!-- Submit -->
                                <div class="col-12 col-md-6">
                                    <a href="contact-thankyou.php">
                                        <button type="submit" id="submit" name="submit" class="btn2">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-12 col-md-5 col-lg-3 offset-lg-1">
                        <div id="contactInfo">
                            <div class="contactInfo">
                                <img src="images/email.svg" alt="">
                                <p><a href="mailto:info@payrailz.com" class="bold">info@payrailz.com<a></p>
                            </div>
                            <div class="contactInfo">
                                <img src="images/phone.svg" alt="">
                                <p><a href="tel:8604305200" class="bold">860.430.5200</a></p>
                            </div>
                            <div class="contactInfo2 d-flex justify-content-center">
                                <p id="socialIcons">
                                    <a href="#" target="_blank">
                                        <img src="images/linked-in.svg" class="socialIcon" alt="LinkedIn">
                                    </a>
                                    <a href="#" target="_blank">
                                        <img src="images/twitter.svg" class="socialIcon" alt="twitter">
                                    </a>
                                    <a href="#" target="_blank">
                                        <img src="images/facebook.svg" class="socialIcon" alt="facebook">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="smarterLine3"></div>
        </section>

        <!-- Careers -->
        <?php include("inc/about-module.php"); ?>
    </main>

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
    <script src="scripts/validation2.js"></script>

  </body>

</html>