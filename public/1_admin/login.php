<?php
	session_start();
	$error_message = isset($_SESSION['error_message'])? $_SESSION['error_message'] : '';
?>

<!doctype html>

<html>

	<head>
        <meta charset="UTF-8">
        <title>Payrailz</title>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!-- site css files -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>

    
    <body class="adminArea">
        <!-- HEADER -->  
        <?php include("1_inc/header-admin.php"); ?>
        
        <!-- HERO -->
        <section id="heroAbout">
            <div class="insideHeroContent container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h1 class="text-uppercase">Admin</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Login -->
        <section id="insideContent" class="pb-0">
            <div id="adminContent"class="container">
                <h2 class="text-center pb-2">Admin: Login</h2>
                <hr class="pb-4">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="error_container">
                            <h4><?php echo $error_message; ?></h4>
                        </div>
                        <form id="form1" name="form1" method="post" enctype="application/x-www-form-urlencoded" action="authenticate.php">
                            <input name="subject" type="hidden" id="subject" value="login">
                            
                            <div class="form-group">
                                <label for="username">User name:</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter User Name" />
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" />
                            </div>
                            <div class="text-center pt-3">
                                <button class="btn2" type="submit" id="submit" name="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include("1_inc/footer-admin.php"); ?>
        
    </body>

</html>