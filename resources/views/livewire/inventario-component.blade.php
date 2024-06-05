<div>
<div>
    <div class="card">
        <div class="card-header"></div>
        @if($inventarios->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Stock</td>
                            <td>Stock Minimo</td>
                            <td>Categoria</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventarios as $inve)
                        <tr>
                            <td>{{$inve->id}}</td>
                            <td>{{$inve->stock}}</td>
                            <td>{{$inve->stock_minimo}}</td>
                            <td>{{$inve->categoria_id}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros de Inventario</strong>
            </div>
        @endif
    </div>
</div>

</div>
