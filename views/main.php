<?php
 
 $encabezado ='views/partials/head.php';
 $menu = 'views/partials/header.php';
 $pie = 'views/partials/footer.php';

if(isset($_GET['ruta'])){
    if($_GET['ruta'] =="inicio"||
    $_GET['ruta']=="catalogoAll"||
    $_GET['ruta']=="salir")
    {
     include ''.$encabezado;
        include ''.$menu;
        
        include "views/modulos/".$_GET['ruta'].".php";
        include '' .$pie;
    }
    else if($_GET['ruta']=="usuarios")
    {   include '' .$encabezado;
        include '' .$menu;
        
        include "views/juegos/".$_GET['ruta'].".php";
        include ''.$pie;
            
          
    }
    elseif ($_GET['ruta']=="login") {
        include "views/login/".$_GET['ruta'].".php";
   
    
    }
    else{
           include "views/modulos/404.php";
    }
  } 

?>