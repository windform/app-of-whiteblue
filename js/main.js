'use strict';
/* App Module */
var myapp = angular.module('myapp', ['ngRoute']);
myapp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.when('/categories', {
        templateUrl: '/try/AngularJs/templates/categories.php',
        controller: 'maincontent'
      }).otherwise({
		  redirecTo:'/categories'
	  })
  }]);
  
  
  myapp.controller('maincontent',['$scope','$http',function($scope,$http){
	$http.get('data/phones.json').success(function(data){
		$scope.maindata=data;
		})
	// $scope.maindata=[{
	// 	"imageUrl":"http://www.runoob.com/try/demo_source/blue-album.jpg",
	// 	"title":"网站运营的变局风云",
	// 	"description":"但是在移动互联网、大数据潮流奔腾而来的2015年，内容为王已经动摇[...]"
	// 	},{
	// 	"imageUrl":"http://www.runoob.com/try/demo_source/siamese-dream.jpg",
	// 	"title":"从微信抢红包看用户的四大心理需求",
	// 	"description":"从马斯洛需求层次理论看，人的心理需求是逐级递升的，而从火热的微信[...]"
	// 	},{
	// 	"imageUrl":"http://www.runoob.com/try/demo_source/nevermind.jpg",
	// 	"title":"万科22条购房者的用户心理模型分析",
	// 	"description":"你是否想过，你真的了解你的客户吗？客户在买房时都在想些啥你过程中[...]"
	// 	},{
	// 	"imageUrl":"http://www.runoob.com/try/demo_source/license-to-ill.jpg",
	// 	"title":"如何避免开发一款失败的产品（中篇）",
	// 	"description":"在互联网行业，我们见过很多充分满足用户需求但没法赚钱、没法持续发[...]"
	// 	}]
		
	}])
