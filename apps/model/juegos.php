<?php
    require_once 'conexion.php';
 class Juegos {
    static public function agregarJuegos($tabla,$datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (tituloJuego,descripcion,id_categoria,rutaFoto) VALUES (:tituloJuego,:descripcion,:id_categoria,:rutaFoto)");
        $stmt -> bindParam(":tituloJuego",$datos['nombreJuego'],PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion",$datos['descripcion'],PDO::PARAM_STR);
        $stmt -> bindParam(":id_categoria",$datos['categoria'],PDO::PARAM_STR);
        $stmt -> bindParam(":rutaFoto",$datos['ruta'],PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt ->close();
        $stmt = null;
    }

    static public function MostrarJuegos($tabla){

            $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt->fetchAll();
            
        $stmt ->close();
        $stmt=null;

    }


    

 }

