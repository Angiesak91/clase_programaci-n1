<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblotecas/jquery-1.12.2.min.js"></script>
            <script src="../biblotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu(){
        echo '<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de Estudiantes
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li ><a href="#Registrar">Registrar Estudiante</a></li>
            <li ><a href="estudiantes_registrados.php">Estudiantes Registrados</a></li>
            <li ><a href="/">Xampp</a></li>
            <li ><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=registro_estudiantes&token=4321aa2099d6ed8d3c444e70f76b778b">Base de Datos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada. </p>
      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'escudo':
                echo '<img src="../imagenes/logoEscudo.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            case 'blancoNegro':
                echo '<img src="../imagenes/logo_bn.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            default:
                echo '<img src="../imagenes/logo.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
    }

?>
