<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($proSer->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Nombre</td>
                                <td>Precio Unitario</td>
                                <td>Tipo</td>
                                <td>Membresia</td>
                            </tr>
                        </thead>
                        <tbody>
                                
                            @foreach ($proSer as $ps)
                            <tr>
                                <td>{{$ps->id}}</td>
                                <td>{{$ps->nombre}}</td>
                                <td>$ {{$ps->precio_unitario}}</td>
                                <td>{{$ps->tipo_id == 1 ? 'producto' : 'membresia'}}</td>
                                <td>{{$ps->membresia_id}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Productos o Servicios </strong>
                </div>
            @endif
        </div>
    </div>
</div>
