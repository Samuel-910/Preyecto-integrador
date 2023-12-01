<?php

use App\Http\Controllers\CartaPreController;
use App\Http\Controllers\CartaPresentaciones;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\CrudCartaAceptacion;
use App\Http\Controllers\CrudConstancia;
use App\Http\Controllers\CrudConvenio;
use App\Http\Controllers\CrudConvocatoria;
use App\Http\Controllers\CrudEvidencia;
use App\Http\Controllers\CrudInforme;
use App\Http\Controllers\CrudSede;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Doc;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Masinfo;
use App\Http\Controllers\PlanInicial;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\Validar;
use App\Livewire\Contanscia;
use App\Livewire\Sede;
use App\Models\Convocatoria;
use App\Models\Empresa;
use App\Models\Practicante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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
    Route::resource('informe', CrudInforme::class);
    Route::resource('cartaaceptacion', CrudCartaAceptacion::class);
    Route::resource('constancia', CrudConstancia::class);
    Route::resource('convenio', CrudConvenio::class);
    Route::resource('informesuper', CrudInforme::class);

    Route::get('pdf',[CartaPreController::class, 'pdf'])->name('cartapresentacion.pdf');
    Route::get('/convocatorialist', function () {
        $convocatorias = Convocatoria::all();
        return view('livewire.convocatoria-list', compact('convocatorias'));
    })->name('convocatorialist');

    Route::get('/masinfo/{id}', [Masinfo::class, 'mostrarMasInfo'])->name('masinfo');
    Route::post('/guardar-postulacion', [PostulacionController::class, 'guardarPostulacion'])->name('guardarPostulacion');
    Route::get('/buscar-convocatorias', [ConvocatoriaController::class, 'buscar'])->name('buscar-convocatorias');
    Route::resource('/sede', CrudSede::class)->names([
        'index' => 'sede',
        'create' => 'sede',
        'store' => 'sede',
        'show' => 'sede',
        'edit' => 'sede',
        'update' => 'sede',
        'destroy' => 'sede',
    ]);
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

    Route::post('actualizar-estado-empresa/{id}/{estado}', [Validar::class, 'actualizarEstado'])->name('actualizar-estado-empresa');
    Route::get('/validar-documentos', [Doc::class, 'index'])->name('validar_documentos');
    Route::post('actualizar-estado-carta/{id}/{estado}', [Validar::class, 'actualizarEstadoCarta'])->name('actualizar-estado-carta');
    Route::post('actualizar-estado-constancia/{id}/{estado}', [Validar::class, 'actualizarEstadoConstancia'])->name('actualizar-estado-constancia');
    Route::post('actualizar-estado-informe/{id}/{estado}', [Validar::class, 'actualizarEstadoInforme'])->name('actualizar-estado-informe');
    Route::post('actualizar-estado-convenio/{id}/{estado}', [Validar::class, 'actualizarEstadoConvenio'])->name('actualizar-estado-convenio');
    Route::get('/supervisar', function () {
        $practicantes = Practicante::with('empresa')->get();
        return view('livewire.supervisar',compact('practicantes'));
    })->name('supervisar');



    Route::controller(FullCalenderController::class)->group(function(){
        Route::get('fullcalender', 'index')->name('fullcalender');
        Route::post('fullcalenderAjax', 'ajax')->name('fullcalenderAjax');
    });
});
