<?php

define( 'ABSPATH', dirname( __FILE__ ) );
include_once( ABSPATH . '/includes/reasons.php' );
require_once( ABSPATH . '/includes/Reason.php' );

// The reason list globalized from reasons.php
global $reasonList;

// Instantiate the Reason class and populate it
$reason = new Reason( $reasonList );

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Reasons Jesus Doesn't Talk to Us Anymore</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<!-- Custom styles for this template -->
		<link href="cover.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="masthead clearfix">
						<div class="inner">
<!-- 							<h3 class="masthead-brand">Cover</h3>
							<nav>
								<ul class="nav masthead-nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</nav> -->
						</div>
					</div>
					<div class="inner cover">
						<p class="lead">Jesus doesn't talk to us anymore because of...</p>
						<h1 class="cover-heading"><?php echo $reason->getReason(); ?></h1>
						<p class="lead"><a href="javascript:location.reload(true)" class="btn btn-default">Why else?</a></p>
					</div>
					<div class="mastfoot">
<!-- 						<div class="inner">
							<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../assets/js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		<script src="resources/js/jesus.js"></script>
	</body>
</html>
