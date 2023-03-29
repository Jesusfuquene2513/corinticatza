<?php
include_once "constantes.php";


$rut = $instancia -> rut();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid" style="width:100%; margin-bottom:30px;">
       <div class="row" style="100%;">
       <?php
$nombreImagen = "http://localhost/corinticatza/plantilla/img/logo.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
    ?>
          <div class="col" style="width:50%; text-align: center; float:left">
             <img src="<?php echo $imagenBase64;?>" alt="" style="width:70%;"> 
          </div>
          <div class="col" style="width:50%; text-align: right; float:left">
              <span style="font-weight:bolder">NIT <?php echo $rut ?></span>
          </div>
           
       </div>
      
        
    </div>
    <div class="container-fluid" style="width:100%; margin-top: 80px">

      <div class="row" style="width: 80%; margin:auto;  text-align: right">
   <?php
   $dia = date('d');
   $mes = date('m');
   if($mes == "01"){
    $mes = "Enero";
}
if ($mes == "02") {

    $mes = "Febrero";
    # code...
}
if ($mes == "03") {

    $mes = "Marzo";
    # code...
}
if ($mes == "04") {

    $mes = "Abril";
    # code...
}
if ($mes == "05") {

    $mes = "Mayo";
    # code...
}

if($mes == "06"){

    $mes = "Junio";
}

if($mes == "07"){

    $mes = "Julio";
}
if ($mes == "08") {

    $mes = "Agosto";
    # code...
}

if ($mes == "09") {

    $mes = "Septiembre";
    # code...
}

if ($mes == "10") {

    $mes = "Octubre";
    # code...
}

if($mes == "11"){

    $mes = "Noviembre";
}

if ($mes == "12") {
    $mes = "Diciembre";
}
   ?>
         <span for="" style="text-align: right; color:black"> Santiago de Cali, <?php echo $dia; ?> de <?php echo $mes; ?> del 2023
</span>

          
          
           
       </div>

      </div>
      <div class="container-fluid" style="width:100%; margin-bottom: 20px; margin-top:20px;">

      <div class="row" style="width: 80%; margin:auto;  text-align: left">
    
         <span for="" style="text-align: left; color:black"> Señores(as): Asoatip
</span>

          
          
           
       </div>

      </div>

      <div class="container-fluid" style="width:100%; margin-bottom: 40px; margin-top:0px;">

<div class="row" style="width: 80%; margin:auto;  text-align: left">

   <p style="text-align: justify">Yo <?php echo $_SESSION['user']; ?> con cedula de ciudadania # <?php echo $_SESSION['CC']; ?>, Con domicilio en el municipio de (<?php echo  $_SESSION['mun'] ?> - <?php echo  $_SESSION['dep']; ?>), expreso mi interes hacia ustedes de la siguiente manera </p>
<p style="text-align: justify"> <span style="color:black; font-weight:bolder;">Consulta: </span> <?php echo  $_SESSION['consulta']; ?> </p>
<p style="text-align: justify"> Espero Recibir Respuesta lo mas antes Posible, estos son mis Datos personales de contacto: </p>

<ul>
    
    <li>Teléfono:  <b><?php echo $_SESSION['telefono']; ?></b></li>
    <li>Correo: <b><?php echo $_SESSION['email']; ?></b></li>
</ul>

</span>

    
    
     
 </div>

</div>

</body>
</html>