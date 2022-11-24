<x-layouts.app>
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
</x-layouts.app>

