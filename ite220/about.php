<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us - Store 404</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="landing.php"><img class="navbar-brand pull-left" src="img/404-icon.png" alt="404 logo"/></a>
                <a class="navbar-brand" href="landing.php">Store 404</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php">Shop</a>
                    </li>
                    <li>
                        <!--<a href="#">Cart</a>-->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="business" value="404 Store">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <input type="image" src="img/cart.png" name="submit" value="View Cart">
                        </form>
                    </li>
                    <li>
                        <?php session_start();
                         if(isset($_SESSION['username']) && $_SESSION['username'] == true): ?>
                            <a href="logout.php">Log out</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
					<li>
						<a href="about.php">About Us</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Error404 is an electrical hardware store privatly owned by anon<sup>1</sup> for the purpose of selling and delivering hardware products for computers.</p>
				<small>1. anon is... no idea.</small>
            </div>
        </div>
		
		<!-- History Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">History
                    <small>Error 404 started with... an error.</small>
                </h1>
                <p>The group is forcefully founded on January 2017 and impulsively named Error 404. The group presented their first store to a disappointed audience. Not long after, the store was quickly folded.</p>
				<img class="thumbnail img-reponsive" src="img/oldstore.png" width="100%"/>
				<p>After merciful opportunity was presented, the group regroups and <button type="button" class="btn btn-danger btn-lg" onclick="play();">RELAUNCH!</button> their new store!</p>
				<audio id="audio" src="mp3/relaunch.mp3"></audio>
				<script>
					function play(){
						var audio = document.getElementById("audio");
						audio.play();
					}
				</script>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/team/Finn.png" alt="finn">
                <h3>Tee Gomez
                    <small>The Human</small>
                </h3>
                <p>Main Protagonist</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/team/Jakesalad.png" alt="jake">
                <h3>Pavin R
                    <small>The Dog</small>
                </h3>
                <p>Constant companion, best friend, and adoptive brother</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/team/BMO.png" alt="bmo">
                <h3>Poom S
                    <small>Living Video Game Console</small>
                </h3>
                <p>Loyal, trusting, and helpful friend</p>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Store 404, 2017. All Rights Reserved</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- PPminiCart -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
    <script>paypal.minicart.render();</script>

</body>

</html>
