<div>
<div>
    <div class="card">
        <div class="card-header"></div>
        @if($notificaciones->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Titulo</td>
                            <td>Mensaje</td>
                            <td>Fecha de Alerta</td>
                            <td>Usuario</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notificaciones as $noti)
                        <tr>
                            <td>{{$noti->id}}</td>
                            <td>{{$noti->titulo}}</td>
                            <td>{{$noti->mensaje}}</td>
                            <td>{{$noti->fecha_alerta}}</td>
                            <td>{{$noti->usuario_id}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros de Notificaciones</strong>
            </div>
        @endif
    </div>
</div>

</div>
