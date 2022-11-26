<x-layouts.app>
    <h1>Mostrar Planes de Internet</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Plan</th>
                <th>Precio</th>
            </tr>

        </thead>
        <tbody>
         @foreach ($plans as $plan)
            <tr>
                <td>{{ $plan->id }}</td>
                <td>{{ $plan->plan }}</td>
                <td>{{ $plan->precio }}</td>
                <td><a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-outline-warning">Editar</a></td>
            </tr>
        @endforeach       
        </tbody>
    </table>
    <a href="{{ route('plans.create') }}" class="btn btn-outline-primary">Registrar Plan</a>
</x-layouts.app>