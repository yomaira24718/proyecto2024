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
    <title>Registro Pedido</title>
</head>
<body>
<form class="col-8 mx-auto" action="../controller/controlRegisUsua.php" method="POST">
                        <h3 class="text-center text-secondary">Registro Pedido</h3>

                      
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fecha Pedido</label>
                            <input type="text" class="form-control"name="fecha" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora Pedido</label>
                            <input type="text" class="form-control"name="hora" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total Pedido</label>
                            <input type="text" class="form-control"name="total" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pedido a Domicilio</label>
                            <input type="text" class="form-control"name="pedidoadomicilio" id="exampleInputEmail1" aria-describedby="emailHelp"  requiere>
                        </div>

                        <div class="mb-3">
                        <label for="">Estado Pedido</label>
                            <select class="form-select" name="estadorol" aria-label="Default select example" requiere>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                        </select>

                        <br>
                        
                        
                        <button type="submit" class="btn btn-primary" name="btnregistrar" values="ok">Registro Rol</button>
                    </form>
</body>
</html>