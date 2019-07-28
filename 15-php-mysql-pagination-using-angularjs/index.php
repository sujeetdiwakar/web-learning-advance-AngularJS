<?php
//index.php

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Mysql Pagination using AngularJS</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="dirPaginate.js"></script>
	</head>
	<body>
		<div class="container" ng-app="paginationApp" ng-controller="paginationController">
			<br />
			<h3 align="center">PHP Mysql Pagination using AngularJS</h3>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Student Name</th>
							<th>Student Phone</th>
						</tr>
					</thead>
					<tbody>
						<tr dir-paginate="singleData in allData|itemsPerPage:10">
							<td>{{ singleData.student_name }}</td>
							<td>{{ singleData.student_phone }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div align="right">
				<dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" >
				</dir-pagination-controls>
			</div>
		</div>
	</body>
</html>

<script>
var pagination_app = angular.module('paginationApp', ['angularUtils.directives.dirPagination']);
pagination_app.controller('paginationController', function($scope, $http){
	$http.get('fetch.php').success(function(data){
		$scope.allData = data;
	});
});
</script>
