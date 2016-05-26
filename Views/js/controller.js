angular.module('Asignar', [])
.controller('AsignarController', function($scope, $http){
	$scope.profesores=[];
	$http.get("../asignar/listarProfesores")
	.success(function(data){
		console.log(data);
		$scope.profesores = data;
	})
});

