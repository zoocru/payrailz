<?php
	require_once 'authorize.php';
	require('../db.php');

	if (isset($_POST['submit'])) {	
		$author = isset($_POST['author']) ? $_POST['author'] : "";
        $author = mysqli_real_escape_string($con, $author);
        
        $authorTitle = isset($_POST['authorTitle']) ? $_POST['authorTitle'] : "";
		$authorTitle = mysqli_real_escape_string($con, $authorTitle);
		
		$testimonial = isset($_POST['testimonial']) ? $_POST['testimonial'] : "";
        $testimonial = mysqli_real_escape_string($con, $testimonial);

        $altTag = isset($_POST['altTag']) ? $_POST['altTag'] : "";
        $altTag = mysqli_real_escape_string($con, $altTag);
        
        $company = isset($_POST['company']) ? $_POST['company'] : "";
        $company = mysqli_real_escape_string($con, $company);
        
        $active = isset($_POST['active']) ? $_POST['active'] : "";
        $active = mysqli_real_escape_string($con, $active);

        $featured = isset($_POST['featured']) ? $_POST['featured'] : "";
        $featured = mysqli_real_escape_string($con, $featured);

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
                    "/Users/anibalcruz/Sites/Payrailz/public/uploads/" . $_FILES["file"]["name"]);
                    // Above is local

                    // Production
					// "/home/crystal/public_html/uploads/news/" . $_FILES["file"]["name"]);
                    
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
        $sql = "INSERT INTO testimonials (imageUrl, altTag, author, authorTitle, testimonial, company, active, featured ) 
                VALUES ('$uploaded', '$altTag','$author', '$authorTitle', '$testimonial', '$company', '$active', '$featured')";
                
        // mysqli_query($con, $sql);
        // header("location: news.php");
        
        if ( mysqli_query($con, $sql) ) {
            header("location: testimonials.php");
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
        <title>Payrailz: Add Testimonial</title>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <?php require_once('1_inc/tiny.php'); ?>
    </head>
    
    
    <body class="adminArea">
        <!-- HEADER -->  
        <?php require_once('1_inc/header-admin.php'); ?>
        
        <!-- MAIN CONTENT -->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container">
                <h2 class="text-center">Admin: Add Testimonial</h2>
                <hr class="pb-4">
                <form id="form1" name="form1" method="post" enctype="multipart/form-data" >                 
                    <!-- Testimonial-->
                    <!-- Author -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Author:</h4> 
                            <input type="text" name="author" value="" class="form-control" placeholder="AUTHOR"/>
                        </div>
                    </div>
                    <!-- Author Title -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Author Title:</h4> 
                            <input type="text" name="authorTitle" value="" class="form-control" placeholder="TITLE"/>
                        </div>
                    </div>
                    <!-- Testimonial -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Testimonial:</h4> 
                            <textarea name="testimonial" cols="" rows="" class="form-control" placeholder="TESTIMONIAL"></textarea>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="row justify-content-center mt-2">
                        <div class="form-group col-8">
                            <h4><label for="file">Image:</label></h4>
                            <input type="file" name="file" id="file">
                        </div>
                    </div>
                    <!-- Image Alt Tag -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Image Alt Text:</h4> 
                            <input type="text" name="altTag" value="" class="form-control" placeholder="ALT TEXT"/>
                        </div>
                    </div>
                    <!-- Company -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Company:</h4> 
                            <input type="text" name="company" value="" class="form-control" placeholder="COMPANY"/>
                        </div>
                    </div>
                    <!-- Active -->
                    <div id="activeArea" class="row justify-content-center mt-3">
                        <div class="form-group col-8">
                            <h4>Featured on Site:</h4> 
                            <label for="featured">
                                <input type="radio" name="featured" id="featured" value="1"> Yes
                            </label>
                            <label for="non-active">
                                <input type="radio" name="featured" id="non-featured" value="0" checked="checked"> No
                            </label>
                            <br>

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
                            Add Testimonial
                        </button>
                        <a href="testimonials.php">
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
    </body>

</html>