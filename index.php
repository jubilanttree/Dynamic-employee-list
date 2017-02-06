<!DOCTYPE html>
<html lang="en" ng-app="admin">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://rawgit.com/rzajac/angularjs-slider/master/dist/rzslider.css" />
</head>
<body>
	<main>
		<?php include_once("inc/left.inc.php"); ?>
		<?php include_once("inc/header.inc.php"); ?>
		  <div class="al-main">
			<div class="al-content">
				<div ng-view></div>
			</div>
		  </div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-route.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-resource.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-sanitize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.10/angular-cookies.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.4/ui-bootstrap-tpls.min.js"></script>
	<script src="https://rawgit.com/rzajac/angularjs-slider/master/dist/rzslider.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controller.js"></script>
</body>
</html>