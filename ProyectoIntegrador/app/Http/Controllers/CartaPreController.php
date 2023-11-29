<?php

namespace App\Http\Controllers;

use App\Models\CartaPresentacion;
use Barryvdh\DomPDF\Facade\Pdf;

class CartaPreController extends Controller
{
    public function pdf()
    {
        $cartapresentacions = CartaPresentacion::all();
        $pdf = PDF::loadView('livewire.pdf', compact('cartapresentacions'));

        // Cambia el directorio y el nombre de archivo según tus necesidades
        $nombreArchivo = 'nombre_del_archivo.pdf';
        $rutaGuardado = storage_path('pdfs/' . $nombreArchivo);

        // Guarda el PDF en el sistema de archivos
        $pdf->save($rutaGuardado);

        // También puedes retornar la ruta guardada si necesitas usarla posteriormente
        // return $rutaGuardado;

        // O simplemente redirige al usuario o realiza alguna otra acción después de guardar el PDF
        return redirect()->back()->with('success', 'PDF guardado correctamente.');
    }

}
