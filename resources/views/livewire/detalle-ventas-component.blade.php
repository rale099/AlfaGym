<div>
  <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl"></h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
    @if($detalleVentas->count())
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id</th>
                    <th class="text-left p-3 px-5">Venta</th>
                    <th class="text-left p-3 px-5">Producto o Servicio</th>
                    <th class="text-left p-3 px-5">Cantidad</th>
                    <th class="text-left p-3 px-5">Precio Unitario</th>
                    <th></th>
                </tr>
                @foreach ($detalleVentas as $deVe)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$deVe->id}}</td>
                    <td class="p-3 px-5">{{$deVe->venta_id}}</td>
                    <td class="p-3 px-5">{{$deVe->producto_servicios->nombre}}</td>
                    <td class="p-3 px-5">{{round($deVe->cantidad)}}</td>
                    <td class="p-3 px-5">{{$deVe->precio_unitario}}</td>
                    <td class="p-3 px-5 flex justify-end">
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
      <div class="card-body">
        <strong>No hay registros de ventas</strong>
      </div>
    @endif
</div>
</div>