<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($ventas->count())
                <div class="card-body">
                <table class="table table-striped table-bordered table-sm table-hover table-{color}">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar venta</button>
                <thead class="thead-dark">
                 <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Fecha de la Venta</th>
               <th class="text-center" scope="col">Total</th>
               <th class="text-center" scope="col">Acciones</th>
             </tr>
            </thead>
              <tbody>
                                
                            @foreach ($ventas as $venta)
                            <tr>
                                <td class="text-center">{{$venta->id}}</td>
                                <td class="text-center">{{$venta->fecha}}</td>
                                <td class="text-center">{{$venta->valor_total}}</td>
                                <td class="text-center">
                                <div class="button-container">
                                <button type="button" class="btn btn-warning btn-sm">Editar</button>
                                <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                             </div>
                             </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Ventas</strong>
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
            <label for="fechaVenta">Fecha de Venta:</label>
            <input type="date" class="form-control" id="fechaVenta" name="fechaVenta" required>
          </div>
          
          <div class="form-group">
            <label for="totalVenta">Total de Venta:</label>
            <input type="number" class="form-control" id="totalVenta" name="totalVenta" min="0" required>
          </div>
          </form>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarVentaBtn">Guardar Venta</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>

