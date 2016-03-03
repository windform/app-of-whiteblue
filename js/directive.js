var app=angular.module("app",[]);
/*app.directive("hello",function(){
	return {
		restrict:"E",
		template:"<h1>Hi There<span ng-transclude></span></h1>",
		transclude:true,
		replace:true
		}
	
	})*/
	
	
/*app.directive("hello",function(){
	return {
		restrict:"E",
		template:"<h1>Hi There</h1>",
		replace:true
		}
	})*/
	
app.directive('hello', function() {
    return {
        restrict: 'E',
        template: '<strong>Hi there</strong>',
        replace: true
    };
});
app.controller('MyController',function($scope) {
    $scope.things = [1,2,3,4,5,6];
});