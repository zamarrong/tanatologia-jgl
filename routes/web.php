<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\LandingTanatologiaController;

Route::get('/', [LandingTanatologiaController::class, 'landing'])->name('landingT');
Route::post('/', [LandingTanatologiaController::class, 'store'])->name('tanatologia.store');
Route::get('/mensaje', [LandingTanatologiaController::class, 'thankyou'])->name('mensajeT');

Route::get('/descargar-ebook-tanatologia', function () {
    $filePath = storage_path('app/public/JGLEbookContenidoTanatólogico.pdf');

    if (!file_exists($filePath)) {
        abort(404);
    }

    return response()->download(
        $filePath,
        'JGLEbookContenidoTanatólogico.pdf',
        ['Content-Type' => 'application/pdf']
    );
})->name('tanatologia.download');

