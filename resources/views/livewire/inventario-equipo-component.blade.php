<div>
    <div class="card">
        <div class="card-header"></div>
        @if($inveEquipos->count())
            <div class="card-body">
                <table class="table table-striped table-bordered table-sm table-hover">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Añadir</button>
                <table class="table">
                  <thead class="thead-dark">
                            <tr>
                              <th class="text-center" scope="col">ID</th>
                              <th class="text-center" scope="col">Nombre</th>
                              <th class="text-center" scope="col">Peso en lbs</th>
                              <th class="text-center" scope="col">Cantidad</th>
                              <th class="text-center" scope="col">Tipo</th>
                              <th class="text-center" scope="col">Accion</th>
                              
                            </tr>
                  </thead>
                      <tbody>
                          @foreach ($inveEquipos as $invEqui)
                            <tr>
                                <td class="text-center">{{$invEqui->id}}</td>
                                <td class="text-center">{{$invEqui->nombre}}</td>
                                <td class="text-center">{{$invEqui->peso}} Lbs</td>
                                <td class="text-center">{{round($invEqui->cantidad)}}</td>
                                <td class="text-center">{{$invEqui->equipo->tipo}}</td>
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
              <strong>No hay registros de Inventario</strong>
            </div>
        @endif

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
            <label for="stockInput">Nombre:</label>
            <input type="text" class="form-control" id="stockInput" placeholder="Ingrese el nombre del equipo o maquinaria">
          </div>
          <div class="form-group">
            <label for="stockMinInput">Peso en lbs:</label>
            <input type="number" class="form-control" id="stockMinInput" placeholder="Ingrese el peso en lbs">
          </div>
          <div class="form-group">
            <label for="stockMinInput">Cantidad</label>
            <input type="number" class="form-control" id="stockMinInput" placeholder="Ingrese la cantidad">
          </div>
          <div class="form-group">
            <label for="categoriaInput">Tipo:</label>
            <select class="form-control" id="categoriaInput">
              <option value="">Seleccione un tipo</option>
              <option value="1">Equipo</option>
              <option value="2">Maquinaria</option>
              
              </select>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarStockButton">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
</div>

