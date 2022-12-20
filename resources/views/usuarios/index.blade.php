<x-layouts.app> 
    <h1>Usuarios</h1>
    <a href="{{route('usuarios.restaurar')}}" class="btn btn-success btn_restaurar">Retaurar</a>
    <table id="tabla" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha</th>
                <th>Edad</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Usuarios as $usuario)
            <tr data-id='{{$usuario->id}}'>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->f_nacimiento }}</td>
                <td><?php
                    $fecha = new DateTime($usuario->f_nacimiento);
                    $hoy = new DateTime();
                    $anos = $hoy->diff($fecha);
                    echo $anos->y;
                    ?></td>
                <td><button class="btn btn-danger btn_borrar">Borrar</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <script>
            $("#tabla").on("click",".btn_borrar",function(e){
                e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro de eliminar este registro?',
                text: "No podras revertir esta accion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const tr=$(this).closest("tr"); 
                    const id=tr.data("id");
                    $.ajax({
                        url: "{{url('/usuarios')}}/"+id,
                        method: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(dato){
                            console.log(dato);
                            tr.fadeOut();
                        }
                    })
                }
            })    
        });
    </script>
</x-layouts.app>