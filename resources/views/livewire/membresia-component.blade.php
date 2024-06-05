<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($membresias->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Duración</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($membresias as $mem)
                            <tr>
                                <td>{{$mem->id}}</td>
                                <td>{{$mem->duracion}} días</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Membresías</strong>
                </div>
            @endif
        </div>
    </div>
</div>