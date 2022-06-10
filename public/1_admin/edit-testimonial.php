<?php
	require_once 'authorize.php';
    require('../db.php');
    
    if(isset($_GET['id'])) {
		$id = $_GET['id'];
		
		$sql2 = "SELECT * FROM testimonials WHERE id='$id'";
		$results = mysqli_query( $con, $sql2 );
		$row = mysqli_fetch_array( $results );
	}

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
                    // Local
					// move_uploaded_file($_FILES["file"]["tmp_name"],
					// "/Users/anibalcruz/Sites/Payrailz/public/uploads/" . $_FILES["file"]["name"]);
                    
                    // Production
                    move_uploaded_file($_FILES["file"]["tmp_name"],
					"/home/payweb1/public_html/uploads/" . $_FILES["file"]["name"]);

					$uploaded = $_FILES["file"]["name"];
                    
                    // Lets insert into database
                    $sql = "UPDATE testimonials SET imageUrl='$uploaded' WHERE id='$id'";
                    mysqli_query($con, $sql);   

                    // if ( mysqli_query($con, $sql) ) {
                    //     header("location: news.php");
                    // } else {
                    //     echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    // }
				} 
			} 
		} else {
			$invalidFile = " invalid file"; 
        } 
        
        $sql2 = "UPDATE testimonials
                 SET author = '$author', 
                     authorTitle = '$authorTitle', 
                     altTag = '$altTag', 
                     testimonial = '$testimonial',
                     company = '$company', 
                     featured = '$featured',
                     active = '$active'
                WHERE id='$id'";
    
        mysqli_query($con, $sql2);
        header("location: testimonials.php");	
    } 
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Payrailz: Edit Testimonial</title>
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
                <h2>Admin: Edit Testimonial</h2>
                <hr class="pb-4">
                <form id="form1" name="form1" method="post" enctype="multipart/form-data" >                
                    <!-- Testimonial -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Author:</h4> 
                            <input type="text" name="author" value="<?=$row['author']?>" class="form-control" placeholder="AUTHOR"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Author Title:</h4> 
                            <input type="text" name="authorTitle" value="<?=$row['authorTitle']?>" class="form-control" placeholder="TITLE"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Testimonial:</h4> 
                            <textarea name="testimonial" cols="" rows="20" class="form-control" placeholder="testimonial"><?=$row['testimonial']?></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Current Image:</h4>
                            <img src="../uploads/<?=$row['imageUrl']?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <label for="file" style="color: black;">New Image:</label>
                            <input type="file" name="file" id="file">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Image Alt Text:</h4> 
                            <input type="text" name="altTag" value="<?=$row['altTag']?>" class="form-control" placeholder="ALT TEXT"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Company:</h4> 
                            <input type="text" name="company" value="<?=$row['company']?>" class="form-control" placeholder="COMPANY"/>
                        </div>
                    </div>
                    <div id="activeArea" class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Featured on Site:</h4> 
                            <label for="featured">
                                <input type="radio" name="featured" id="featured" value="1" <?php $checked = ($row['featured'] == 1) ?  "checked=\"checked\"" : ""; echo $checked; ?>> Yes
                            </label>
                            <label for="non-featured">
                                <input type="radio" name="featured" id="non-featured" value="0" <?php $checked = ($row['featured'] == 0) ?  "checked=\"checked\"" : ""; echo $checked; ?>> No
                            </label>
                            <br>
                        
                            <h4>Active on Site:</h4> 
                            <label for="active">
                                <input type="radio" name="active" id="active" value="1" <?php $checked = ($row['active'] == 1) ?  "checked=\"checked\"" : ""; echo $checked; ?>> Yes
                            </label>
                            <label for="non-active">
                                <input type="radio" name="active" id="non-active" value="0" <?php $checked = ($row['active'] == 0) ?  "checked=\"checked\"" : ""; echo $checked; ?>> No
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button class="btn2 mr-2" type="submit" id="submit" name="submit">
                            Edit Testimonial
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