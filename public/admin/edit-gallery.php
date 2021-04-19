<?php
	require_once 'authorize.php';
	require('../db.php');
	
	if(isset($_GET['id'])) {
		
		$id = $_GET['id'];
		
		$sql2 = "SELECT * FROM gallery WHERE id='$id'";
		$results = mysqli_query( $con, $sql2 );
		$row = mysqli_fetch_array( $results );
		
	}
	
	if (isset($_POST['submit'])) {	
	
		$set = $_POST['set'];
		$set = mysqli_real_escape_string($con, $set);
		
		$title = $_POST['title'];
		$title = mysqli_real_escape_string($con, $title);
		
		$altTag = $_POST['altTag'];
		$altTag = mysqli_real_escape_string($con, $altTag);
		
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
				if (file_exists("gallery/" . $_FILES["file"]["name"])) {
					$alreadyExists = " already exists. ";
					//echo $_FILES["file"]["name"] . " already exists. ";
				} else {
					move_uploaded_file($_FILES["file"]["tmp_name"],
					"/home/crystal/public_html/uploads/gallery/" . $_FILES["file"]["name"]);
					$uploaded = $_FILES["file"]["name"];
					
					// Lets update the image in the database as well :)
					$sql = "UPDATE gallery SET image_name='$uploaded' WHERE id='$id'";
					mysqli_query($con, $sql);
				} 
			} 
		} 
		
		// Lets update this id again if things were changed. :)
		$sql3 = "UPDATE gallery 
				SET gallery_set = '$set',
					title ='$title', 
					altTag ='$altTag'
				WHERE id='$id'";
				
		mysqli_query($con, $sql3);
		header("location: gallery.php");	
		
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
    
        <a id="top"></a>
        
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
                <h2>Admin: Edit Gallery Item</h2>
                <hr class="pb-4">
                <form id="form1" name="form1" method="post" enctype="multipart/form-data" >
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Image:</h4>
                            <img src="../uploads/gallery/<?=$row['image_name']?>" class="img-fluid"/>
                            <h4>New Image?</h4>
                            <div class="form-group">
                                <label for="image"><strong>Image</strong>: <input type="file" name="file" id="file"></label>
                            </div> 
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Image Alt Tag:</h4>
                            <input type="text" id="altTag" name="altTag" class="form-control" value="<?=$row['altTag']?>" />
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Title:</h4>
                            <input type="text" id="title" name="title" class="form-control" value="<?=$row['title']?>" />
                        </div>
                    </div>
                    <div id="activeArea" class="row justify-content-center">
                        <div class="form-group col-8">
                                <h4>Gallery Set:</h4>
                                <label>
                                    <input type="radio" name="set" value="Plant" <?php $checked = ($row['gallery_set'] == "Plant") ?  "checked=\"checked\"" : ""; echo $checked; ?> >&nbsp;&nbsp;Plant
                                </label>
                                <label>
                                    <input type="radio" name="set" value="People" <?php $checked = ($row['gallery_set'] == "People") ?  "checked=\"checked\"" : ""; echo $checked; ?> >&nbsp;&nbsp;People
                                </label>
                                <label>
                                    <input type="radio" name="set" value="Parts" <?php $checked = ($row['gallery_set'] == "Parts") ?  "checked=\"checked\"" : ""; echo $checked; ?> >&nbsp;&nbsp;Parts
                                </label>
                            </p>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button class="btn2 mr-2" type="submit" id="submit" name="submit">
                            Edit Gallery Image
                        </button>
                        <a href="gallery.php">
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