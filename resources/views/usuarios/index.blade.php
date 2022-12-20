<x-layouts.app> 
    <h1>Usuarios</h1>
    <table id="tabla" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->f_nacimiento }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>