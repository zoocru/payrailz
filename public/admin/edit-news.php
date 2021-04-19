<?php
	require_once 'authorize.php';
    require('../db.php');
    
    if(isset($_GET['id'])) {
		$id = $_GET['id'];
		
		$sql2 = "SELECT * FROM news WHERE id='$id'";
		$results = mysqli_query( $con, $sql2 );
		$row = mysqli_fetch_array( $results );
	}

	if (isset($_POST['submit'])) {	
		$title = isset($_POST['title']) ? $_POST['title'] : "";
        $title = mysqli_real_escape_string($con, $title);
        
        $subTitle = isset($_POST['subTitle']) ? $_POST['subTitle'] : "";
		$subTitle = mysqli_real_escape_string($con, $subTitle);
		
		$introText = isset($_POST['introText']) ? $_POST['introText'] : "";
        $introText = mysqli_real_escape_string($con, $introText);
        
        $imageTitle = isset($_POST['imageTitle']) ? $_POST['imageTitle'] : "";
        $imageTitle = mysqli_real_escape_string($con, $imageTitle);

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
                    
                    // Lets insert into database
                    $sql = "UPDATE news SET imageName='$uploaded' WHERE id='$id'";
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
        
        $sql2 = "UPDATE news
                SET title = '$title', 
                    subTitle = '$subTitle', 
                    introText = '$introText', 
                    altTag = '$altTag', 
                    copyBlock = '$copyBlock', 
                    active = '$active'
                WHERE id='$id'";
    
        mysqli_query($con, $sql2);
        header("location: news.php");	
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
                    <h2>Admin: Edit News Article</h2>
                    <hr class="pb-4">
                    <form id="form1" name="form1" method="post" enctype="multipart/form-data" >                
                        <!-- NEWS-->
                        <div class="row justify-content-center">
                            <div class="form-group col-8">
                                <h4>News Item Title:</h4> 
                                <input type="text" name="title" value="<?=$row['title']?>" class="form-control" placeholder="TITLE"/>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-8">
                                <h4>Subtitle:</h4> 
                                <input type="text" name="subTitle" value="<?=$row['subTitle']?>" class="form-control" placeholder="SUBTITLE"/>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-8">
                                <h4>Abstract:</h4> 
                                <textarea name="introText" cols="" rows="" class="form-control" placeholder="abstract"><?=$row['introText']?></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-8">
                                <h4>Image:</h4>
                                <img src="../uploads/news/<?=$row['imageName']?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-8">
                                <label for="file">Image:</label>
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
                                <h4>Main News Content:</h4> 
                                <textarea name="copyBlock" cols="" rows="" class="form-control" placeholder="MAIN NEWS CONTENT"><?=$row['copyBlock']?></textarea>
                            </div>
                        </div>
                        <div id="activeArea" class="row justify-content-center">
                            <div class="form-group col-8">
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
                                Edit News Item
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