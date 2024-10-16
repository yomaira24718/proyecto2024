<?php
include_once('menup.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../applications/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
<form class="col-8 mx-auto" action="../controller/controlRegisUsua.php" method="POST">
                        <h3 class="text-center text-secondary">Registro Usuarios</h3>
                        <button type="submit" class="btn btn-primary text-end" name="btnregistrar" values="ok">Registrar</button>

                        <div class="mb-3">
                            <select class="form-select" name="tipodoc" aria-label="Default select example" requiere>
                                <option value="CC">Cedula</option>
                                <option value="TI">Tarjeta Identidad</option>
                                <option value="Cedula Extranjera">Cedula Extranjera</option>
                        </select>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Documento</label>
                            <input type="number" class="form-control form-control-sm" name="ndocumento" id="exampleInputEmail1" aria-describedby="emailHelp" requiere>
                        </div>
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre Usuario</label>
                            <input type="text" class="form-control form-control-sm"name="nombreus" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido Usuario</label>
                            <input type="text" class="form-control form-control-sm" name="apellidous" id="exampleInputEmail1" aria-describedby="emailHelp" requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Direccion</label>
                            <input type="text" class="form-control form-control-sm" name="direccionus" id="exampleInputEmail1" aria-describedby="emailHelp" requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefono</label>
                            <input type="number" class="form-control form-control-sm" name="telusua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
                            <input type="email" class="form-control form-control-sm" name="correousua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control form-control-sm" name="contrasenausua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Confirmar Contraseña</label>
                            <input type="password" class="form-control form-control-sm" name="confirma" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Foto Usuario</label>
                        <input type="text" class="form-control " name="fotousua" id="">
                        </div>

                        <div class="mb-3">
                        <label for="">Estado</label>
                            <select class="form-select" name="estadousua" aria-label="Default select example" requiere>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                        </select>

                        <div class="mb-3">
                        
                        <label for="">Rol</label>
                        <select class="form-select" name="txtrol" aria-label="Default select example" requiere>
                            <?php
                            require_once('../model/clsRol.php');
                            $objeto=new Rol();
                            $filas=$objeto->consultarTodos();
                   
                          ?>
                          <?php
                    
                            foreach ($filas as $opciones):   ?>
                           <option value="<?php echo $opciones['idrolusua']?>"><?php echo $opciones['descriprol']?>     </option>
                        
                          <?php endforeach ?>
                                
                            
                        </select><br>
                               
                    </form>
</body>
</html>