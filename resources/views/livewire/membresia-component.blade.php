<div>
  <div>
    <div class="card">
      @if($membresias->count())
        <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear</button>
          <table class="table table-striped table-bordered table-sm table-hover table-{color}">
            <thead>
              <tr class="thead-{color}">
              <thead class="thead-dark">
                <th scope="col" class="text-center">ID</th>
                <th class="text-center">Duración</th>
                <th class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($membresias as $mem)
                <tr>
                  <td class="text-center">{{ $mem->id }}</td>
                  <td class="text-center">{{ round($mem->duracion) }} días</td>
                  <td class="text-center">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalEditar{{ $mem->id }}">Editar</a>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar{{ $mem->id }}">Eliminar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <div class="card-body">
          <strong>No hay registros de Membresías</strong>
        </div>
      @endif
    </div>
  
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
        <div class="modal-body">
          <div class="form-group">
            <label for="duracion">Duración (días):</label>
            <input type="number" class="form-control" id="duracion" name="duracion" required>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarMembresiaBtn">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
          </div>
          </form>
