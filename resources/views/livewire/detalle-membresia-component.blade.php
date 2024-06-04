<div>
    <div class="card">
        <div class="card-header"></div>
        @if($detalleMem->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Nombre</td>
                            <td>Fecha de inicio</td>
                            <td>Fecha de finalización</td>
                            <td>Estado de la membresía</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalleMem as $detaMem)
                        <tr>
                            <td>{{$detaMem->id}}</td>
                            <td>{{$detaMem->fecha_inicio}}</td>
                            <td>{{$detaMem->fecha_final}}</td>
                            <td>{{$detaMem->estado}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay Mebresias Asignadas</strong>
            </div>
        @endif
    </div>
</div>

