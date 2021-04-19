<?php
	require_once 'authorize.php';
	require('../db.php');

	$sql = "SELECT * FROM gallery
			ORDER by date_modified DESC";
	$result = mysqli_query( $con, $sql );
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
    
        <meta charset="UTF-8">

        <title>Crystal Engineering</title>
        
        <!-- Mobile Specific Metas
    	================================================== -->
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        
        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- For Gallery -->
        <link rel="stylesheet" href="../css/lightboxgallery.css">
        <link rel="stylesheet" href="../css/gallery-style.css">
                
    </head>
    
    
    <body>
    
        <!-- HEADER -->  
        <?php require_once('1_inc/header-admin.php'); ?>
       
        <!-- HERO -->
        <section id="heroAbout">
            <div class="insideHeroContent container">
                <h1 class="text-uppercase">Admin</h1>
            </div>
        </section>

        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container">
                <h2>Admin: Gallery</h2>
                <hr>
                <!--Add Gallery Item Button-->
                <div class="text-center pb-5">
                    <a id="addItem" href="add-gallery.php">
                        <button type="button" class="btn2">Add New Gallery Item</button>  
                    </a>
                </div>
                <div class="row justify-content-center">
                    <!-- Gallery -->
                    <?php
                        if( $result ) {
                            while( $row = mysqli_fetch_array( $result ) ) {
                    ?>
                                <div class="col-md-6">
                                    <div class="adminSpacing clearfix">
                                        <h4 class="mt-5">Title: <?=$row['title']?></h4>
                                        <div class="mt-3 mb-3">
                                            <img src="../uploads/gallery/<?=$row['image_name']?>" alt="<?=$row['alt_tag']?>" title="<?=$row['title']?>" class="img-fluid" /> 
                                        </div>
                                        <div>
                                            <p class="pt-0"><span class="boldText">Image Alt Tag</span>: <?=$row['altTag']?></p>
                                            <p><span class="boldText">Gallery Set</span>: <?=$row['gallery_set']?></p>
                                        </div>
                                        <hr>
                                        <form method="post" action="delete-gallery-item.php?id=<?=$row['id']?>" onSubmit="return confirm('Are you sure you want to delete?')">
                                            <a href="edit-gallery.php?id=<?=$row['id']?>">
                                                <button type="button" class="btn2 mt-1">Edit</button>
                                            </a>
                                            <button class="btn2 mt-1" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require_once('1_inc/footer-admin.php'); ?>

		<!-- javascript files -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="../js/jquery-min.js" type="text/javascript"></script>
		<script src="../js/site.js"></script>
        <script src="js/validation-login.js"></script>
     
    </body>

</html>