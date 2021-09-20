<!doctype html>

<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">

      <title>Payrailz Advantage</title>

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
                        <a href="/">Home</a><span class="separator">/
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
                    <div class="col-12 col-md-8">
                        <form id="form1" name="contact_form" method="post" action="" >
                            <div class="row">
                                <div class="col-12 col-md-6">
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
                                <div class="col-12 col-md-6">
                                    <div class="form-group email-group">
                                        <label for="phone">Phone (Optional)</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value=''>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Comments/Questions (Optional)</label>
                                        <textarea class="form-control" name="description" id="description" rows="5"><?php echo htmlentities($description) ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <button type="submit" id="submit" name="submit" class="btn2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-12 col-md-3 offset-md-1">
                        <h1>right column</h1>
                    </div>
                </div>

            </div>
        </section>

        <!-- Careers -->
        <?php include("inc/careers-module.php"); ?>
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>

  </body>

</html>