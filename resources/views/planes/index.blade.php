<x-layouts.app title="Mostrar Planes">

    <a href="{{ route('plans.create') }}" class="btn btn-outline-success">Nuevo</a>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Plan</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>

        </thead>
        <tbody>
         @foreach ($plans as $plan)
            <tr>
                <td>{{ $plan->id }}</td>
                <td>{{ $plan->plan }}</td>
                <td>{{ $plan->precio }}</td>
                <td>
                    <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-outline-warning">Modificar</a>
                    <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-outline-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach       
        </tbody>
    </table>

</x-layouts.app>