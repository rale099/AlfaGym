<div>
    <div class="card">
        <div class="card-header"></div>
        @if($proveedor->count())
            <div class="card-body">
                <table class="table table-striped table-bordered table-sm table-hover">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Añadir</button>
                <table class="table">
                  <thead class="thead-dark">
                            <tr>
                              <th class="text-center" scope="col">ID</th>
                              <th class="text-center" scope="col">Nombre del proveedor</th>
                              <th class="text-center" scope="col">Direccion</th>
                              <th class="text-center" scope="col">Telefono</th>
                              <th class="text-center" scope="col">Acciones</th>
                            </tr>
                  </thead>
                      <tbody>
                          @foreach ($proveedor as $prove)
                            <tr>
                                <td class="text-center">{{$prove->id}}</td>
                                <td class="text-center">{{$prove->nombre}}</td>
                                <td class="text-center">{{$prove->direccion}}</td>
                                <td class="text-center">{{$prove->telefono}}</td>
                                <td class="text-center">
                                  <div class="button-container">
                                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                                  </div>
                            </tr>
                          @endforeach
                      </tbody>
                </table>
            </div>
            <div class="card-body"></div>
        @else
            <div class="card-body">
              <strong>No hay registros de Proveedores</strong>
            </div>
        @endif

<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"><
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="flex justify-end">  
      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="stockInput">Nombre</label>
            <input type="text" class="form-control" id="stockInput" placeholder="Ingrese el nombre del proveedor">
          </div>
          <div class="form-group">
            <label for="stockMinInput">Dirección</label>
            <input type="text" class="form-control" id="stockMinInput" placeholder="Ingrese la direccion del proveedor">
          </div>
          <div class="form-group">
            <label for="stockMinInput">Telefono</label>
            <input type="text" class="form-control" id="stockMinInput" placeholder="Ingrese el telefono de contacto del proveedor">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarStockButton">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
