<?php
	require_once 'authorize.php';
	require('../db.php');

	$sql = "SELECT * FROM news
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
        
        <!--View Rates-->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container">
                <h2>Admin: News</h2>
                <hr>
                <!--Add News Item Button-->
                <div class="text-center mb-5">
                    <a id="addItem" href="add-news.php">
                        <button type="button" class="btn2">Add News Article</button>  
                    </a>
                </div>
                     <!-- News Items -->
                     <?php
                        if( $result ) {
                            while( $row = mysqli_fetch_array( $result ) ) {
                                $newsMonth = substr(date('F', strtotime($row['date_modified'])), 0, 3);
                                //$newsDay = date('j', strtotime($row['date_modified']));
                                $newsYear = date('Y', strtotime($row['date_modified']));
                    ?>
                                <div class="row justify-content-center">
                                    <div class="newsBox col-md-10">
                                        <h4><?=$row['title']?></h4>
                                        <h6><?=$newsMonth . " " . " " .$newsYear ?></h6>
                                        <?php if ($row['imageName'] !== "") echo "<p><img src='../uploads/news/" . $row['imageName'] . "' class='img-fluid' alt='" . $row['altTag'] . "'></p>"; ?>
                                        <?php if ($row['subTitle']) echo "<p class='subtitle'>" . $row['subTitle'] . "</p>"; ?>
                                        <?php if ($row['introText']) echo "<p class='introText'>" . $row['introText'] . "</p>"; ?>
                                        <p><?=$row['copyBlock']?></p>
                                        <p class="mb-3 pt-4"><span class="boldText">Active on Site?</span>
                                            <?php
                                                if ($row['active'] == 1) {
                                                    echo "<span class='boldText' style='color: red;'> YES</span>";
                                                } else {
                                                    echo " NO";
                                                }
                                            ?>
                                        </p>
                                        <form id="form1" method="post" action="delete-news.php?id=<?=$row['id']?>" onSubmit="return confirm('Are you sure you want to delete?')">
                                            <a href="edit-news.php?id=<?=$row['id']?>">
                                                <button type="button" class="btn2 mr-2">Edit</button>
                                            </a>
                                            <button class="btn2" type="submit">Delete</button>
                                        </form>
                                        <!--<a href="news-detail.php"><button class="btn2">Learn More</button></a>-->
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?> 
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