<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="apple-touch-icon" sizes="57x57" href="css/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="css/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="css/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="css/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="css/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="css/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="css/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="css/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="css/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="css/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="css/img/favicon/favicon-16x16.png">
<link rel="manifest" href="css/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<script src="js/lib/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico" rel="stylesheet">
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    display: block;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    /*float: left;*/
    width: 50%;
    margin-left: 25%;
    display: block;

}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
body{
    background: #563f46; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left, #563f46 ,  #c8c3cc); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, #563f46,  #c8c3cc); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #563f46,  #c8c3cc); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, #563f46 ,  #c8c3cc); /* Standard syntax */
    padding:0;
    margin:0;
}
h2{
    font-family: 'Indie Flower', cursive;
    font-family: 'Pacifico', cursive;
    font-size: 25px;
    position: absolute;
    left:40%;
    top:0%;
}
.registrate{
    background-color: #563f46 ;
}
.cancelar{
     background-color: #c8c3cc;
}
#fondo{
    background-image: url('css/img/suculentas2.jpg');
     background-repeat: no-repeat;
     
}
i{
    position: absolute;
    /*left:calc(45% - 379px);*/
    top:3%; 
    /*animation: animacion infinite ease-in-out;*/
    -webkit-animation-name: animacion; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation-name: animacion;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-out;
    cursor: pointer;
}
@-webkit-keyframes animacion {
    0% { left: calc(45% - 370px); }
    50% { left:calc(45% - 380px); }
    75% { left: calc(45% - 375px); }
}
@-o-keyframes animacion {
    from { left: calc(45% - 370px); }
    to { left:calc(45% - 379px); }
}
@-moz-keyframes animacion {
    from { left: calc(45% - 370px); }
    to { left:calc(45% - 379px); }
}
@keyframes animacion {
    from { left: calc(45% - 370px); }
    to { left:calc(45% - 379px); }
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
   }
}
#regresar{
    color:white;
    position:absolute;
    left:calc(45% - 330px);
    top:5%;   
    cursor: pointer;
}
</style>
<body>
<a href="index.php"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a>
<a href="index.php"><label id="regresar">Regresar</label></a>
<div class="container" id="fondo" style="background-color: blue; position: absolute; width: 35%;left:calc(45% - 379px);top:10%;height:500px">
    
</div>

    <form action="register.php" method="post">

      <div class="container" style="background-color: white; position: absolute; width: 35%;left:calc(50% + 5px);top:10%;height:500px;">
         <h2>Regístrate</h2>
          <label><b>Nombre de usuario</b></label>
         <input type="text" placeholder="Ingresa nombre usuario" name="username" required>
         <label><b>Email</b></label>
         <input type="email" placeholder="Ingresa Email" name="email" required>

         <label><b>Contraseña</b></label>
         <input type="password" placeholder="Ingresa contraseña" name="password_1" required>

         <label><b>Repetir contraseña</b></label>
         <input type="password" placeholder="Repetir contraseña" name="password_2" required>
         <input type="checkbox" checked="checked"> Recordarme
         <br>
         <a href="login3.html" style="color:black">Ya tienes una cuenta, inicia sesión</a>
         <div class="clearfix">
           <button type="submit" name="signup" class="signupbtn registrate">Regístrate</button>
           

       </div>
   </div>
</form>

</body>
</html>
