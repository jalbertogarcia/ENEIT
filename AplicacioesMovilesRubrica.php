<?php
session_start();

  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo'] != "Evaluador") {
        header('Location: Coordinador.php');
    }else{
        header('Location: ');
    } 
  }else{
    header('Location: index.php');
  }
 ?>
<DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

	<title>Rubrica Aplicaciones Moviles</title>
  <link rel="stylesheet" type="text/css" href="css/tablaRubrica.css">
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
     
         <img src="img/SEP.jpg" width="400px" height="200px">
         
                <h2>EVENTO NACIONAL ESTUDIANTIL DE INNOVACION TECNOLOGICA 2017</h2>
                <H2>ETAPA LOCAL</H2>
                <BR>
                <h2> FORMATO DE EVALUACION   CATEGORIA: APLICACIONES MOVILES</h2>
                <BR>
                <h2> INSTITUTO TECNOLÓGICO SUPERIOR DEL OCCIDENTE DEL ESTADO DE HIDALGO</h2>
             <p><center>  
     
         <form action="enviarRubricaAp.php" method="POST">
         <table class="tablaRubrica">
              <tr>
              <td>Nombre de usuario : <?php echo $_SESSION['usuario']['nombre'] ?> </td>
              </tr>
              <tr>
              <td>Nombre del proyecto        
              <?php
                 include ("conexionProy.php");
                 $Con = new conexion();
                 $Con->recuperarDatos();
                ?>      </td>        
     
                </tr>
      </table></center></p>
                
               <p><center>
              <table class="tablaRubrica" name="id_Hoja">
                <tr>
                <td width="10">PARAMETROS DE EVALUACION</td>
                <td colspan="2">PUNTUACION PROPUESTA<br>MINIMA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp MAXIMA</td>
                <td>PUNTACION ASIGNADA POR EL EVALUADOR</td>
                </tr>
                <tr>
                <td>Evaluació en línea (Evaluación documental</td>
                <td></td>
                <td>20</td>
                <td ><p id="evLinea"></p></td>
                </tr>
                 <tr>
                <td>Impacto del proyecto en el sector estratégico</td>
                <td>0</td>
                <td>5</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p1.1" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                   <tr>
                <td>Descripción de la problemática identificada</td>
                <td>0</td>
                <td>7</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p1.2" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                <tr>
                <td>Estado de la técnica (Estado del arte)</td>
                <td>0</td>
                <td>8</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p1.3" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                <tr>
                <td>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
                <td>   </td>
                <td>   </td>
                <td>    </td>
                </tr>
                  <tr>
                <td>Evaluación presencial</td>
                <td></td>
                <td>60</td>
                <td><p id="evPre"></td>
                </tr>
                  <td>Descripcion de la innovación</td>
                <td>0</td>
                <td>10</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p2.1" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                  <td>Viabilidad del mercado</td>
                <td>0</td>
                <td>15</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p2.2" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                  <td>Pre-factibilidad técnica-económica</td>
                <td>0</td>
                <td>15</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p2.3" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                  <td>Estrategia de propiedad intelectual</td>
                <td>0</td>
                <td>10</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p2.4" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                  <td>Habilidades para la presentacion y defensa de proyecto</td>
                <td>0</td>
                <td>10</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p2.5" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
               <tr>
                <td>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
                <td>   </td>
                <td>   </td>
                <td>    </td>
                </tr>
                   <td>Prueba de concepto del prototipo</td>
                <td></td>
                <td>20</td>
                <td><p id="PrueCo"></td>
                </tr>
                  <td>Prueba de concepto de la aplicación</td>
                <td>0</td>
                <td>10</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p3.1" size=15 onchange="validarSiNumero(this.value);"></td>
                </tr>
                  <td>Diseño y creatividad de la aplicación móvil</td>
                <td>0</td>
                <td>10</td>
                <td><input type="text" placeholder="Asigne Puntuacion" id="p3.2" size=15 onchange="validarSiNumero(this.value);"></td>
                 <tr>
                <td>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
                <td>   </td>
                <td>   </td>
                <td>    </td>
                </tr>
                 <td>CALIFICACIÓN TOTAL</td>
                <td></td>
                <td>100</td>
                <td><p id="calificacion" name="calificacion" required></td>
                
             </table></center></p>
            
         
           <table>
              </tr>
                <tr>
                  
                  <td><input type="button" name="name" value="Calificar" onclick="sumar();"></td>
                   <td><input type="submit" name="" value="Enviar Calificaion"></td>
                </tr>
                </table>
                 </form>
        <!--terminacion de mi diseño-->

            <div class="row">
                <div class="col-lg-12">
                     <iframe src="" name="contenido"  id="contenido" width="600" height="600" style="border:0px;"> </iframe>
                </div>
            </div>
        </div>
    </header>
  <script type="text/javascript">
      function sumar() {
        var num1 = parseInt(document.getElementById('p1.1').value);
        var num2 = parseInt(document.getElementById('p1.2').value);
        var num3 = parseInt(document.getElementById('p1.3').value);
        var num4 = parseInt(document.getElementById('p2.1').value);
        var num5 = parseInt(document.getElementById('p2.2').value);
        var num6 = parseInt(document.getElementById('p2.3').value);
       var num7 = parseInt(document.getElementById('p2.4').value);
       var num8 = parseInt(document.getElementById('p2.5').value);
       var num9 = parseInt(document.getElementById('p3.1').value);
       var num10 = parseInt(document.getElementById('p3.2').value);
   var resul1,resul2,resul3,result;
   resul1= num1+num2+num3;
   resul2= num4+num5+num6+num7+num8;
   resul3= num9+num10;
   result= resul1+resul2+resul3;
   document.getElementById("evLinea").innerHTML=resul1;
   document.getElementById("evPre").innerHTML=resul2;
   document.getElementById("PrueCo").innerHTML=resul3;
   document.getElementById("calificacion").innerHTML=result;
      }
    </script>
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
    <script src="js/validaCantidad.js"></script>

    
</body>
</html>