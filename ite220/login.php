<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>404 Store - Log in</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="css/landing-page.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div class="intro-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="intro-message">
						<br/>
						<br/>
						<br/>
						<form action="loginAction.php" method="POST">
							<h3>Username: guest</h3>
							<input type="text" class="form-control" placeholder="Enter username..." name="username" />
							<h3>Password: 1234</h3>
							<input type="password" class="form-control" placeholder="Enter password..." name="password" />
							<hr class="intro-divider">
							<ul class="list-inline intro-social-buttons">
								<li><button type="submit" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-log-in"></span> Log In</button></li>
								<li><a href="landing.php" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</a></li>
						</form>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
			</div>
		</div>
	</div>

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
    
	</body>
</html>