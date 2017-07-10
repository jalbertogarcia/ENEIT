<DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!--Checar-->
<!-- Custom Fonts -->
    <link rel="stylesheet" href="css/estiloVerProy.css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
     <form action="" method="post" onsubmit="return valida();">
     <h1>Mis Proyectos</h1>
    <!-- Header -->
    <header>
         <!--Mi Diseño--> 
             
             <table border="1" width="100%">
             <thead>
                 <td><b>Nombre del Proyecto</b></td>
             </thead>
             </table>
             <?php
                  include ("BDVerPro.php");
                  $Con = new conexion();
                  $Con->recuperarDatos();
                 ?>
               
              
         <!--terminacion de mi diseño-->
     </header>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>           
</form>
</body>
</html>