<?php   
     require_once "../Modelo/facturacion.php"; 
     require_once "../Modelo/estructura.php"; 

    $facturaObj = new facturaM(); 
    $estructura = new Estructura(); 
	
?>
<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas()
         ?>
 </head> 
 <body>
  
	 <body background="../imagenes/Chrysanthemum.jpg" alt="Chrysanthemum" width="1200px" height="1200px"/>
	 <div class="container">
         <?php 
          $estructura->get_menu(1)
         ?>

        <div class="row">
            <div class="col-md-2">
                <?php 
                $estructura->get_logo('blancoNegro')
            ?>
            </div>
            <div class="col-md-10">
                <div class="jumbotron" style="margin:10px" background ="color: #007da7;";>
                    <h1 align="center">Ejemplo de un CRUD</h1>
        <p>Este es un ejemplo de un CRUD de registro de estudiantes, para que los alumnos lo tomen como referencia para su poyecto de fin de semestre.</p>
        <?php $facturaObj->get_count_factura();?>
       
	   <a class="btn btn-lg btn-primary" href="//github.com/yorgenisparacare/clase_programaci-n1" role="button"><span class="glyphicon glyphicon-check"></span>Repositorio en Github</a>
                </div>
            </div>
        </div>
    </div>
     
     <?php 
        $estructura->get_footer()
    ?>
    
    
 </body> 
 </html> 
