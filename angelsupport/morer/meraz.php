<!DOCTYPE html>
<html>
<head>
    <!--Caracteres especiales ó acentos-->
    <meta charset="UTF-8">
    <!--Descripcion de la pagina-->
    <meta name="description" content="Free Web tutorials">
    <!--Palabras clave para que los mototres de busqeuda encuentren la página-->
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!--Para poner el nombre de los autores de la página-->
    <meta name="author" content="John Doe">
    <!-- Controla las dimensiones y la escala de la página. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Página de inicio - Angel Support.</title>
    <!--Poner un icono en la pestaña del navegador -->
    <link rel="shortcut icon" href="./images/icon.webp">
    <!-- Clases de w3 para los elementos de la página.-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- 1js para ser la pagina dinamica y vistoza -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- estilos de bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Estilos puestos manualmente a la página -->
    <link rel="stylesheet" href="./css/index.css">
</head>
<style>
    header{
        background-color:lightgreen;
        height:300px;
    }
</style>
<body>
 <!--Controlador variables Angular -->
    <div ng-app="myApp" ng-controller="myCtrl">
       <header class="w3-green">
            <!--Agregar icono en el Header-->
            <div class="w3-bar topnav w3-green" id="myTopnav">
              <a class="logo" href="#"><img src="./images/logoagsup.ico" alt="" width="75px"></a>
                <a href="#contact" class="w3-bar-item w3-button w3-right">Contact</a>
                <a href="#support" class="w3-bar-item w3-button w3-right">Support</a>
                <a href="#solutions" class="w3-bar-item w3-button w3-right">Solutions</a>
                <a href="#pricing" class="w3-bar-item w3-button w3-right">Pricing</a>  
                <a href="#products" class="w3-bar-item w3-button w3-right">Products</a>
                <a href="#home" class="w3-bar-item w3-button w3-right active">Home</a>
            </div>
        </header>
        
        <div id="contenido">
            
            <div class="" id="datos">
                
               <p><strong>Note:</strong> The cards are displayed vertically on small screens (less than 576px):</p>
                  <div class="card-deck">
                    <div class="card bg-primary">
                      <div class="card-body text-center">
                        <p class="card-text">Some text inside the first card</p>
                        <p class="card-text">Some more text to increase the height</p>
                        <p class="card-text">Some more text to increase the height</p>
                        <p class="card-text">Some more text to increase the height</p>
                      </div>
                    </div>
                    <div class="card bg-warning">
                      <div class="card-body text-center">
                        <p class="card-text">Some text inside the second card</p>
                      </div>
                    </div>
                    <div class="card bg-success">
                      <div class="card-body text-center">
                        <p class="card-text">Some text inside the third card</p>
                      </div>
                    </div>
                    <div class="card bg-danger">
                      <div class="card-body text-center">
                        <p class="card-text">Some text inside the fourth card</p>
                      </div>
                    </div>  
                  </div>
            
            <div class="grid-container">
                <div class="card">
                  <div class="bg-img"></div>
                   <div class="content">
                    <h4>Card title</h4>
                    <p>Content....</p>
                    <button>Readmore</button>
                   </div>
                </div>
            </div>
            
            </div>    
            <div name="Products" id="">
                
            </div>
            
            
            <div name="Solutions" id="">
                
            </div>
            
            
            <div name="Support" id="">
                
            </div>
            
            
            <div name="Contact us" id="">
                
            </div>
    </div>
</body>
</html>