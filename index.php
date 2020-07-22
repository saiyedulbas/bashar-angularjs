<?php 
include('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-US" ng-app="myFirstApp">
<head>
	<meta charset="UTF-8">
	<title>Bashar's Angular js Todolist</title>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div ng-controller="myFirstController" ng-init="display()">
<div class="card">
  <div class="card-header bg-danger text-white">
    Bashar's Basic Angularjs Todolist
	<a class="btn btn-success ml-5" href="">Documentation</a>
	<a class="btn btn-success ml-5" href="">Site Tour</a>
	<a class="btn btn-success ml-5" href="">For any query, contact Bashar at 01834663387</a>
  </div>
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="emailHelp">First Name</label>
    <input class="form-control" id="emailHelp" type="text" ng-model="firstname" />
    
  </div>
  <div class="form-group">
    <label for="emailHelp1">Lastname</label>
    <input class="form-control" id="emailHelp1" type="text" ng-model="lastname" />
  </div>
  
  <input type="submit" class="btn btn-success" ng-click="insert()" value="{{btnname}}"/>
</form>
  </div>
</div>
	
	
	<br>
	
	
	
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="x in names">
      <th> {{$index+1}}</th>
      <td>{{x.firstname}}</td>
      <td>{{x.lastname}}</td>
      <td><button class="btn btn-success" ng-click="update(x.id,x.firstname,x.lastname)">Update</button></td>
      <td><button class="btn btn-danger" ng-click="delete(x.id)">Delete</button></td>
      
    </tr>
    
   
  </tbody>
</table>
<p style="margin-left:38%; color: #1a1818">Copyright &copy; All rights reserved by Bashar</p>
	</div>
</div>
	
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.4-build.3588/angular.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="app.js"></script>
</body>
</html>