<?php
include_once('menup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultaUsuario</title>
</head>
<body>
    <h4 class="text-center text-secondary"> Consulta Usuarios</h4>

    
		<table class="table table-bordered">
			<tr>
				<th>Codigo</th>
                <th>No Docum</th>
				<th>Nombre</th>
                <th>Apellido </th>
				<th>Direccion</th>
                <th>Cel</th>
                <th>Correo</th>
				
				<th>Operacion</th>
			</tr>
			<?php 
			require_once('../model/clsUsuario.php');
			$objeto=new Usuario();
			$filas=$objeto->consultarTodos();
			if($filas!=null){
			foreach ($filas as $fila) {
			?>
			<tr>
				<td> <?php echo $fila['idusuario']; ?> </td>
				<td> <?php echo $fila['nodoc']; ?> </td>
				<td> <?php echo $fila['nombreusuario']; ?> </td>
                <td> <?php echo $fila['apellidousuario']; ?> </td>
                <td> <?php echo $fila['direccionusuario']; ?> </td>
				<td> <?php echo $fila['telusuario']; ?> </td>
                <td> <?php echo $fila['correousuario']; ?> </td>
                
				<td>
					<a href="../Controlador/controlConsultarUsuario2.php?Id=<?php echo $fila['idusuario'];?>" class="btn btn-primary">Editar</a>
					<a href="../Controlador/controlEliminarUsuarioTabla.php?txtNombre=<?php echo $fila['nombreusuario'];?>" class="btn btn-danger" onclick="return alerta();">Eliminar</a>
				</td>
			</tr>
			<?php
			}
			}
			?>
		</table>
	</div>
<script type="text/javascript">
	function alerta(){
		var opcion=confirm("Está seguro de que desea eliminar al usuario?");
		return opcion;
	}
</script>	
</body>
</html>