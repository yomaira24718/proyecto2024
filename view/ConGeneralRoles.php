<?php
include_once('menup.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta||Roles</title>
</head>
<body>
<div class="content">
        <h2>Gestión de Rol</h2>
        <br>
        <table class="table table-bordered" border="2">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Operacion</th>
            
            <?php
            require_once('../model/clsRol.php');
            $objeto = new RolUsuario();
            $filas = $objeto->consultarTodos();
            if ($filas != null) {
                foreach ($filas as $fila) {
            ?>
            <tr>
                <td><?php echo $fila['idrolusuario']; ?></td>
                <td><?php echo $fila['descriprolusuario']; ?></td>
                <td><?php echo $fila['estadorolusuario']; ?></td>
                <td>
                    <a href="formRolEditar.php?usu_codigo=<?php echo $fila['idrolusuario']; ?>" class="btn btn-primary">Editar</a>
                    <br><br>
                    <a href="../controlador/controlRolBorrar.php?usu_codigo=<?php echo $fila['idrolusuario']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
     
    </div>
</body>
</html>