<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario de Registro</title>
</head>
<body>
    <form action="">
        <div>
            <label class="form-label" for="nombre">Nombre</label>
            <input placeholder="Ingrese el nombre" class="form-control" type="text" id="nombre" name="nombre">
            <br>
        </div>
        <div>
            <label class="form-label" for="apellido">Apellido</label>
            <input placeholder="Ingrese el Apellido"class="form-control" type="text" id="apellido" name="apellido">
            <br>
        </div>
        <div>
            <label class="form-label" for="celular">Celular</label>
            <input placeholder="Ingrese el Numero Celular" class="form-control" type="number" id="celular" name="celular">
            <br>
        </div>
        <div>
            <label class="form-label" for="lugar">Lugar</label>
            <select class="form-control" name="lugar" id="lugar">
                <option value=""> --Seleccione un Lugar--</option>
                <option value="paurito">Paurito</option>
                <option value="lorenzo">Lorenzo</option>
                <option value="espino">Espino</option>
            </select>
            <br>
        </div>
        <div>
            <label class="form-label" for="direccion">Dirección</label>
            <input placeholder="Ingrese la Dirección" class="form-control" type="text" id="direccion" name="direccion">
            <br>
        </div>
        <div>
            <label class="form-label" for="foto">Foto</label>
            <input class="form-control" type="file" id="foto" name="foto">
            <br>
        </div>
    </form>
</body>
</html>