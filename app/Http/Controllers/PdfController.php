<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerarPdfRequest;
use App\Models\Venta;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{

    public function vista_generar()
    {
        return view('formulario');
    }

    public function generar_pdf(Request $request)
    {
        //$fecha_inicio   = '2024-05-01';
        //$fecha_fin      = '2024-06-30';
        $fecha_inicio   = $request->fecha_inicio;
        $fecha_fin      = $request->fecha_fin;

        if($request->tipo_reporte == '1'){
            $Detalle_venta = Venta::select(DB::raw('DATE(fecha) as fecha, SUM(valor_total) as total'))
            ->whereBetween('fecha', [$fecha_inicio, $fecha_fin])
            ->groupBy(DB::raw('DATE(fecha)'))
            ->get();

            $html = view('reporte_venta_general', compact('Detalle_venta'))->render();
        }else{
            $Detalle_venta = Venta::with('detalle_venta.producto_servicios')
            ->whereBetween('fecha', [$fecha_inicio, $fecha_fin])
            ->get();
            $html = view('reporte_venta_detallado', compact('Detalle_venta'))->render();
        }


        //echo $html;
        //die();

        $dompdf = new Dompdf();

        // Cargar HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Obtener el contenido del PDF como una cadena
        $output = $dompdf->output();

        $nombre_pdf = 'reporte';

        //return response($output)
        //    ->header('Content-Type', 'application/pdf')
        //    ->header('Content-Disposition', 'attachment; filename="' . $nombre_pdf . '.pdf"');
        
        // Retornar el PDF para que se pueda imprimir o descargar
        return response($output)->header('Content-Type', 'application/pdf');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $nombre_pdf . '.pdf"');
        header('Content-Length: ' . strlen($output));
        }
}
