<div>
  <div>
    <div class="card">
      <div class="card-header">@if($tipos->count())
        <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Agregar</button>
        <table class="table table-striped table-bordered table-sm table-hover table-{color}">
          <thead class="thead-dark">
          <th class="text-center">ID</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Acciones</th>

            <tbody>
              @foreach ($tipos as $tipo)
                <tr>
                  <td class="text-center">{{$tipo->id}}</td>
                  <td class="text-center">{{$tipo->nombre}}</td>
                  <td class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <div class="card-body">
          <strong>No hay registros de Tipo</strong>
        </div>
      @endif

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
      <form>
      <div class="modal-body">
      <div class="form-group">
            <label for="nombreTipo">Nombre:</label>
            <input type="text" class="form-control" id="nombreTipo" placeholder="Ingrese nombre del tipo de producto">
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

