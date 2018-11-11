var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    $http.get("https://jos2108pepe.000webhostapp.com/tesis-final/API/usuarios.php").then(function (response) {
      $scope.myData = response.data;
    
    });

    $scope.guardar=function(){
        $http.get("https://jos2108pepe.000webhostapp.com/tesis-final/API/cambiarcontrasena.php?contrasena="+$scope.contrasena).then(function (response) {
            $scope.myData = response.data;
            swal("Contraseña general cambiada", "Haz cambiado satisfactoriamente la contraseña general.", "suceess");
        }); 
    };
    
   $scope.recupera=function(){
        $http.get("https://jos2108pepe.000webhostapp.com/tesis-final/API/cargar.php").then(function (response) {
            $scope.myData = response.data;
            $scope.contrasena =response.data;
        }); 
   };
   $scope.recupera();
   
   $scope.salir=function(){
        sessionStorage.user="";
        sessionStorage.nombre="";
        sessionStorage.tipo="";
       
        window.location.href="./login.html";
    };
    
});