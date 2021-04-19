<?php
	require_once 'authorize.php';
	require('../db.php');

	if (isset($_POST['submit'])) {	
		$title = isset($_POST['title']) ? $_POST['title'] : "";
        $title = mysqli_real_escape_string($con, $title);
        
        $subTitle = isset($_POST['subTitle']) ? $_POST['subTitle'] : "";
		$subTitle = mysqli_real_escape_string($con, $subTitle);
		
		$introText = isset($_POST['introText']) ? $_POST['introText'] : "";
        $introText = mysqli_real_escape_string($con, $introText);

        $altTag = isset($_POST['altTag']) ? $_POST['altTag'] : "";
        $altTag = mysqli_real_escape_string($con, $altTag);
        
        $copyBlock = isset($_POST['copyBlock']) ? $_POST['copyBlock'] : "";
        $copyBlock = mysqli_real_escape_string($con, $copyBlock);
        
        $active = isset($_POST['active']) ? $_POST['active'] : "";
        $active = mysqli_real_escape_string($con, $active);

        // Image uploaded:
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		
		// For messaging
		$alreadyExists = "";
		$uploaded = "";
		$invalidFile = "";
		
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 2000000)
		&& in_array($extension, $allowedExts)) {
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			} else {
				if (file_exists("news/" . $_FILES["file"]["name"])) {
					//$alreadyExists = " already exists. ";
					echo $_FILES["file"]["name"] . $alreadyExists;
				} else {
					move_uploaded_file($_FILES["file"]["tmp_name"],
					"/home/crystal/public_html/uploads/news/" . $_FILES["file"]["name"]);
					$uploaded = $_FILES["file"]["name"];
                    
					// Lets insert image into database
                    // $sql = "INSERT INTO news (imageName, altTag) VALUES ('$uploaded', '$altTag')"; 
                    // mysqli_query($con, $sql);    
				} 
			} 
		} else {
			$invalidFile = " invalid file"; 
        } 
        
        // Lets insert into database
        $sql = "INSERT INTO news (imageName, altTag, title, subTitle, introText, copyBlock, active ) 
                VALUES ('$uploaded', '$altTag','$title', '$subTitle', '$introText', '$copyBlock', '$active')";
                
        // mysqli_query($con, $sql);
        // header("location: news.php");
        
        if ( mysqli_query($con, $sql) ) {
            header("location: news.php");
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
        }
	} 
	
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
        
        <?php require_once('1_inc/tiny.php'); ?>
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
        
           <!-- MAIN CONTENT -->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container">
                <h2>Admin: Add News Article</h2>
                <hr class="pb-4">
                <form id="form1" name="form1" method="post" enctype="multipart/form-data" >                 
                    <!-- NEWS-->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>News Item Title:</h4> 
                            <input type="text" name="title" value="" class="form-control" placeholder="TITLE"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Subtitle:</h4> 
                            <input type="text" name="subTitle" value="" class="form-control" placeholder="SUBTITLE"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Abstract:</h4> 
                            <textarea name="introText" cols="" rows="" class="form-control" placeholder="ABSTRACT"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <div class="form-group col-8">
                            <h4><label for="file">Image:</label></h4>
                            <input type="file" name="file" id="file">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Image Alt Text:</h4> 
                            <input type="text" name="altTag" value="" class="form-control" placeholder="ALT TEXT"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Main News Content:</h4> 
                            <textarea name="copyBlock" cols="" rows="" class="form-control" placeholder="MAIN NEWS CONTENT"></textarea>
                        </div>
                    </div>
                    <div id="activeArea" class="row justify-content-center mt-3">
                        <div class="form-group col-8">
                            <h4>Active on Site:</h4> 
                            <label for="active">
                                <input type="radio" name="active" id="active" value="1" checked="checked"> Yes
                            </label>
                            <label for="non-active">
                                <input type="radio" name="active" id="non-active" value="0" > No
                            </label>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button class="btn2 mr-2" type="submit" id="submit" name="submit">
                            Add News Item
                        </button>
                        <a href="news.php">
                            <button class="btn2" type="button">
                                Cancel
                            </button>
                        </a> 
                    </div>
                </form>	
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