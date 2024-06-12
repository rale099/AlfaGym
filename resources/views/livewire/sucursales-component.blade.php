<div class="card">
  <div class="card-body">
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Añadir</button>
    </div>
    <br>
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
        <th class="text-center"scope="col">ID</th>
      <th class="text-center" scope="col">Nombre</th>
      <th class="text-center" scope="col">Direccion</th>
      <th class="text-center" scope="col">Acciones</th>
      </thead>
      <tbody>
        @foreach ($sucursales as $sucursal)
        <tr>
          <td class="text-center">{{ $sucursal->id }}</td>
          <td class="text-center">{{ $sucursal->nombre }}</td>
          <td class="text-center">{{ $sucursal->direccion }}</td>
          <td class="text-center">
        <div class="button-container">
        <button type="button" class="btn btn-warning btn-sm">Editar</button>
        <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </div>
       </td>
        </tr>
        @endforeach

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
            <label for="nombreNuevaSucursal">Nombre:</label>
            <input type="text" class="form-control" id="nombreNuevaSucursal" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="direccionNuevaSucursal">Dirección:</label>
            <textarea class="form-control" id="direccionNuevaSucursal" name="direccion" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>