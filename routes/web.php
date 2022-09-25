<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Admin\CidadeController;
use App\Http\Controllers\Admin\ImovelController;




Route::redirect('/', '/admin/imoveis'); // Redireciona sempre a url setada no segundo parâmetro




Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('cidades', CidadeController::class)->except(['show']); //não usei o método Show;
    Route::resource('imoveis', ImovelController::class);

});


Route::get('/sobre', function () {
    return '<h2>Sobre</h2>';
});
