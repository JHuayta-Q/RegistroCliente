<x-layouts.app title="Modificar Planes">

    <form action="{{ route('plans.update', $plan->id) }}" method="POST">
        @csrf @method('PATCH')
        <div>
            <label class="label-control" for="plan">Plan de Internet</label>
            <input class="form-control" type="text" name="plan" id="plan" value="{{ $plan->plan }}">
            <br>
        </div>
        <div>
            <label class="label-control" for="precio">Precio de Plan</label>
            <input class="form-control" type="number" name="precio" id="precio" value="{{ $plan->precio }}">
            <br>
        </div>
        <div>
            <input type="submit" value="Guardar" class="btn btn-outline-success">
            <a href="{{ route('plans.index') }}" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </form>
</x-layouts.app>