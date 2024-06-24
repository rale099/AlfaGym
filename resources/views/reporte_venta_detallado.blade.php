<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Ventas PDF</title>
    <!--  <link rel="stylesheet" href="/resources/css/app.css"> -->
    <style>

    </style>
</head>
<body>
    <header>
        <div class="header_logo">
            <img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('images/logo.jpg')))}}" width="85px" alt="logo" id="logo">
            <!-- <img src="{{asset('images/logo.jpg')}}" alt="logo" id="logo"> -->
            <h3>GIMNASIO ALFA FITNESS GYM</h3>
        </div>
    </header>
    <div class="container">
        <h4 id="titulo_reporte">Reporte de Ventas Detallado</h4>
        <table id="inv" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th># Venta</th>
                    <th>Fecha de la venta</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Total de Venta</th>
                </tr>
                <?php $i=0 ?>
            </thead>
            <tbody>
                @foreach($Detalle_venta as $detalle)
                    @foreach($detalle->detalle_venta as $venta)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{$detalle->id}}</td>
                            <td>{{$detalle->fecha}}</td>
                            <td>{{$venta->producto_servicios->nombre}}</td>
                            <td>{{round($venta->cantidad)}}</td>
                            <td>${{$venta->precio_unitario}}</td>
                            <td>${{$venta->precio_unitario * $venta->cantidad}}</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        <h1>Pagina 1</h1>
        <div class="page-break"></div>
    </div>
    <!-- <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 800, "Página $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
	</script> -->
</body>
</html>

<!-- @foreach($Detalle_venta as $detalle)
    FECHA: {{$detalle->fecha}} - Total ventas: {{$detalle->total}}
    <br>
@endforeach -->