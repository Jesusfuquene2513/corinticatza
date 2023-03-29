<?php
if(isset($_SESSION['cliente'])){
    
}else{
   $_SESSION['cliente'] = 1;
    contadorvisitas();
  
}
$_SESSION['user']= 1;
if(!isset($_SESSION['user'])){// Esta logeado?.
 header("Location: logout.php"); 
}
// La variable $_SESSION['usuario'] es un ejemplo.

//Verifico el tiempo si esta seteado, caso contrario lo seteo.
if(isset($_SESSION['time'])){
 $tiempo = $_SESSION['time'];
}else{
 $tiempo = strtotime(date("Y-m-d H:i:s"));
}

$inactividad =100;   //Exprecion en segundos.

$actual =  strtotime(date("Y-m-d H:i:s"));

if( ($actual-$tiempo) >= $inactividad){
 contadorvisitas();
 // En caso que este sea mayor del tiempo seteado lo deslogea.
}else{
 $_SESSION['time'] =$actual;
}



//contadorvisitas();
function contadorvisitas()
    {
       
     $ruta_archivo = 'contadorvisitas.txt';
    $path = 'application/contador/'.$ruta_archivo;
  $archivo = file_get_contents($path);
  $suma = $archivo + 1;
  
    
    $archivo2 = file_get_contents($path);
$fp = fopen($path, 'w');
fwrite($fp, $suma ); 
    $_SESSION["visitantes"] = $suma;
    fclose($fp);  
       
    }
$direccion = "Direccion Fupdeco";
$_SESSION["direccion"]=$direccion;

$telefono = "Telefono Fupdeco";
$_SESSION["telefono"] = $telefono;



$dia = date('d');

$mes = date('m');

switch ($mes) {
    case '01':
       $mes = "Enero";
        break;
    
   case '02':
       $mes = "Febrero";
       break;
       case '03':
           $mes = "Marzo";
           break;

           case '04':
               $mes = "Abril";
               break;
               case '05':
                   $mes = "Mayo";
                   break;
                   case '06':
                       $mes = "Junio";
                       break;
                       case '07':
                           $mes = "Julio";
                           break;
                           case '08':
                               $mes = "Agosto";
                               break;
                               case '09':
                                   $mes = "Septiembre";
                                   break;
                                   case '10':
                                       $mes = "Octubre";
                                       break;
                                       case '11':
                                           $mes = "Noviembre";
                                           break;
                                           case '12':
                                               $mes = "Diciembre";
                                               break;

                                               
}
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Corinticatza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../plantilla/img/icon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ../plantilla/libraries Stylesheet -->
    <link href="../plantilla/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../plantilla/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../plantilla/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../plantilla/css/style.css" rel="stylesheet">
    <link href="../plantilla/css/colores.css" rel="stylesheet">
    <link href="../plantilla/css/sol.css" rel="stylesheet">
    <link href="../plantilla/css/slider.css" rel="stylesheet">
    <link href="../plantilla/css/footer.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    
   
    <div class="container-fluid" style="width:100%; position:fixed; z-index:100">
    <div class="row">
    <div class="container-fluid cinta px-0 d-none">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 telefono d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cinta px-0" style="height:50px;" id="sol">
        <div class="row">
           
        </div>
    </div>
    </div>
<div class="row">
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="../index.php/Home" class="navbar-brand d-flex align-items-center">
            <img src="../plantilla/img/logo.png" alt="" style="width:250px">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.php/Home" class="nav-item nav-link active">Inicio</a>
                <a href="../index.php/About" class="nav-item nav-link">Nosotros</a>
                <a href="../index.php/Team" class="nav-item nav-link">Equipo</a>
                <a href="../index.php/Portafolio" class="nav-item nav-link">Programas</a>
                <a href="../index.php/Publicaciones" class="nav-item nav-link">Publicaciones</a>
                <a href="../index.php/Blog" class="nav-item nav-link">Galería</a>
                <a href="../index.php/Contacto" class="nav-item nav-link">Contactanos</a>
                
               
            </div>
            
        </div>
    </nav>
</div>
    </div>


    <!-- Navbar Start -->
    