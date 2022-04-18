<?php
	require_once 'authorize.php';
	require('../db.php');

    if(isset($_GET['id'])) {
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM careers WHERE id='$id'";
		$results = mysqli_query( $con, $sql );
		$row = mysqli_fetch_array( $results );
	}

	if (isset($_POST['submit'])) {	        
        $title = isset($_POST['title']) ? $_POST['title'] : "";
		$title = mysqli_real_escape_string($con, $title);
		
		$overview = isset($_POST['overview']) ? $_POST['overview'] : "";
        $overview = mysqli_real_escape_string($con, $overview);
        
        $active = isset($_POST['active']) ? $_POST['active'] : "";
        $active = mysqli_real_escape_string($con, $active);
        
        // Lets update into database
        $sql = "UPDATE careers
                SET title = '$title', 
                    overview = '$overview',
                    active = '$active'
                WHERE id='$id'";

        mysqli_query($con, $sql);
        header("location: careers.php");

    } 
	
	mysqli_close( $con );
?>

<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Payrailz: Edit Career</title>
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
                <h2 class="text-center">Admin: Edit Career</h2>
                <hr class="pb-4">
                <form id="form1" name="form1" method="post" enctype="multipart/form-data" >                 
                    <!-- Career-->
                    
                    <!-- Title -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Title:</h4> 
                            <input type="text" name="title" value="<?=$row['title']?>" class="form-control" placeholder="TITLE"/>
                        </div>
                    </div>
                    <!-- Overview -->
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <h4>Overview:</h4> 
                            <textarea name="overview" cols="" rows="20" class="form-control" placeholder="OVERVIEW"><?=$row['overview']?></textarea>
                        </div>
                    </div>

                    <!-- Active -->
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
                            Edit Career
                        </button>
                        <a href="careers.php">
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