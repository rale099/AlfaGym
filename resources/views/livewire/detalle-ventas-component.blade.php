<<<<<<< HEAD
<div>
    <div class="card">
        <div class="card-header"></div>
        @if($detalleVentas->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>Id</td> 
                            <td>En que venta se asigna</td>
                            <td>Producto o servicio vendido</td>
                            <td>Cantidad</td>
                            <td>Precio Unitario</td>
<div class="card">
    <div class="card-body">
    <table class="table table-bordered table-hover">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Añadir</button>
    <thead class="thead-dark">
        <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center"scope="col">En que venta se asigna</th>
            <th class="text-center"scope="col">Producto o Servicio</th>
            <th class="text-center"scope="col">Cantidad</th>
            <th class="text-center"scope="col">Precio Unitario</th>
            <th class="text-center"scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($detalleVentas as $deVe)
        <tr>
            <td class="text-center">{{$deVe->id}}</td>
            <td class="text-center">{{$deVe->venta_id}}</td>
            <td class="text-center">{{$deVe->producto_servicios->nombre}}</td>
            <td class="text-center">{{round($deVe->cantidad)}}</td>
            <td class="text-center">{{$deVe->precio_unitario}}</td>
            <td class="text-center">
        <div class="button-container">
        <button type="button" class="btn btn-warning btn-sm">Editar</button>
        <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
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
            <label for="cantidadNuevaDetalleVenta">Cantidad:</label>
            <input type="number" class="form-control" id="cantidadNuevaDetalleVenta" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="precioUnitarioNuevaDetalleVenta">Precio Unitario:</label>
            <input type="number" class="form-control" id="precioUnitarioNuevaDetalleVenta" name="precio_unitario" required>
        </div>
        <div class="form-group">
            <label for="categoriaInput">Categoria:</label>
            <select class="form-control" id="categoriaInput">
                <option value="">Seleccionar producto o servicio</option>
                <option value="1">Producto 1</option>
                <option value="2">Membresia 2</option>
            </select>
        </div>