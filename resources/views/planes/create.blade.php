<x-layouts.app title="Crear Planes">
    
    <a href="{{ route('plans.index') }}" class="btn btn-outline-danger">Volver</a>

    <form action="{{ route('plans.store') }}" method="POST">
        @csrf
        <div>
            <label class="label-control" for="plan">Plan de Internet</label>
            <input class="form-control" type="text" name="plan" id="plan" placeholder="Ingrese la cantidad de megas del plan de internet">
            <br>
        </div>
        <div>
            <label class="label-control" for="precio">Precio de Plan</label>
            <input class="form-control" type="number" name="precio" id="precio" placeholder="Ingrese la precio del plan de internet">
            <br>
        </div>
        <div>
            <input type="submit" value="Guardar" class="btn btn-outline-primary">
        </div>
    </form>
</x-layouts.app>