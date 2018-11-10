var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    
    $scope.user="";
    $scope.password="";
    $scope.existeuser=function(){
        $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/logp.php?user="+$scope.user+"&password="+$scope.password).then(function (response) {
                $scope.myData = response.data;
            if(response.data !== null){
                if($scope.myData.user == $scope.user && $scope.myData.password == $scope.password){
                     
                 swal({
                        title: "Nos alegra tenerte aquí!! :'D", 
                        text: "Bienvenido al inventario "+$scope.myData.nombre+".", 
                        icon: "success",
                        button: "Aceptar"
                    }).then( function() {
                                if($scope.myData.tipo == 1){
                                     $("#login").modal("hide");
                                    $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                        $scope.myData = response.data;
            
                                    });
                                   $('.datos').show();
                                   
                                   $('.cerrarsesion').css({display:'inline'});
                                   $('.cerrarsesion').show();
                                   $('.iniciarsesion').css({display:'none'});
                                }
                                else if($scope.myData.tipo == 2){
                                     $("#login").modal("hide");
                                     $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                        $scope.myData = response.data;
            
                                    });
                                     $('.datos').show();
                                     $('.iniciarsesion').css({display:'none'});
                                     $('.cerrarsesion').css({display:'inline'});
                                     $('.cerrarsesion').show();
                                    window.location.href="#";
                              
                                }
                   });
                }else{
                    swal({
                  title: "Algo salió mal!",
                  text: "El usuario y/o contraseña son incorrectos!!!",
                  icon: "error",
                  button: "Aceptar!",
                }).then(function() {
                        // Redirect the user
                        window.location.href = "#";
                });
                }
            }else{
                    swal({
                      title: "Algo salió mal!",
                      text: "Llena los campos del formulario para iniciar sesión!",
                      icon: "error",
                      button: "Aceptar.",
                    }).then(function() {
                            // Redirect the user
                            window.location.href = "#";
                    });
            }
        }); 
    };
    $scope.cerrarsesion=function(){
        $scope.user="";
        $scope.password="";
        
        $('.datos').css({display:'none'});
        $('.iniciarsesion').show();
        $('.cerrarsesion').css({display:'none'});
        
        swal({
                title: "Cerrar sesión",
                text: "Haz cerrado sesión satisfactoriamente!",
                icon: "success",
                button: "Aceptar.",
                    }).then(function() {
                            // Redirect the user
                            window.location.href = "#";
                    });
    }
});