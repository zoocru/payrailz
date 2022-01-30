<?php
	require_once 'authorize.php';
	require('../db.php');

	$sql = "SELECT * FROM careers
			ORDER by dateModified ASC";
    $result = mysqli_query( $con, $sql );
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Payrailz: Careers</title>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">   
        <style> 
            .testimonial { 
                padding: 30px;
                text-align: left;
            }
            #jobs .careerTitle:first-child { margin-top: 0; }
        </style>      
    </head>
    
    
    <body>
    
        <!-- HEADER -->  
        <?php require_once('1_inc/header-admin.php'); ?>
        
        <!--View Rates-->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container text-center">
                <h2>Admin: Careers</h2>
                <hr>
                <!--Add Testimonial Button-->
                <div class="text-center mb-5">
                    <a id="addItem" href="add-careers.php">
                        <button type="button" class="btn2">Add Careers</button>  
                    </a>
                </div>
                    <!-- Testimonials -->
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 text-left" id="jobs">
                            <section>
                                <?php
                                    if( $result ) {
                                        while( $row = mysqli_fetch_array( $result ) ) {
                                ?>
                                    <div class="row no-gutters careerTitle">
                                        <div class="col-11">
                                            <h2><?=$row['title']?></h2>
                                        </div>
                                        <div class="col-1">
                                            <img src="../images/faqArrow.svg" class="careerArrow rotate-reset">
                                        </div>
                                    </div>
                                    <div class="careerDetail">
                                        <p class="mb-1 pt-2">
                                            <span class="boldText">Active on Site?</span>
                                            <?php
                                                if ($row['active'] == 1) {
                                                    echo "<span class='boldText' style='color: red;'> YES</span>";
                                                } else {
                                                    echo " NO";
                                                }
                                            ?>
                                        </p>
                                        <form id="form1" method="post" action="delete-careers.php?id=<?=$row['id']?>" onSubmit="return confirm('Are you sure you want to delete?')">
                                            <a href="edit-career.php?id=<?=$row['id']?>">
                                                <button type="button" class="btn2 btn-sm mr-2">Edit</button>
                                            </a>
                                            <button class="btn2 btn-sm" type="submit">Delete</button>
                                        </form>
                                        </br></br>
                                        
                                        <?=$row['overview']?>
                                
                                        <p class="mt-4">Send your resume to <a href="mailto:info@payrailz.com" target="_blank"> info@payrailz.com</a> and we’ll contact you regarding next&nbsp;steps.</p>

                                        <small>Payraliz is an equal opportunity&nbsp;employer.</small> 
                                    </div>
                                <?php
                                        }
                                    }
                                ?> 
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require_once('1_inc/footer-admin.php'); ?>

		<!-- javascript files -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="../js/jquery-min.js" type="text/javascript"></script>
		<script src="../js/site.js"></script>     
    </body>

</html>