<?php


class ControllerMain
{
    public function Main()
    {
        include "views/main.php";
    }

    public function agregarJuegos()
    {
        if(isset($_POST['nombreJuego'])|| isset($_POST['descripcion'])||isset($_POST['categoria'])
       || (isset($_FILES['fotoJuego']['tmp_name']) ))
       {
        list($ancho, $alto) = getimagesize($_FILES['fotoJuego']['tmp_name']);
        $nuevoancho = 500;
        $nuevoalto = 500;

        $directorio = "dist/img/videoJuegos/".$_POST['nombreJuego'];
        mkdir($directorio,0755);

        if($_FILES['fotoJuego']['type']=="image/jpeg"){

            $aleatorio = mt_rand(100,999);
            $ruta = $directorio."/" .$_POST['nombreJuego'] .$aleatorio.".jpg";
            $origen = imagecreatefromjpeg($_FILES['fotoJuego']['tmp_name']);
            $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
            imagejpeg($destino,$ruta);
        }
        if($_FILES['fotoJuego']['type']=="image/png"){

            $aleatorio = mt_rand(100,999);
            $ruta = $directorio."/" .$_POST['nombreJuego'] .$aleatorio.".png";
            $origen = imagecreatefrompng($_FILES['fotoJuego']['tmp_name']);
            $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
            imagepng($destino,$ruta);
        }
        $tabla = "videojuegos";
          $datos = array("nombreJuego"=>$_POST['nombreJuego'],
          "descripcion"=>$_POST['descripcion'],
          "categoria"=>$_POST['categoria'],
          "ruta"=>$ruta);
          $respuesta = Juegos::agregarJuegos($tabla,$datos);   
          if ($respuesta =="ok") {

            echo"<script>
                     window.location = 'agregarListar';
                     </script>";
          } 
        }

    }

     public function mostrarTodoJuegos(){
        $tabla="videoJuegos";
        $respuesta = Juegos::MostrarJuegos($tabla);
        return $respuesta;
    }
}
