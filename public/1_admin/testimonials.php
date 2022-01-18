<?php
	require_once 'authorize.php';
	require('../db.php');

	$sql = "SELECT * FROM testimonials
			ORDER by date_modified DESC";
    $result = mysqli_query( $con, $sql );
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Payrailz: Testimonials</title>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">      
    </head>
    
    
    <body>
    
        <!-- HEADER -->  
        <?php require_once('1_inc/header-admin.php'); ?>
        
        <!--View Rates-->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container text-center">
                <h2>Admin: Testimonials</h2>
                <hr>
                <!--Add Testimonial Button-->
                <div class="text-center mb-5">
                    <a id="addItem" href="add-testimonial.php">
                        <button type="button" class="btn2">Add Testimonial</button>  
                    </a>
                </div>
                    <!-- Testimonials -->
                    <div class="row">
                        <div class="col-12">
                            <div class="row" id="testimonials">
                                <?php
                                    if( $result ) {
                                        while( $row = mysqli_fetch_array( $result ) ) {
                                ?>
                                    <div class="col-12 col-lg-4">
                                        <div class="testimonial shadow">
                                            <?php 
                                                if ($row['imageUrl'] !== "") {
                                                    echo "<p><img src='../uploads/" . $row['imageUrl'] . "' class='img-fluid' alt='" . $row['altTag'] . "'></p>"; 
                                                } else {
                                                    echo "<p><img src='../images/generalAvatar.jpg" . "' class='img-fluid' alt='Payrails general avatar'></p>"; 
                                                }
                                            ?>
                                            <h2><?=$row['company']?></h2>
                                            <h3><?=$row['author']?></h3>
                                            <h4><?=$row['authorTitle']?></h4>
                                            <?=$row['testimonial']?>
                                            
                                            <p class="mb-1 pt-2">
                                                <span class="boldText">Featured on Site?</span>
                                                <?php
                                                    if ($row['featured'] == 1) {
                                                        echo "<span class='boldText' style='color: red;'> YES</span>";
                                                    } else {
                                                        echo " NO";
                                                    }
                                                ?>
                                                <br>
                                                <span class="boldText">Active on Site?</span>
                                                <?php
                                                    if ($row['active'] == 1) {
                                                        echo "<span class='boldText' style='color: red;'> YES</span>";
                                                    } else {
                                                        echo " NO";
                                                    }
                                                ?>
                                            </p>
                                            <form id="form1" method="post" action="delete-testimonial.php?id=<?=$row['id']?>" onSubmit="return confirm('Are you sure you want to delete?')">
                                                <a href="edit-testimonial.php?id=<?=$row['id']?>">
                                                    <button type="button" class="btn2 btn-sm mr-2">Edit</button>
                                                </a>
                                                <button class="btn2 btn-sm" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                    }
                                }
                            ?> 
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