<?php 
include('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US" ng-app="myFirstApp">
<head>
	<meta charset="UTF-8">
	<title>angular js</title>
</head>
<body>
	<div ng-controller="myFirstController" ng-init="mycool='red'" >
	<form action="" name="myForm">
	<input type="email" name="email" ng-model="sdfsdf" />
	<span ng-show="myForm.email.$error.email">this is not right</span>
	</form>
	</div>
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.4-build.3588/angular.js"></script>
	
	<script type="text/javascript" src="app.js"></script>
</body>
</html>