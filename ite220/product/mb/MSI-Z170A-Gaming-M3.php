<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MSI Z170A Gaming M3 - Shop Item</title>

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
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="/ite220/img/product/mb/z170a-gaming-m3.jpg" alt="z170a-gaming-m3-1">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/ite220/img/product/mb/z170a-gaming-m3-2.jpg" alt="z170a-gaming-m3-2">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/ite220/img/product/mb/z170a-gaming-m3-3.jpg" alt="z170a-gaming-m3-3">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <dir class="col-md-8">
                    <div class="caption-full">
                        <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="Store 404">
                            <input type="hidden" name="item_name" value="MSI Z170A Gaming M3">
                            <input type="hidden" name="amount" value="5200">
                            <input type="hidden" name="currency_code" value="THB">
                            <button type="submit" class="btn btn-success pull-right" name="submit">Add to <i class='fa fa-shopping-cart' aria-hidden='true'></i></button>
                        </form>
                        <h4 class="pull-right" style="color:green;">฿5,200</h4>
                        <h3>MSI Z170A Gaming M3</h3>
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
                                <th>CPU Support</th>
                                <td>Intel 6th & 7th Generation Pentium/Celeron/Core i3/Core i5/Core i7 processors</td>
                            </tr>
                            <tr>
                                <th>Memory Support</th>
                                <td>Slot: 4<br/>max: 64GB<br/>Type: Dual channel DDR4 2133 UP to 3466(OC)</td>
                            </tr>
                            <tr>
                                <th>VGA Onboard Chip</th>
                                <td>Intel HD Graphics Processor</td>
                            </tr>
                            <tr>
                                <th>Audio Chip</th>
                                <td>Realtek ALC1150 Audio Codec<br/>7.1 Channels HD Audio</td>
                            </tr>
                            <tr>
                                <th>Storage Connector</th>
                                <td>Port SATA 3: 6<br/>M.2 Slot: 1<br/>M.2 Support type: 2242/2260/2280<br/>RAID Support: 0/1/5/10</td>
                            </tr>
                            <tr>
                                <th>Expansion Slots</th>
                                <td>2 Slot PCIe x16<br/>2 Slot PCIe x1<br/>3 Slot PCI<br/>Cross Fire / SLI</td>
                            </tr>
                            <tr>
                                <th>Network</th>
                                <td>Killer™ E2400<br/>10/100/1000Mbps</td>
                            </tr>
                            <tr>
                                <th>Rear Panel Ports</th>
                                <td>USB 2.0: 2 Port<br/>USB 3.1: Type-A 6 Port<br/>DVI Output: 1 Port<br/>HDMI Output: 1 Port<br/>Port PS2: 2 Port</td>
                            </tr>
                            <tr>
                                <th>Physical Spec</th>
                                <td>Type: ATX<br/>24+8 Pin<br/>30.4 x 24.4 cm</td>
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
