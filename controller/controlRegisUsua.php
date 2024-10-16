<?php
require_once("../model/clsUsuario.php");
//isset
//empty preguntar si el metodo post esta definido
if(isset($_POST) && !empty($_POST))
{
    $tipodoc = $_POST['tipodoc'];
    $numdoc = $_POST['ndocumento'];
    $nombre = $_POST['nombreus'];
    $apellido = $_POST['apellidous'];
    $direccion = $_POST['direccionus'];
    $telefono = $_POST['telusua'];
    $correo = $_POST['correousua'];
    $clave = $_POST['contrasenausua'];
    $confirma = $_POST['confirma'];
    $foto = $_POST['fotousua'];
    $estado = $_POST['estadousua'];
    $rol = $_POST['txtrol'];

//
    $objUsuario = new Usuario ();
    $objUsuario->setTipodoc($tipodoc);
    $objUsuario->setNodoc($numdoc);
    $objUsuario->setNombreusua($nombre);
    $objUsuario->setApellidousua($apellido);
    $objUsuario->setDireccionusua($direccion);
    $objUsuario->setTelusua($telefono);
    $objUsuario->setCorreoUsua($correo);
    $objUsuario->setClaveUsua($clave);
    $objUsuario->setFotousua($foto);
    $objUsuario->setEstadousua($estado);
    $objUsuario->setTipousua($rol);

    echo ($objUsuario->getTipodoc()."<br>");
    echo ($objUsuario->getNodoc()."<br>");
    echo ($objUsuario->getNombreusua()."<br>");
    echo ($objUsuario->getApellidousua()."<br>");
    echo ($objUsuario->getDireccionusua()."<br>");
    echo ($objUsuario->getTelusua()."<br>");
    echo ($objUsuario->getCorreousua()."<br>");
    echo ($objUsuario->getClaveUsua()."<br>");
    echo ($objUsuario->getFotousua()."<br>");
    echo ($objUsuario->getEstadousua()."<br>");
    echo ($objUsuario->getTipousua()."<br>");




    $objUsuario->Registrar();
    


//verificar que los datos llegaron a la clase

   
    }



?>