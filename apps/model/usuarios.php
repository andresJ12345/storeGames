<?php

require_once "conexion.php";
class ModeloUsuarios{

 public function mdlCrearUsuario($tabla,$datos){
			$stmt = conexion::conectar()->prepare("INSERT INTO $tabla (nombre,apellido,nickname,email,id_rol,password) VALUES (:nombre,:apellido,:nickname,:email,:id_rol,:password)");
			$stmt-> bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
			$stmt-> bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
			$stmt-> bindParam(":nickname",$datos['nickname'],PDO::PARAM_STR);
			 $stmt-> bindParam(":email",$datos['email'],PDO::PARAM_STR);
			 $stmt-> bindParam(":id_rol",$datos['rol'],PDO::PARAM_STR);
			 $stmt-> bindParam(":password",$datos['password'],PDO::PARAM_STR);
			var_dump($datos);
			if($stmt->execute()){
				return "ok";
			}else{
				return "error";
			}
			$stmt ->close();
			$stmt = null;
		
	}
}

















		//   public function mdlCrearUsuario($tabla,$datos){
		// 	$stmt = conexion::conectar()->prepare("INSERT INTO $tabla (nombre,apellido,nickname,fotoperfil,rutaFoto,email,id_rol,password) VALUES (:nombre,:apellido,:nickname,:fotoperfil,:rutaFoto,:email,:id_rol,:password)");
		// 	$stmt -> bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
		// 	$stmt -> bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
		// 	$stmt -> bindParam(":nickname",$datos['nickname'],PDO::PARAM_STR);
		//     $stmt -> bindParam(":fotoperfil",$datos['fotoPerfil'],PDO::PARAM_STR);
		// 	 $stmt -> bindParam(":rutaFoto",$datos['rutaFoto'],PDO::PARAM_STR);
		// 	 $stmt -> bindParam(":email",$datos['email'],PDO::PARAM_STR);
		// 	 $stmt -> bindParam(":id_rol",$datos['rol'],PDO::PARAM_STR);
		// 	 $stmt -> bindParam(":password",$datos['password'],PDO::PARAM_STR);
		// 	if($stmt->execute()){
		// 		return "ok";
		// 	}else{
		// 		return "error";
		// 	}
		// 	$stmt ->close();
		// 	$stmt = null;
		// }


