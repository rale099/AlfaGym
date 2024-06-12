<div>
<!-- component -->
<div class="text-gray-900 bg-gray-200">
        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
            Agregar Cliente
        </button>
    
    <div class="px-3 py-4 flex justify-center">
    @if($usuarios->count())
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id</th>
                    <th class="text-left p-3 px-5">Nombre</th>
                    <th class="text-left p-3 px-5">Correo Electronico</th>
                    <!-- <th class="text-left p-3 px-5">Codigo</th> -->
                    <th class="text-left p-3 px-5">Membresia Activa</th>
                    <th class="text-left p-3 px-5">Sucursal</th>
                    <th></th>
                </tr>
                @foreach ($usuarios as $usuario)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$usuario->id}}</td>
                    <td class="p-3 px-5">{{$usuario->name}}</td>
                    <td class="p-3 px-5">{{$usuario->email}}</td>
                    <!-- <td class="p-3 px-5">{{$usuario->codigo}}</td> -->
                    <td class="p-3 px-5">{{$usuario->membresias->producto_servicios->nombre}}</td>
                    <td class="p-3 px-5">{{$usuario->sucursal_id}}</td>
                    <td class="p-3 px-5 flex justify-end">

                    <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Código
                    </button>
                    <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Editar
                    </button>
                    <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Eliminar
                    </button>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div class="card-body">
            <strong>No hay registros de ventas</strong>
        </div>
    @endif
</div>
</div>



