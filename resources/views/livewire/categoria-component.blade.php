<div class="card">
  <div class="card-header" @if ($categorias->count())
    <div class="card-body">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nueva categoría</button>
    
    <table class="table table-striped table-bordered table-sm table-hover table-{color}">
        <thead class="thead-dark">
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Acciones</th>
            
        </thead>
        <tbody>
          @foreach ($categorias as $cate)
            <tr>
            <td class="text-center">{{ $cate->id }}</td>
  <td class="text-center">{{ $cate->nombre }}</td>
  <td class="text-center">
    <button type="button" class="btn btn-primary btn-sm">Editar</button>
    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <div class="card-body">
      <strong>No hay registros de Categoría</strong>
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
        <div class="modal-body">
        <form id="formAgregarCategoria">
          <div class="form-group">
            <label for="nombreCategoria">Nombre de la categoría:</label>
            <input type="text" class="form-control" id="nombreCategoria" placeholder="Ingrese el nombre de la categoría">
          </div>
          <button type="submit" class="btn btn-success">Guardar Cambios</button>
          <button type="submit" class="btn btn-secondary">Cerrar</button>


  
</div>
</div>
