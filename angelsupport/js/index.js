var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    
     
    
    alert("user sessionStorage: " + sessionStorage.user);
    
    $(document).ready(function(){
        //Menu toggle-button
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing"); 
        });
         //Scrolling Effect
        
        $(window).on("scroll", function() {
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }else{
                $('nav').removeClass('black');
            }
        });
        $(window).on('scroll', function(){
            if($(window).scrollTop()){
                $('.cool').addClass('black');
            }else{
                $('.cool').removeClass('black');
            }
        });
    });
    if(sessionStorage.user == undefined){
        alert("entra al if ss: "+ sessionStorage.user);
        $('iniciarsession').show();
         $("#login").modal({display:'show', backdrop: 'static', keyboard: false});
    }
    
    else if(sessionStorage.user !== null || sessionStorage.user !== undefined){
       
        $('.iniciarsesion').hide();
        $('.iniciarsesion').css({display:'none'});
        $('.cerrarsesion').css({display:'inline'});
        $('[data-toggle="popover"]').popover(); 
         swal("entro al elseif");
       $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                    $scope.myData = response.data;
                            });
                            $('.datos').show();
            $('.datos').css({display:'block'});
            alert("HOLAAA ya pase todo lo del elseif");
    }
    
    
    $scope.recuperardatos=function(){
        http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
            $scope.myData = response.data;
        });
    };
    $scope.existeuser=function(){
        $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/logp.php?user="+$scope.user+"&password="+$scope.password).then(function (response) {
                $scope.myData = response.data;
                //guardando variable de usuario en otra para comprobar si ya ha iniciado sesion aunque recargue la pagina
                sessionStorage.setItem("user", $scope.myData.user);
        if(response.data !== null){
            if($scope.myData.user == $scope.user && $scope.myData.password == $scope.password){
                     
                swal({
                    title: "Nos alegra tenerte aquí!! :'D", 
                    text: "Bienvenido al inventario "+$scope.myData.nombre+".", 
                    icon: "success",
                    button: "Aceptar"
                }).then( function() {
                        //para los doctores
                        if($scope.myData.tipo == 1){
                            $("#login").modal("hide");
                            http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                $scope.myData = response.data;
                            });
                            $('.datos').show();
                            $('.cerrarsesion').css({display:'inline'});
                            $('.iniciarsesion').css({display:'none'});
                        }
                        //para los pacientes
                        else if($scope.myData.tipo == 2){
                            $("#login").modal("hide");
                            $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                    $scope.myData = response.data;
                            });
                            $('.datos').show();
                            $('.iniciarsesion').css({display:'none'});
                            $('.cerrarsesion').css({display:'inline'});
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
            var refreshId =  setInterval( function(){
                $http.get("https://angelsupport.000webhostapp.com/angelsupport/API/data.php").then(function (response) {
                                    $scope.myData = response.data;
                            });
    $('.datos').load('../index.html');//actualizas el div
    console.log("Actualizando datos...!!");
   }, 1000 );
   
    //funcion cerrar sesion
    $scope.cerrarsesion=function(){
        $scope.user="";
        $scope.password="";
        sessionStorage.user="";
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
    };
});