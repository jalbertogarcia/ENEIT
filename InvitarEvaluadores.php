<DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

	<title>Invitar Evaluadores</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

<!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom"><!--color y diseño del menu-->
    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
        
                  
                </button>
            </div>
    <!-- /.navbar-collapse -->
    </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
         <p><center>
         <form action="controller.php" method="post" >
         <table>
                <h1>INVITACION PARA POSIBLES EVALUADORES</h1>
              <h4 class="header">Lista de contactos</h4>
               
                <?php
                 include ("conexionBD.php");
                 $Con = new conexion();
                 $Con->recuperarDatos();
                ?>                 
          </td>             
     
                </tr>
      </table></center></p>
               <p><center>
              <table>
                <tr>
                <td><textarea id="Mensaje" name="Mensaje" rows="20" cols="60">Estimada(o) profesionista: 

                Con la finalidad de dar seguimiento a la convocatoria del ENEIT 2018, el Instituto 
                Tecnologico Superior del Occidente del Estado de Hidalgo (ITSOEH), celebra su etapa     local el dia ___ del mes ____,  del presente año.
                 Conociendo su expertiz y nivel de compromiso, deseamos invitarle a participar 
                 como jurado en este evento
                Si acepta participar, por favor confirme entrando a la direccion
                 www.eneit.itsoeh.edu.mx, su nombre
                de usuario es su correo electronico y su contraseña 12345 (podra perzonalizarla despues de iniciar).

                Saludos Coordiales.

                Jose Luis Oviedo</textarea></td>
                </tr>
                <tr>
                
                <td><center><input type="submit" value="Enviar Invitacion"  class="waves-effect waves-light btn"></center></td></tr>
             </table></center></p>
          </form>
        <!--terminacion de mi diseño-->

            <div class="row">
                <div class="col-lg-12">
                     <iframe src="" name="contenido" id="contenido" width="600" height="600" style="border:0px;"> </iframe>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
     <!-- Foote    
   

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
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>