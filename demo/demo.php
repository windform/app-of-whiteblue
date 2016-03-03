<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>angular请求json数据</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://apps.bdimg.com/libs/angular.js/1.3.9/angular.min.js"></script>
<style>
	table{
		border:solid 1px #C51417;
		margin:0;
		padding:0;
		}
	td{padding:5px 10px}
</style>
</head>

<body>
<div ng-app="myApp" ng-controller="myCtrl">
<!--/*<ul>
	<li ng-repeat="x in names">
    	{{x.Name+" , "+x.City+" , "+x.Country}}
    </li>
</ul> */-->
<table>
	<tr ng-repeat="y in names | orderBy:'City'">
    	<td ng-if="$odd" style="background-color:#C51417">{{$index+1}}</td>
        <td ng-if="$even">{{$index+1}}</td>
    	<td ng-if="$odd" style="background-color:#C51417">{{y.Name}}</td>
        <td ng-if="$even">{{y.Name}}</td>
    	<td ng-if="$odd" style="background-color:#C51417">{{y.City | lowercase}}</td>
        <td ng-if="$even">{{y.City | lowercase}}</td>
    	<td ng-if="$odd" style="background-color:#C51417">{{y.Country | uppercase}}</td>
        <td ng-if="$even">{{y.Country | uppercase}}</td>
    </tr>
</table>
</div>

<script>
angular.module('myApp',[]).controller('myCtrl',function($scope,$http){
	$http.get('data.json').
	success(function(response){$scope.names=response.records})
	})
</script>
</body>
</html>