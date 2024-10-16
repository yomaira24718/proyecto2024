<?php
require_once('../model/clsRol.php');

if (isset($_POST['descri']) && isset($_POST['estadorol']) ) {
    $rol_nombre = $_POST['descri'];
    $rol_estado = $_POST['estadorol'];


    $objRol = new RolUsuario();
    $objRol->setDescriprolusuario($rol_nombre);
    $objRol->setEstadorolusuario($rol_estado);

    if ($objRol->RegistroRol()) {
        header('Location: ../view/formRegRol.php?mensaje=Rol registrado correctamente');
    } else {
        echo "Error al registrar el rol.";
    }
} else {
    echo "No se proporcionaron todos los datos necesarios.";
}
?>
