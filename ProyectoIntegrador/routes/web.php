<?php

use App\Http\Controllers\CartaPreController;
use App\Http\Controllers\CartaPresentaciones;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\CrudConvocatoria;
use App\Http\Controllers\CrudEvidencia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Masinfo;
use App\Http\Controllers\PlanInicial;
use App\Http\Controllers\PostulacionController;
use App\Livewire\Contanscia;
use App\Models\Convocatoria;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', [InicioController::class, 'index']);

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/documentos', [Contanscia::class,'render'])->name('documentos');
    Route::get('/ver-pdf/{nombre}', function ($nombre) {
        $ruta = public_path("document/{$nombre}.pdf");
        if (file_exists($ruta)) {
            $contenido = file_get_contents($ruta);

            return response($contenido, 200)
                ->header('Content-Type', 'application/pdf');
        } else {
            abort(404);
        }
    })->name('ver-pdf');
    Route::resource('/evidencias', CrudEvidencia::class);
    Route::resource('/convocatoria', CrudConvocatoria::class)->names([
        'index' => 'convocatoria',
        'create' => 'convocatoria',
        'store' => 'convocatoria',
        'show' => 'convocatoria',
        'edit' => 'convocatoria',
        'update' => 'convocatoria',
        'destroy' => 'convocatoria',
    ]);
    Route::resource('/cartapresentacion', CartaPresentaciones::class)->names([
        'index' => 'cartapresentacion',
        'create' => 'cartapresentacion',
        'store' => 'cartapresentacion',
        'show' => 'cartapresentacion',
        'edit' => 'cartapresentacion',
        'update' => 'cartapresentacion',
        'destroy' => 'cartapresentacion',
    ]);
    Route::resource('/planppp', PlanInicial::class)->names([
        'index' => 'planppp',
        'create' => 'planppp',
        'store' => 'planppp',
        'show' => 'planppp',
        'edit' => 'planppp',
        'update' => 'planppp',
        'destroy' => 'planppp',
    ]);
    Route::resource('/constancia', PlanInicial::class)->names([
        'index' => 'constancia',
        'create' => 'constancia',
        'store' => 'constancia',
        'show' => 'constancia',
        'edit' => 'constancia',
        'update' => 'constancia',
        'destroy' => 'constancia',
    ]);
    Route::resource('/cartaaceptacion', PlanInicial::class)->names([
        'index' => 'cartaaceptacion',
        'create' => 'cartaaceptacion',
        'store' => 'cartaaceptacion',
        'show' => 'cartaaceptacion',
        'edit' => 'cartaaceptacion',
        'update' => 'cartaaceptacion',
        'destroy' => 'cartaaceptacion',
    ]);
    Route::get('pdf',[CartaPreController::class, 'pdf'])->name('cartapresentacion.pdf');
    Route::get('/convocatorialist', function () {
        $convocatorias = Convocatoria::all();
        return view('livewire.convocatoria-list', compact('convocatorias'));
    })->name('convocatorialist');

    Route::get('/masinfo/{id}', [Masinfo::class, 'mostrarMasInfo'])->name('masinfo');
    Route::post('/guardar-postulacion', [PostulacionController::class, 'guardarPostulacion'])->name('guardarPostulacion');
    Route::get('/buscar-convocatorias', [ConvocatoriaController::class, 'buscar'])->name('buscar-convocatorias');

    Route::get('/ver-archivo/{archivo}', function ($archivo) {
        $rutaArchivo = storage_path('app/evidencias/' . $archivo);

        if (file_exists($rutaArchivo)) {
            $contenido = file_get_contents($rutaArchivo);

            return Response::make($contenido, 200, [
                'Content-Type' => 'application/pdf', // Ajusta según el tipo de archivo
                'Content-Disposition' => 'inline; filename="' . $archivo . '"',
            ]);
        }

        abort(404);
    })->name('ver-archivo');

});
