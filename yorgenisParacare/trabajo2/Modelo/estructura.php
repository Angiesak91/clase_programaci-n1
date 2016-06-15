<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblotecas/jquery-1.12.2.min.js"></script>
            <script src="../biblotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu($posicion){
        $index="";
        $registrados="";
        $registrar="";
        switch($posicion){
            case 1:
                $index='class="active"';
                break;
            case 2:
                $registrar='class="active"';
                break;
            case 3:
                $registrados='class="active"';
                break;
            }
        echo '<nav role="navigation" class="navbar navbar-default navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de facturas
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li '.$index.' ><a href="index.php">Inicio</a></li>
            <li '.$registrar.' ><a href="Registrar facturas.php">Registrar Facturas</a></li>
            <li  '.$registrados.' ><a href="Facturas Registrados.php">Facturas Registradas</a></li>
            <li ><a href="/">Xampp</a></li>
            <li ><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=factura&token=a318d811633fe64f1968d9ac7e698342">Base de Datos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
	  <footer class="row col-sm-13">
        <div class="panel panel-body">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada.<br/> Alumno: Yorgenis Paracare</p>
        </div>
        </footer>
      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'escudo':
                echo '<img src="../imagenes/logoEscudo.jpg" alt="Logo Unefa" class="img-circle">';
                break; 
            case 'blancoNegro':
                echo '<img src="../imagenes/logo_bn.jpg" alt="Logo Unefa" class="img-circle">';
                break; 
            default:
                echo '<img src="../imagenes/logo.jpg" alt="Logo Unefa" class="img-circle">>';
                break; 
            }
         
        }
    
    }  

?>
