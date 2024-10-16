<?php
echo ("Bienvenidos al sistema de informacion Domicilios web Fabricaciones Saltos");
require_once("../model/clsUsuario.php");
session_start();
$usuario= new Usuario();
if (isset($_POST)&& !empty ($_POST))
{
     $correo =$_POST["txtcorreo"];
     $clave =$_POST["txtcontra"];
   #creo objetos instancia de clase
    $objUsuario= new usuario();
    $objUsuario->setCorreoUsua($correo);
    $objUsuario->setClaveUsua($clave);
    echo("Correo").$objUsuario->getCorreoUsua($correo);
    echo("Clave").$objUsuario->getClaveusua($clave);

    if ($objUsuario->Login()==true){
        //Crear una variable global de sesion con el nombre de el usuario que ingresa, aprovechando que ese nombre es único 
			session_start();
			$_SESSION["usuario"]=$correo;
			//Crear una variable de sesion con el tipo de usuario
			$tipo=$objUsuario->consultarRol();
			$_SESSION["tipo"]=$tipo;

        header(('Location:../view/menup.php'));
    }else {
        header(('Location:../view/formlogin.php?mensaje=Error'));
    }
}
?>

