<?php
	require('db.php');

  $sql = "SELECT * FROM testimonials
          WHERE active = 1 AND featured = 1
          ORDER by RAND()
          LIMIT 3";
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
    <meta name="description" content="">
    <title>Payrailz</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
  </head>


  <body>
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="heroWrapper">
      <section id="hero" class="heroHP d-flex align-items-center">
        <section id="heroLines">
          <img src="images/hero-gray-lines.png" alt="">
        </section>
        <div class="container-fluid">
          <div class="row">
            <!-- Main Copy -->
            <div class="col-xs-12 col-md-6 offset-lg-1 col-lg-6">
              <h1>Tomorrow’s payment  <br>innovations, today</h1>
              <h2 class="mb-4">Payrailz is the only digital payments platform you’ll ever&nbsp;need.</h2>
              <a id="button1" href="products.php">
                  <button type="button" class="btn">Learn More</button>  
              </a>
            </div>
            <!-- Testimonials -->
            <div class="d-none d-md-block d-col-xs-12 col-md-6 offset-lg-1 col-lg-3">
                <div id="testimonialsHP">
                  <div id="testimonialContent">
                  </div>
                  <ul class="indicators">
                    <li id="indicator1" class="indicatorsLI active"></li>
                    <li id="indicator2" class="indicatorsLI"></li>
                    <li id="indicator3" class="indicatorsLI"></li>
                  </ul>
                </div>
            </div>
            <!-- End of HP Testimonials -->
          </div>
        </div>
      </section>
      
      <section id="HPhero2"></section>
    </div>
    
    <main id="mainHp">
      <section id="payRailzAdvantage">
        <div class="container pt-5">
          <div class="row">
            <div id="payRailzAdvantageContent" class="col-12 col-lg-6 offset-lg-1 d-flex justify-content-end flex-column align-items-end text-right">
              <h1><img class="img-fluid shadow" src="images/payrailz-advantage-icon.png" alt="Payrailz Advantage"> Payrailz Advantage</h1>
              <p>Our all-in-one digital payments solution seamlessly navigates across existing payment paths and rails, always keeping businesses and consumers ahead of the technology&nbsp;curve.</p>
              <p>In a society focused on “Do It For Me<sup>®</sup>”, smart makes&nbsp;the&nbsp;difference.</p>
              <a href="payrailz_advantage.php">
                  <button type="button" class="btn">Learn More</button>  
              </a>
            </div>
            <div class="col-12 d-none d-lg-block col-lg-5">
              <img class="img-fluid purpleBorder shadow" src="images/phone-woman.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="hpVideo">
        <div class="container">
          <div class="row d-flex">
            <div class="col-12 col-lg-6 offset-lg-3">
              <iframe class="greenBorder shadow" width="100%" height="315" src="https://www.youtube.com/embed/uBjzFMge6Zg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>

      <section id="callOutBoxes">
        <div class="container-fluid addPadding">
          <div class="row">
            <!-- Smarter Payments -->
            <div class="col-12 col-sm-6 col-lg-3 pb-T100">
              <div class="coBoxes shadow border">
                <img class="shadow" src="images/sp-icon.png" alt="Smarter Payments">
                <h1>Smarter Payments</h1>
                <p>By offering every payment solution you need, all on one digital platform, we go well beyond basic services to deliver the type of experience consumers are demanding in today’s digitally focused&nbsp;world.</p>
                <a href="products.php">
                  <button type="button" class="btn">Learn More</button>  
                </a>
              </div>
            </div>
            <!-- PayWayz: Smart Payment Routing Hub -->
            <div class="col-12 col-sm-6 col-lg-3 pb-B100">
              <div class="coBoxes shadow border">
                <img class="shadow" src="images/sprh-icon.png" alt="PayWayz: Smart Payment Routing Hub">
                <h1>PayWayz: Smart Payment Routing&nbsp;Hub</h1>
                <p>Paywayz intuitively finds the best path, identifies the best of each rail and forges new paths across rails, without the need for additional information, time or&nbsp;technology.</p>
                <a href="smart_routing_hub.php">
                  <button type="button" class="btn">Learn More</button>  
                </a>
              </div>
            </div>
            <!-- Action Insights® -->
            <div id="actionBox" class="col-12 col-sm-6 col-lg-3 pb-T100">
              <div class="coBoxes shadow border">
                <img class="shadow" src="images/ai-icon.png" alt="Action Insights®">
                <h1>Action Insights<sup>®</sup></h1>
                <p>AI technology studies and overlays consumer data and behavior to make personalized recommendations that simplify the lives of your&nbsp;consumers.</p>
                <a href="action_insights.php">
                  <button type="button" class="btn">Learn More</button>  
                </a>
              </div>
            </div>
            <!-- Advanced User Interface -->
            <div class="col-12 col-sm-6 col-lg-3 pb-B100">
              <div class="coBoxes shadow border">
                <img class="shadow" src="images/aui-icon.png" alt="Advanced User Interface">
                <h1>Advanced User Interface</h1>
                <p>Designed to integrate seamlessly with the technology you’re familiar with and to operate on the online and mobile platforms today’s consumers are already&nbsp;using.</p>
                <a href="advanced_user_experience.php">
                  <button type="button" class="btn">Learn More</button>  
                </a>
              </div>
            </div>
            <img id="threeLines" src="images/three-lines.png" alt="">
          </div>
        </div>
        
        <!-- About teaser -->
        <!--<div class="container">
          <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
              <div id="HPaboutTeaser">
                <h1>Smart people. Smart Solutions. Smart Service.</h1>
                <p>Payrailz brings together a perfect combination of proven experience, innovation, technology and forward-thinking product&nbsp;development.</p>
                <p>We’ll help you take the first step, the next step, and every step into the future, so you never feel like you’re going it&nbsp;alone.</p>
                <a href="about.php">
                  <button type="button" class="btn2">Learn More</button>  
                </a>
              </div>
            </div>
          </div>
        </div>-->

        <section id="teamModule"> 
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex justify-content-center justify-content-lg-end">
                <h1>Our Team</h1>
              </div>
            </div>
          </div>
          <!-- Team Carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <!-- Carousel items -->
            <div class="container">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <!-- Fran Duggan -->
                  <div class="teamInfo">
                    <a href="team.php?id=FranDuggan">
                      <div class="teamInfoContent">
                        <h2>Fran Duggan</h2>
                        <h4>CEO & Founder</h4>
                      </div>
                      <img src="images/team/FranDuggan.jpg" class="img-fluid" alt="Fran Duggan - CEO & Founder">
                    </a>
                  </div>
                  <!-- Paul Franko II -->
                  <div class="teamInfo">
                    <a href="team.php?id=PaulFranko">
                      <div class="teamInfoContent">
                        <h2>Paul Franko II</h2>
                        <h4>COO & Founder</h4>
                      </div>
                      <img src="images/team/PaulFrankoII.jpg" class="img-fluid" alt="Paul Franko II - COO & Founder">
                    </a>
                  </div>
                  <!-- Rich Pelikan -->
                  <div class="teamInfo">
                    <a href="team.php?id=RichPelikan">
                      <div class="teamInfoContent">
                        <h2>Rich Pelikan</h2>
                        <h4>CBDO & Founder</h4>
                      </div>
                      <img src="images/team/RichPelikan.jpg" class="img-fluid" alt="RichPelikan - CBDO & Founder">
                    </a>
                  </div>
                  <!-- Horng Tern -->
                  <div class="teamInfo">
                    <a href="team.php?id=HorngTern">
                      <div class="teamInfoContent">
                        <h2>Horng Tern</h2>
                        <h4>CTO</h4>
                      </div>
                      <img src="images/team/Horng-Tern-2.jpg" class="img-fluid" alt="Horng Tern - CTO">
                    </a>
                  </div>
                </div>

                <div class="carousel-item">                  
                  <!-- Jim Kern -->
                  <div class="teamInfo">
                    <a href="team.php?id=JimKern">
                      <div class="teamInfoContent">
                        <h2>Jim Kern</h2>
                        <h4>VP, Chief Sales&nbsp;Officer</h4>
                      </div>
                      <img src="images/team/Jim-Kern-web.jpg" class="img-fluid" alt="Jim Kern - VP, Chief Sales Officer">
                    </a>
                  </div>
                  <!-- Mickey Goldwasser -->
                  <div class="teamInfo">
                    <a href="team.php?id=mickey">
                      <div class="teamInfoContent">
                        <h2>Mickey Goldwasser</h2>
                        <h4>VP, Marketing & Chief of&nbsp;Staff</h4>
                      </div>
                      <img src="images/team/mickeygoldwasser.jpg" class="img-fluid" alt="Mickey Goldwasser - VP, Marketing & Chief of Staff">
                    </a>
                  </div>
                  <!-- Gereen Langmeyer -->
                  <div class="teamInfo">
                    <a href="team.php?id=GereenLangmeyer">
                      <div class="teamInfoContent">
                        <h2>Gereen Langmeyer</h2>
                        <h4>VP, Payment Product&nbsp;Management</h4>
                      </div>
                      <img src="images/team/DaveFrench.jpg" class="img-fluid" alt="Gereen Langmeyer - VP, Payment Product Management">
                    </a>
                  </div>
                  <!-- Kavita Singh -->
                  <div class="teamInfo">
                    <a href="team.php?id=Kavita">
                      <div class="teamInfoContent">
                        <h2>Kavita Singh</h2>
                        <h4>VP, AI Product&nbsp;Management</h4>
                      </div>
                      <img src="images/team/Kavita-Singh-II-e1594149412865.jpg" class="img-fluid" alt="Kavita Singh - VP, AI Product Management">
                    </a>
                  </div>
                </div>

                <div class="carousel-item">
                  <!-- Dave French -->
                  <div class="teamInfo">
                    <a href="team.php?id=DaveFrench">
                      <div class="teamInfoContent">
                        <h2>Dave French</h2>
                        <h4>VP, Finance</h4>
                      </div>
                      <img src="images/team/DaveFrench.jpg" class="img-fluid" alt="Dave French - VP, Finance">
                    </a>
                  </div>
                  <!-- Denise Delisle -->
                  <div class="teamInfo">
                    <a href="team.php?id=DeniseDelisle">
                      <div class="teamInfoContent">
                        <h2>Denise Delisle</h2>
                        <h4>VP, Payment Operations</h4>
                      </div>
                      <img src="images/team/Denise-Delisle-2.jpg" class="img-fluid" alt="Denise Delisle - VP, Payment Operations">
                    </a>
                  </div>
                  <!-- Ted Chaney -->
                  <div class="teamInfo">
                    <a href="team.php?id=TedChaney">
                      <div class="teamInfoContent">
                        <h2>Ted Chaney</h2>
                        <h4>VP, Strategic Partnerships &&nbsp;Channels</h4>
                      </div>
                      <img src="images/team/TedChaney.jpg" class="img-fluid" alt="Ted Chaney - VP, Strategic Partnerships & Channels">
                    </a>
                  </div>
                  <!-- Song Nunnallee -->
                  <div class="teamInfo">
                    <a href="team.php?id=Song">
                      <div class="teamInfoContent">
                        <h2>Song Nunnallee</h2>
                        <h4>VP, Agile Project&nbsp;Management</h4>
                      </div>
                      <img src="images/team/Song-Nunnallee-2.jpg" class="img-fluid" alt="Song Nunnallee - VP, Agile Project Management">
                    </a>
                  </div>
                </div>

                <div class="carousel-item">
                  <!-- Lena Mitchell -->
                  <div class="teamInfo">
                    <a href="team.php?id=LenaMitchell">
                      <div class="teamInfoContent">
                        <h2>Lena Mitchell</h2>
                        <h4>Director of Implementation</h4>
                      </div>
                      <img src="images/team/Lena-Mitchell-2.jpg" class="img-fluid" alt="Lena Mitchell - Director of Implementation">
                    </a>
                  </div>
                  <!-- Katie Stein -->
                  <div class="teamInfo">
                    <a href="team.php?id=KatieStein">
                      <div class="teamInfoContent">
                        <h2>Katie Stein</h2>
                        <h4>Director, Client Success</h4>
                      </div>
                      <img src="images/team/Katie-Headshot-iii-e1619541707871.jpg" class="img-fluid" alt="Katie Stein - Director, Client Success">
                    </a>
                  </div>
                  <!-- Fran Chan -->
                  <div class="teamInfo">
                    <a href="team.php?id=FranChan">
                      <div class="teamInfoContent">
                        <h2>Frank Chan</h2>
                        <h4>Security & Compliance Officer</h4>
                      </div>
                      <img src="images/team/Fran-Chan-2.jpg" class="img-fluid" alt="Frank Chan - Security & Compliance Officer">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Prev / Next -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>

        <section id="teamText">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-8 offset-md-2">
                <h1>Payments are our passion.</h1>
                <p>Our founders, executive team, associates, board of directors and strategic partners are all well-established financial-industry professionals and technologists who are incredibly passionate about transforming the payments&nbsp;experience.</p>
                <a href="team.php">
                  <button type="button" class="btn">Learn More</button>  
                </a>
              </div>
            </div>
          </div>
        </section>
        
      </section>
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>

    <script> 
      var testimonials = []
    </script>

    <?php
        if( $result ) {
            while( $row = mysqli_fetch_array( $result ) ) {
    ?>
              <script>
                var id = "<?=$row['ID']?>",
                    imageUrl = "<?=$row['imageUrl']?>",
                    altTag = "<?=$row['altTag']?>",
                    author = "<?=$row['author']?>",
                    authorTitle = "<?=$row['authorTitle']?>",
                    company = "<?=$row['company']?>",
                    testimonial = "<?=$row['testimonial']?>"

                testimonials.push(
                  {
                    id: id,
                    imageUrl: imageUrl,
                    altTag: altTag,
                    author: author,
                    authorTitle: authorTitle,
                    company: company,
                    testimonial: testimonial
                  }
                )
              </script> 
    <?php
            } // End of While loop
        } // End of if
		?>
    <script>
      // console.log("Testimonials: " + testimonials)
      // console.log(testimonials[1].author)

      var testimonialsLength = testimonials.length,
          content = document.getElementById('testimonialContent'),
          contentID = 1

        console.log(testimonialsLength)

      for (let i = 0; i <= testimonialsLength; i++){
        content.innerHTML += ('<div id="content' + contentID + '" class="content" data-content="' + contentID + '">' + 
                                '<img src="../uploads/' + testimonials[i].imageUrl + '" alt="' + testimonials[i].altTag + '">' +
                                '<h4>' + testimonials[i].author + '</h4>' +
                                '<h5>' + testimonials[i].authorTitle + '</h5>' +
                                testimonials[i].testimonial +
                              '</div>')
        contentID++
      }

    </script>
        
  </body>
</html>