<?php
class ControllerUser {
     public function crearUSuario(){
       if(isset($_POST['nombre'])|| isset($_POST['apellido'])||isset($_POST['nickname'])
       || isset($_POST['email'])|| isset($_POST['password']) ){
        $tabla = "usuario";
          $salt = md5($_POST['password']);
            $passwordEncriptado = crypt($_POST['password'],$salt);
          $datos = array("nombre"=>$_POST['nombre'],
          "apellido"=>$_POST['apellido'],
          "nickname"=>$_POST['nickname'],
          "email"=>$_POST['email'],
          "password"=>$passwordEncriptado,
          "rol"=>"2");
         $respuesta= ModeloUsuarios::mdlCrearUsuario($tabla, $datos);
         if ($respuesta =="ok") {

           echo"<script>
                    window.location = 'inicio';
                    </script>";
         }
          
    }
        //     if(preg_match('/^[a-zA-Z0-9ñÑaáéÉíÍóÓúÚ ]+$/',$_POST['nuevoNombre'])&&
        //         preg_match('/^[a-zA-Z0-9]+$/',$_POST['nuevoUsuario'])&&
        //         preg_match('/^[a-zA-Z0-9]+$/',$_POST['nuevoPassword'])){

        //         $ruta="";
        //         if(isset($_FILES['nuevaFoto']['tmp_name'])){

        //             list($ancho, $alto) = getimagesize($_FILES['nuevaFoto']['tmp_name']);
        //             $nuevoancho = 500;
        //             $nuevoalto = 500;

        //             //Crear directorio

        //             $directorio = "vistas/img/usuarios/".$_POST['nuevoUsuario'];
        //             mkdir($directorio,0755);

        //             //De acuerdo al tipo de imagen se hace el proceso de recorte de la foto

        //             if($_FILES['nuevaFoto']['type']=="image/jpeg"){

        //                 $aleatorio = mt_rand(100,999);
        //                 $ruta = $directorio."/".$aleatorio.".jpg";
        //                 $origen = imagecreatefromjpeg($_FILES['nuevaFoto']['tmp_name']);
        //                 $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
        //                 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
        //                 imagejpeg($destino,$ruta);
        //             }
        //             if($_FILES['nuevaFoto']['type']=="image/png"){

        //                 $aleatorio = mt_rand(100,999);
        //                 $ruta = $directorio."/".$aleatorio.".png";
        //                 $origen = imagecreatefrompng($_FILES['nuevaFoto']['tmp_name']);
        //                 $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
        //                 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
        //                 imagepng($destino,$ruta);
        //             }

        //         }

                

        //         $tabla = "usuarios";
        //         $salt = md5($_POST['nuevoPassword']);
        //         $passwordEncriptado = crypt($_POST['nuevoPassword'],$salt);
        //         $datos = array("nombre"=>$_POST['nuevoNombre'],
        //                         "usuario"=>$_POST['nuevoUsuario'],
        //                         "password"=>$passwordEncriptado,
        //                         "perfil"=>$_POST['nuevoPerfil'],
        //                         "ruta"=>$ruta);

        //         $respuesta  = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
        //         if($respuesta=="ok"){
        //             echo"<script>
        //                 Swal.fire({ 
        //                     title: 'Success!',
        //                     text: '¡Registro Exitoso!',
        //                     icon: 'success',
        //                     confirmButtonText:'Ok'
        //                     }).then((result)=>{
        //                         if(result.value){
        //                             window.location = 'usuarios';
        //                         }
        //                     });
        //             </script>";
        //         }
        //     }else{
        //         echo"<script>
        //                 Swal.fire({ 
        //                     title: 'Error!',
        //                     text: '¡No puedes usar caraceres especiales en el campo usuario ni en la contraseña!',
        //                     icon: 'error',
        //                     confirmButtonText:'Ok'
        //                     });
        //             </script>";
        //     }
        // }
    }


}