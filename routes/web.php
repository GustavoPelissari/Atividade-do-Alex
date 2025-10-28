<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdutoController;
use App\Models\Client;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/teste/{idcliente}', function ($idcliente) {
//     return Client::get('nome') ;
// });


Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('/clients/{id}', [ClientController::class, 'show']) ->name('clients.show');

// Route::get('/produtos/{idProduto}', function ($idProduto) {
//     return Produto::get() ;
// });
