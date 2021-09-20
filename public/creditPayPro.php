<!doctype html>

<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">

      <title>Payrailz Products - Transfer Money</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">    
  </head>

  <body>
    
    <?php include("inc/header.php"); ?>

    <!-- The Hero -->
    <div id="insideHeroWrapper">
      <section id="hero" class="products d-flex align-items-center">
        <div class="container-fluid">
        <div class="row">
            <!-- Main Copy -->
            <div class="col-xs-12 col-md-6 offset-lg-1 col-lg-6">
                <h1>Credit Pay Pro™</h1>
                <h2>Smarter solutions for end-users and financial&nbsp;institutions.</h2>
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
                        <a href="products.php">Products</a><span class="separator">/</span>
                        Credit Pay Pro™
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <section id="productDetailPage">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-12 col-md-4" style="padding-left: 0 !important;">
                        <div id="manPA">
                            <img src="images/woman4.jpg" class="img-fluid shadow2" alt="Credit Pay Pro">
                        </div>
                    </div>    
                    <div class="col-12 col-md-6 offset-md-1">
                        <h1>More Options = More&nbsp;Satisfaction</h1>
                        <p><span class="bold">Credit Pay Pro</span> supports one-time and recurring payments with variable or set amounts using internal and external checking and saving accounts, as well as debit and credit cards. Users can quickly make guest payments or register to save their information for future&nbsp;transactions.</p>
                        <figure class="mb-5">
                            <img src="images/creditPayPro.png" alt="Credit Pay Pro" class="img-fluid shadow2">
                            <figcaption>Credit Pay Pro Dashboard</figcaption>
                        </figure>

                        <h3>Accounts&nbsp;Receivables</h3>
                        <p class="mb-5">An Accounts Receivables file contains payments processed by Credit Pay Pro and is specifically formatted by individual Financial Institutions to update their accounting. The file version that best suits the Financial Institution will be decided during the implementation phase when the requirements for the specific site are determined. Regardless of funding method, all payments will be sent to the respective Financial Institution in the appropriate Accounts Receivables file after the mutually agreed upon end of day cut&nbsp;off&nbsp;time.</p>

                        <h3>ACH Funding</h3>
                        <p>An ACH File is a Nacha Formatted file delivered to the Financial Institution to record both the debits and credits for payments funded via ACH. The Financial Institution can then deliver the ACH File to the Federal Reserve for processing. While Credit Pay Pro supports ACH (Checking and Savings), Debit Card and Credit Card funding methods, each Financial Institution can choose to support all funding methods, only specific funding methods or even specific funding methods per Payment Channel. Credit Pay Pro was built to accept payments from Personal, Business, Checking and Savings Accounts, each Financial Institution can once again choose which accounts will be&nbsp;supported.</p>
                        <figure class="mb-5">
                            <img src="images/ccp-ach.png" alt="ACH Funding" class="img-fluid shadow2">
                            <figcaption>ACH Funding and Settlement</figcaption>
                        </figure>

                        <h3>Bill File</h3>
                        <p>A Bill File is essentially a snapshot of the Financial Institution’s Accounts Receivables database and has two purposes:</p>
                        <ol>
                            <li>Authentication: Data from the Bill File is used to authenticate users when they wish to make a one-time payment or when they enroll for the first time on&nbsp;the&nbsp;web.</li>
                            <li>Bill Information: Summary that will be presented to the user on&nbsp;the&nbsp;site. </li>
                        </ol>
                        <p class="mb-5">Working with the dedicated Payrailz support team, the specific type of Bill File will be determined during the implementation phase as the requirements for the Financial Institution’s site are determined. If a user makes a payment via Credit Pay Pro, those payments will be reflected in the Bill File. For users with multiple loan/mortgage/credit card accounts at the same Financial Institution, Credit Pay Pro automatically links these accounts together for convenience and ease&nbsp;of&nbsp;use.</p>

                        <h3>Card Processing</h3>
                        <p>Credit Pay Pro supports the acceptance of Credit and Signature Debit Cards including MasterCard, Visa, American Express and Discover. The Financial Institution can choose which Payment Channels (web/mobile, Call Center and IVR) cards are accepted on, as well as which Card brands. Additionally, each Financial Institution has the option to charge convenience or transaction fees that align with Card Network rules and their Merchant Services&nbsp;Provider.</p>
                        <figure>
                            <img src="images/ccp-cp.png" alt="Card Processing" class="img-fluid shadow2">
                            <figcaption>ACH Funding and Settlement <span style="font-weight: bold; color: red;">(Graphic needs to be converted to SVG)</</figcaption>
                        </figure>

                        <p class="mb-1">Looking for more info on <span class="bold">Credit Pay Pro</span>?</p>
                        <a id="button1" href="contact.php">
                            <button type="button" class="btn">Contact Us</button>  
                        </a>
                    </div>
                </div>
                <div id="manBottomPA"></div>
            </div>
        </section>


        <!-- Smarter Payment Solutions -->
        <?php //include("inc/smarter-payment-solutions.php"); ?>
        
    </main>

    <!--FOOTER-->
    <?php include("inc/footer.php"); ?>

  </body>

</html>