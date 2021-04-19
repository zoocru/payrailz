<!doctype html>

<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Metal Fabricator Newburyport, MA 01950. Robotic Integrator, Precision Stamping, System Integration, CNC Machining, Engineering Services, Manufacturing.">

      <title>Crystal Engineering</title>

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

    <div id="scrollDown">
        <img src="images/go-down-arrow.svg" class="arrow"/> 
    </div>

    <!-- The Hero -->
    <div id="heroWrapper">
        <section id="hero">
            <div class="wrapper">
              <div class="container-fluid">
                <div class="row">
                  <!-- Main Copy -->
                  <div class="col-xs-12 col-md-6 offset-lg-1 col-lg-4">
                    <h1>We Provide <br>Precision-Engineered Solutions</h1>
                    <p>We are a group of passionate and experienced people seeking to transform the world of&nbsp;manufacturing.</p>
                    <a id="button1" href="about.php">
                        <button type="button" class="btn">Learn More</button>  
                    </a>
                  </div>
                  <!-- Marketing Video -->
                  <div class="col-xs-12 col-md-6 col-lg-6">
                      <video id="hpVideo" controls width="100%" controlslist="nodownload" poster="videos/brand.jpg">
                          <source src="videos/brand.mp4" type="video/mp4">
                          Sorry, your browser doesn't support embedded videos.
                      </video>
                      <h6 id="videoTranscript">Video transcript</h5>
                  </div>

                </div>
              </div>
            </div>
        </section>
    </div>
    
    <div id="transcriptOverlay">
      <div id="transcript">
        <button id="transcriptClose" type="button" class="btn">X</button>  
         
        <h3>Video Transcript</h3>
        <p>It really comes down to one thing... One core value that informs our decision-making, and our customer’s success. Strengthening our community through world class manufacturing jobs. Not only because it’s a sustainable business strategy... But because it’s the right thing&nbsp;to&nbsp;do.</p>
        
        <p>It’s long time toolmakers passing their knowledge young apprentices. It’s using the industry’s best machines to get the job done. It’s taking an engineered approach to your needs - whether we are reshoring your current process, or taking you from prototype to mass&nbsp;production.</p>

        <p>It’s about building a team of passionate people that will be your partner, not just your&nbsp;supplier.</p>

        <p>Let our engineers be your&nbsp;engineers.</p>
      </div>
    </div>
    
    <main>
      <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-8 offset-2">
              <h2>From Prototype to Mass&nbsp;Production</h2>
              <p>Our team of tooling engineers and die makers will work with you to design and manufacture a product that will meet or exceed your quality and pricing&nbsp;requirements.</p>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row no-gutters">
            
            <div id="engineering" class="col-12 col-md-4">
              <img src="images/hero-engineering.jpg" class="img-fluid" alt="Engineering Services">
              <div class="content">
                <h2 class="serviceTitle">Engineering<br>Services</h2>
                <a href="engineering-services.php">
                  <button class="btn">Learn More</button>
                </a>
              </div>
            </div>

            <div id="stamping" class="col-12 col-md-4">
              <img src="images/hero-precision-stamping.jpg" class="img-fluid" alt="Precision Stamping">
              <div class="content">
                <h2 class="serviceTitle">Precision<br>Stamping</h2>
                <a href="precision-stamping.php">
                  <button class="btn">Learn More</button>
                </a>
              </div>
            </div>
            <div id="machining" class="col-12 col-md-4">
              <img src="images/hero-cnc.jpg" class="img-fluid" alt="CNC Machining">
              <div class="content">
                <h2 class="serviceTitle">CNC<br>Machining</h2>
                <a href="cnc-machining.php">
                  <button class="btn">Learn More</button>
                </a>
              </div>
            </div>
          </div>

          <div class="row no-gutters justify-content-center">
            <div id="washer" class="col-12 col-md-4">
                <img src="images/hero-world-washer.jpg" class="img-fluid" alt="World Washer Stamping">
                <div class="content">
                  <h2 class="serviceTitle">World&nbsp;Washer<br>&&nbsp;Stamping</h2>
                  <a href="world-washer-stamping.php">
                    <button class="btn">Learn More</button>
                  </a>
                </div>
              </div>

              <div id="robotic" class="col-12 col-md-4">
                <img src="images/hero-robotic.jpg" class="img-fluid" alt="Robotic Integration">
                <div class="content">
                  <h2 class="serviceTitle">Robotic<br>Integration</h2>
                  <a href="robotic-integration.php">
                    <button class="btn">Learn More</button>
                  </a>
                </div>
              </div>

          </div>
        </div>
      </section>
        
      <!--CASE STUDIES MODULE-->
      <?php include("inc/case-studies-module.php"); ?>

      <!--CTA-->
      <?php include("inc/cta-module.php"); ?>

      <!--ABOUT US MODULE-->
      <?php include("inc/about-module.php"); ?>

      <!--TESTIMONIALS MODULE-->
      <?php include("inc/testimonials-module.php"); ?>

      <!--GALLERY MODULE-->
      <?php include("inc/gallery-module.php"); ?>

      <!--NEWS MODULE-->
      <?php /*include("inc/news-module.php");*/ ?>

      <!--CLIENTS MODULE-->
      <?php include("inc/clients-module.php"); ?>

    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>
    <!-- For Gallery-->
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
          var video = document.querySelector('video')    
          video.addEventListener('ended', function() {
            video.load()   
          })
        })
    </script>

  </body>

</html>