<div>
    <div>
    <div class="container mx-auto px-4 py-2">
  <div class="card shadow-sm rounded-md overflow-hidden">
    <div class="card-header"

    @if($proSer->count())
      <div class="card-body">
          <!-- <button type="button" class= "btn btn-primary" wire:click="abrirModal()"> Crear </button> -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear</button>
            
            </div>
        <table class=" table table-striped">
          <thead class="thead-dark">
            <tr class="bg-red-500">
              <th scope="col"class="text-center">ID</th>
              <th scope="col"class="text-center">Nombre</th>
              <th scope="col"class="text-center">Precio Unitario</th>
              <th scope="col"class="text-center">Tipo</th>
              <th scope="col"class="text-center">Membresia</th>
              <th scope="col"class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($proSer as $ps)
              <tr>
                <td class="text-center">{{$ps->id}}</td>
                <td class="text-center">{{$ps->nombre}}</td>
                <td class="text-center">$ {{$ps->precio_unitario}}</td>
                <td class="text-center">{{$ps->tipo_id == 1 ? 'producto' : 'membresia'}}</td>
                <td class="text-center">{{$ps->membresia_id}}</td>
                <td class="text-center">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> Editar </button>
              <!-- <button type="submit" class="btn btn-warning">Editar</button> -->
              <button type="submit" class="btn btn-danger"> Eliminar </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <div class="card-body">
        <strong>No hay registros de Productos o Servicios</strong>
      </div>
    @endif
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="flex justify-end">  
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="productName">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName" placeholder="Ingrese el nombre del producto">
          </div>
          <div class="form-group">
            <label for="productPrice">Precio del Producto</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Ingrese el precio del producto">
          </div>
          <div class="form-group">
            <label for="producto-servicioInput">Tipo:</label>
            <select class="form-control" id="categoriaInput">
              <option value="">Seleccione una categoría</option>
              <option value="1">Producto  1</option>
              <option value="2">Membresia 2</option>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal para guardar -->

<div class="modal fade" id="save" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>Hola</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>


    
        