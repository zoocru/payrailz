<?php
	require_once 'authorize.php';
	require('../db.php');

	$sql = "SELECT * FROM gallery 
			ORDER BY id DESC";
	$result = mysqli_query( $con, $sql);
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
    
        <meta charset="UTF-8">
        
	    <title>Gilbert's Resort - Admin: Gallery</title>
		
        <meta name="description" content="Gilbert's Resort"/>
        <meta name="keywords" content=""/>
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" href="../css/main.css"> 
        <link rel="stylesheet" href="../css/grids.css"> 
        <link rel="stylesheet" href="../css/mediaQueries.css"> 
        <link rel="stylesheet" href="../css/fonts.css"/>
        <link rel="stylesheet" href="../css/form.css"/>
        <link rel="stylesheet" href="../css/prettyPhoto.css"/>
    	<link rel="stylesheet" href="../css/styles.css"/>
        
        <style>
			body { background-color: #ddde58; }
		</style>
        
        <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
		<script>
            tinymce.init({
                selector:'textarea',
                theme: "modern",
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker searchreplace",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                toolbar: "undo redo | styleselect | bold italic | bullist numlist"
            });
        </script>
                
    </head>
    
    
    <body>
    
        <a id="top"></a>
        
        <!-- HEADER -->  
        <?php require_once('inc/header-admin.php'); ?>
        
        <!-- MAIN CONTENT -->
        <section id="entertainment" class="pushDown">
            <div class="container">
            	<section class="sixteen columns">
                    <h1 class="PapyrusCom adminHeader">Admin: Gallery</h1>
                    <hr>
                </section>
               	<!-- Gallery -->
                <div class="sixteen columns admin add-bottom">
                    <div class="button add-bottom">
                        <a href="add-gallery.php">Add New Gallery Item</a>
                    </div>
              	</div>
               	<div class="portfolio-content">	
                    <ul class="portfolio-categ filter">
                        <li><strong>CATEGORIES</strong>:</li>
                        <li class="all active"><a href="#">All</a></li>
                        <li class="events"><a href="#" title="Events">Events</a></li>
                        <li class="beach"><a href="#" title="Beach">Beach</a></li>
                        <li class="activities"><a href="#" title="Activities">Activities</a></li>
                        <li class="food"><a href="#" title="Food">Food</a></li>
                        <li class="boats"><a href="#" title="Boats">Boats</a></li>
                        <li class="people"><a href="#" title="People">People</a></li>
                        <li class="rooms"><a href="#" title="Rooms">Rooms</a></li>
                    </ul>
                    <ul class="portfolio-area">	
                        <?php
                            if( $result ) {
                                while( $row = mysqli_fetch_array( $result) ) {
                                    $row_category = $row['gallery_category'];
                                    $categories = array(0 => 'events', 1 => 'beach', 2 => 'activities', 3 => 'food', 4 => 'boats', 5 => 'people');
                                    $category_keys = array_keys($categories);
                                    $category = in_array($row_category, $category_keys) ? $categories[$row_category] : "rooms";
                        ?>
                                    <li class="portfolio-item2" data-id="<?=$row['id']?>" data-type="<?=$category?>">	
                                        <div>
                                            <span class="image-block">
                                                <a class="hideSm" href="../uploads/gallery/<?=$row['image_name']?>" rel="prettyPhoto[gallery]" title="<?=$row['title']?>">
                                                    <img  src="../uploads/gallery/<?=$row['image_name']?>" alt="<?=$row['alt_tag']?>" title="<?=$row['title']?>" />                    
                                                </a>
                                                <img class="hideLg" src="../uploads/gallery/<?=$row['image_name']?>" alt="<?=$row['alt_tag']?>" title="<?=$row['title']?>" />  
                                            </span>
                                            <div class="home-portfolio-text">
                                                <h3 class="post-title-portfolio"><?=$row['title']?></h3>
                                            </div>
                                            <form method="post" action="delete-gallery-item.php?id=<?=$row['id']?>" onSubmit="return confirm('Are you sure you want to delete?')">
                                                <div class="button">
                                                    <a href="edit-gallery.php?id=<?=$row['id']?> ">Edit</a>    
                                                </div>
                                                <button class="button2" type="submit">Delete</button>
                                            </form>
                                        </div>	
                                    </li>
                        <?php
                                } // End the while loop
                            } // End the if statement
                        ?>
                        <div class="column-clear"></div>
                    </ul>
                </div><!--end portfolio-content -->
            </div>
        </section>
       
        <!-- Footer -->
        <?php require_once('inc/footer-admin.php'); ?>

		<!-- javascript files -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="../js/jquery-min.js" type="text/javascript"></script>
		<script src="../js/site.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	    <script src="../js/jquery.quicksand.js"></script>
        <script src="../js/jquery.easing.js"></script>
        <script src="../js/script.js"></script>
       	<script src="../js/jquery.prettyPhoto.js"></script> 

    </body>

</html>
