<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Reportes PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <div>
      <br>
    <form class="row gy-2 gx-3 align-items-center" action="{{route('generar_pdf')}}" method="POST" target="_blank">
    @csrf
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Desde: </label>
    <input type="date" class="form-control" id="inicio" name="fecha_inicio">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Hasta: </label>
    <div class="input-group">
      <input class="form-control" type="date" name="fecha_fin" id="fin">
    </div>
  </div>
  
  <div class="col-auto">
    <br>
    <label class="visually-hidden" for="autoSizingSelect">Tipo de reporte</label>
    <select class="form-select" name="tipo_reporte" id="autoSizingSelect">
      <option selected value='1'>General</option>
      <option value="2">Detallado</option>
    </select>
  </div>

  <div class="col-auto">
    <br>
    <button type="submit" class="btn btn-primary">Generar reporte</button>
  </div>
</form>
    </div>
</div>
</body>
</html>
 <!-- Reporte de ventas
    <form action="{{route('generar_pdf')}}" method="POST" target="_blank">
        @csrf
        <input type="date" name="fecha_inicio" id="inicio">
        <input type="date" name="fecha_fin" id="fin">
        <button type="submit">Generar reporte</button>
    </form> -->

<script>
    var fecha = new Date();
    var fechaInicio = new Date(fecha.getFullYear(), fecha.getMonth(), 1); // Primer día del mes
    var fechaFin = new Date(fecha.getFullYear(), fecha.getMonth() + 1, 0); // Último día del mes

    // Formatear las fechas para que Laravel las entienda (YYYY-MM-DD)
    var fechaInicioFormatted = fechaInicio.toISOString().split('T')[0];
    var fechaFinFormatted = fechaFin.toISOString().split('T')[0];

    document.getElementById('inicio').value = fechaInicioFormatted;
    document.getElementById('fin').value = fechaFinFormatted;
</script>
 