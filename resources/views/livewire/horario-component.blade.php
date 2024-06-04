<div>
<div>
    <div class="card">
        <div class="card-header"></div>
        @if($horarios->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Dia de la Semana</td>
                            <td>Desde</td>
                            <td>Hasta</td>
                            <td>Sucursal</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                        <tr>
                            <td>{{$horario->id}}</td>
                            <td>{{$horario->dia_semana}}</td>
                            <td>{{$horario->desde}}</td>
                            <td>{{$horario->hasta}}</td>
                            <td>{{$horario->sucursal_id}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros de Horarios</strong>
            </div>
        @endif
    </div>
</div>

</div>
