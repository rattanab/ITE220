<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store 404 - Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesomw -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/shoponload.js"></script>
</head>

<body>

    <!-- Facebook Feed -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1593786353971449";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Facebook Follow -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1593786353971449";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                            if(isset($_SESSION['username'])==true):?>
                                <a href='logout.php'>Logout</a>
                        <?php else: ?>
                                <a href='login.php'>Login</a>
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

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Components</p>
                <div class="list-group">
                    <a href="#" class="list-group-item" onclick="listcpuitem();">CPU</a>
                    <a href="#" class="list-group-item" onclick="listmbitem();">Mainboard</a>
                    <a href="#" class="list-group-item" onclick="listsditem();">Storage</a>
                </div>
                <div class="fb-follow pull-right" data-href="https://www.facebook.com/notebookspec/" data-layout="button" data-size="large" data-show-faces="false"></div>
                <div class="fb-page" data-href="https://www.facebook.com/notebookspec/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/notebookspec/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/notebookspec/">notebookspec</a></blockquote></div>
            </div>

            <div class="col-md-9">

                <div class="row">
                    <span id="itemlist"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Store 404, 2017. All Rights Reserved</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Categories Sorter -->
    <script type="text/javascript" src="js/itemcategories.js"></script>

    <!-- PPminiCart -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
    <script>paypal.minicart.render();</script>

</body>
</html>


