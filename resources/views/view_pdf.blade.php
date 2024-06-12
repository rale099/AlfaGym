<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Ventas PDF</title>
    <link rel="stylesheet" href="/resources/css/app.css">
</head>
<body>
    <header>
        <div class="header_logo">
            <img src="/public/images/logo.jpg" alt="logo" id="logo">
            <h3>GIMNASIO ALFA FITNESS GYM</h3>
        </div>
    </header>
    <div class="container">
        <h4 id="titulo_reporte">Reporte de Ventas</h4>
        <table id="inv">
            <thead>
                <tr>
                    <th>No</th>
                    <th></th>
                    <th>Fecha de la venta</th>
                    <th></th>
                    <th>Total de la Venta</th>
                </tr>
                <?php $i=0 ?>
            </thead>
            <tbody>
                @foreach($Detalle_venta as $detalle)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td></td>
                        <td>{{$detalle->fecha}}</td>
                        <td></td>
                        <td>{{$detalle->total}}</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
        <h1>Pagina 1</h1>
        <div class="page-break"></div>
    </div>
    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 800, "Página $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
	</script>
</body>
</html>

<!-- @foreach($Detalle_venta as $detalle)
    FECHA: {{$detalle->fecha}} - Total ventas: {{$detalle->total}}
    <br>
@endforeach -->