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
            
            <form id="form" name="contact_form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
              <div class="row">
                <div id="updates" class="col-12 align-items-center">
                  <p>Receive Updates, News & Information</p>
                  <div class="form-group email-group">
                      <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" value=''>
                  </div>
                  <button type="submit" id="submit" name="submit" class="btn2 gBtn btn-sm">OK</button>
                </div>
              </div>
            </form>
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
    <script src="scripts/validation.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109694408-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109694408-1');
    </script> -->