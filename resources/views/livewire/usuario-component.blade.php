<div>
<!-- component -->
<div class="text-gray-900 bg-gray-200">
    <br>
        <button data-toggle="modal" data-target="#addUsuario" type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
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

                    <button data-toggle="modal" data-target="#" type="button" class="mr-3 text-sm bg-blue-500 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Código
                    </button>
                    <button data-toggle="modal" data-target="#editUsuario" type="button" class="mr-3 text-sm bg-blue-500 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Editar
                    </button>
                    <button data-toggle="modal" data-target="#deleteUsuario" type="button" class="mr-3 text-sm bg-red-500 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">  
                        Eliminar
                    </button>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div class="card-body">
            <strong>No hay registros de Usuarios</strong>
        </div>
    @endif

    @if($addUsuario)
        @include('livewire.modal.modal-add-usuario')
    @endif

    @if($deleteUsuario)
        @include('livewire.modal.modal-delete-usuario')
    @endif

    <div class="modal fade" id="addUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUsuario">Registro de usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="flex justify-end">  
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="productName">Nombre</label>
            <input type="text" class="form-control" id="productName" placeholder="Ingrese el nombre del usuario">
          </div>
          <div class="form-group">
            <label for="productName">Correo electronico</label>
            <input type="text" class="form-control" id="productName" placeholder="Ingrese el correo del usuario">
          </div>
          <div class="form-group">
            <label for="producto-servicioInput">Membresía:</label>
            <select class="form-control" id="categoriaInput">
              <option value="">Seleccione una membresía</option>
              <option value="1">15 días</option>
              <option value="2">30 días</option>
            </select>
          <div class="form-group">
            <label for="producto-servicioInput">Sucursal:</label>
            <select class="form-control" id="categoriaInput">
              <option value="">Seleccione una sucursal</option>
              <option value="1">Aguilares</option>
            </select>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      <button type="button" class="btn btn-success">Agregar Usuario</button>
      </div>
    </div>
        </div>
</div>
</div>
</div>



