<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Intel i5-7400 - Shop Item</title>

    <!-- Bootstrap Core CSS -->
    <link href="/ite220/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesomw -->
    <link href="/ite220/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/ite220/css/shop-item.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/ite220/css/specpage.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Facebook like button-->
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
                <a href="/ite220/landing.php"><img class="navbar-brand pull-left" src="/ite220/img/404-icon.png" alt="404 logo"/></a>
                <a class="navbar-brand" href="/ite220/landing.php">Store 404</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/ite220/home.php">Shop</a>
                    </li>
                    <li>
                        <!--<a href="#">Cart</a>-->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="business" value="Store 404">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <input type="image" src="/ite220/img/cart.png" name="submit" value="View Cart">
                        </form>
                    </li>
                    <li>
                        <?php
                            session_start();
                            if(isset($_SESSION['username'])==true):
                                echo "<a href='/ite220/logout.php'>Log out</a>";
                            else:
                                echo "<a href='/ite220/login.php'>Log in</a>";
                            endif;
                        ?>
                    </li>
                    <li>
                        <a href="/ite220/about.php">About Us</a>
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

            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="/ite220/img/product/cpu/intel_i5.jpg" alt="intel i5-7400">
                    </div>
                </div>
                <dir class="col-md-8">
                    <div class="caption-full">
                        <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="Store 404">
                            <input type="hidden" name="item_name" value="Intel Core i5-7400">
                            <input type="hidden" name="amount" value="7250">
                            <input type="hidden" name="currency_code" value="THB">
                            <button type="submit" class="btn btn-success pull-right" name="submit">Add to <i class='fa fa-shopping-cart' aria-hidden='true'></i></button>
                        </form>
                        <h4 class="pull-right" style="color:green;">฿7,250</h4>
                        <h3>Intel i5-7400</h3>
                    </div>
                    <br/>
                    <div class="table-responsive">
                        <!--Facebook Like button -->
                        <div class="fb-like pull-right" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                        <h4>Specification</h4>
                        <table class="table table-striped">
                            <tr>
                                <th>Socket</th>
                                <td>LGA1151</td>
                            </tr>
                            <tr>
                                <th>CPU Core / Thread</th>
                                <td>4/4</td>
                            </tr>
                            <tr>
                                <th>Frequency</th>
                                <td>3.00 GHz</td>
                            </tr>
                            <tr>
                                <th>Turbo</th>
                                <td>3.50 GHz</td>
                            </tr>
                            <tr>
                                <th>CPU Bus</th>
                                <td>8 GT/s DMI</td>
                            </tr>
                            <tr>
                                <th>Architecture</th>
                                <td>14nm</td>
                            </tr>
                            <tr>
                                <th>Cache L2</th>
                                <td>4 x 256KB</td>
                            </tr>
                            <tr>
                                <th>Cache L3</th>
                                <td>6MB</td>
                            </tr>
                            <tr>
                                <th>Power Peak</th>
                                <td>65W</td>
                            </tr>
                        </table>
                    </div>
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
    <script src="/ite220/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/ite220/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
    <script>paypal.minicart.render();</script>
</body>

</html>
