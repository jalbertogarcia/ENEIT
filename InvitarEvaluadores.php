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
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Invitar Evaluadores</a>
            </div>
    <!-- /.navbar-collapse -->
    </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
         <p><center>
         <table>
                <h1>INVITACION PARA POSIBLES EVALUADORES</h1>
              <tr>
                <td><label>Destinatarios: </label>
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
                <td><textarea name="textarea" rows="20" cols="60">Estimada(o) profesionista: 

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
                
                <td><center><input type="submit" value="Enviar Invitacion" id="btn-enviar" name="subir"></center></td></tr>
             </table></center></p>
          
        <!--terminacion de mi diseño-->

            <div class="row">
                <div class="col-lg-12">
                     <iframe src="" name="contenido" id="contenido" width="600" height="600" style="border:0px;"> </iframe>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
     <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    
   

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
</body>
</html>