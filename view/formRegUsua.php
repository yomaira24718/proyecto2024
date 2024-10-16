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
    <title>Registro//Rol</title>
</head>
<body>
<form class="col-8 mx-auto" action="../controller/controlRegisUsua.php" method="POST">
                        <h3 class="text-center text-secondary">Registro Usuario</h3>

                      
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipo de Documento</label>
                            <input type="text" class="form-control"name="tipdoc" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Numero de Documento</label>
                            <input type="text" class="form-control"name="numdoc" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre Usuario</label>
                            <input type="text" class="form-control"name="nomusua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido Usuario</label>
                            <input type="text" class="form-control"name="apellusua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefono Usuario</label>
                            <input type="text" class="form-control"name="telusua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Usuario</label>
                            <input type="text" class="form-control"name="correousua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Clave Usuario</label>
                            <input type="text" class="form-control"name="claveusua" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>


                        <div class="mb-3">
                        <label for="">Estado Usuario</label>
                            <select class="form-select" name="estadorol" aria-label="Default select example" requiere>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                        </select>

                        <br>
                        
                        
                        <button type="submit" class="btn btn-primary" name="btnregistrar" values="ok">Registro Rol</button>
                    </form>
</body>
</html>