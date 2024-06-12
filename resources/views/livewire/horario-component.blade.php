<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <table class="table table-bordered table-hover">
         <thead class="thead-dark">
         <tr>
        <th class="text-center"scope="col">ID</th>
      <th class="text-center" scope="col">Dia de la Semana</th>
      <th class="text-center" scope="col">Desde</th>
      <th class="text-center" scope="col">Hasta</th>
      <th class="text-center" scope="col">sucursal</th>
      <th class="text-center" scope="col">Acciones</th>
     </tr>
  </thead>
  <tbody>
      
        @foreach ($horarios as $horario)
        <tr>
          <td class="text-center">{{ $horario->id }}</td>
          <td class="text-center">{{ $horario->dia_semana }}</td>
          <td class="text-center">{{ $horario->desde }}</td>
          <td class="text-center">{{ $horario->hasta }}</td>
          <td class="text-center">{{ $horario->sucursal_id }}</td>
          <td class="text-center">
        <div class="button-container">
        <button type="button" class="btn btn-warning btn-sm">Editar</button>
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
            <label for="diaSemana">Dia de la Semana:</label>
            <input type="text" class="form-control" id="diaSemana" name="dia_semana" required>
          </div>
          <div class="form-group">
            <label for="desde">Desde:</label>
            <input type="time" class="form-control" id="desde" name="desde" required>
          </div>
          <div class="form-group">
            <label for="hasta">Hasta:</label>
            <input type="time" class="form-control" id="hasta" name="hasta" required>
          </div>
          <div class="form-group">
            <label for="categoriaInput">Sucursal:</label>
            <select class="form-control" id="categoriaInput">
              <option value="">Seleccione sucursal</option>
              <option value="1">Aguilares</option>
              <option value="2">Chalatenango </option>
              <option value="3">Apopa</option>
              <option value="4">San Salvador</option>
              </select>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
