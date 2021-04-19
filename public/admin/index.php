<?php
	require_once 'authorize.php';
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
        
        <style>
			p { line-height: 1.5em; }
		</style>
    
    </head>
    
    
    <body>
    	<!-- HEADER -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="/">
                        <img id="logo" src="../images/logo.svg" alt="Crystal Engineering Logo">
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <nav id="logOut">
                            <ul>
                                <li>
                                    <img src="../images/logout_icon.svg" alt="logout icon">
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- HERO -->
        <section id="heroAbout">
            <div class="insideHeroContent container">
                <h1 class="text-uppercase">Admin</h1>
            </div>
        </section>

        <main id="admin">
            <!--Login-->
            <section id="insideContent" class="pb-0">
                <div id="adminContent" class="container">
                    <h2 class="text-center">Admin</h2>
                    <hr class="pb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <div class="text-center adminLinks">
                                <a href="gallery.php">
                                    <img class="icons" src="../images/gallery-icon.svg">
                                    <h4>Gallery</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center adminLinks">
                                <a href="news.php">
                                    <img class="icons" src="../images/news-icon.svg">
                                    <h4>News</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include("1_inc/footer-admin.php"); ?>
        
    </body>

</html>