<?php
    if(isset($_GET['id'])) $id = $_GET['id'];
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
                        <form id="form1" name="contact_form" method="post" action="contact-thankyou.php" >
                            <input type="hidden" id="pageFrom" name="pageFrom" value="<?=$id?>">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group reason-group">
                                        <label for="reason">Reason for Contacting (Optional)</label>
                                        <select class="form-control" id="reasons">
                                            <option value="">-- Select Reason --</option>
                                            <option value="payBills">Pay Bills</option>
                                            <option value="payAPerson">Pay A Person</option>
                                            <option value="transferMoney">Transfer Money</option>
                                            <option value="newAccountFunding">New Account Funding</option>
                                            <option value="creditPayPro">Credit Pay Pro</option>
                                            <option value="businessSolutions">Business Solutions</option>
                                            <option value="billerServices">Biller Services</option>
                                            <option value="sdvancedUserExperience">Advanced User Experience</option>
                                            <option value="actionInsights">Action Insights</option>
                                            <option value="smartRoutingHub">Smart Routing Hub</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <!-- <span class="help-block"></span> -->
                                    </div>
                                    <div class="form-group name-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value=''>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group company-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" class="form-control" id="company" value=''>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group email-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value=''>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group phone-group">
                                        <label for="phone">Phone (Optional)</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value=''>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Comments/Questions (Optional)</label>
                                        <textarea class="form-control" name="description" id="description" rows="8"></textarea>
                                    </div>
                                </div>
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
        </section>

        <!-- Careers -->
        <?php include("inc/about-module.php"); ?>
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>
    <script src="scripts/validation.js"></script>

  </body>

</html>