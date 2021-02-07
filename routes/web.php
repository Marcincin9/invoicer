<?php
use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/invoices', [InvoicesController::class, 'index'])->name('invoices.index');
Route::get('/invoices/create', [InvoicesController::class, 'create'])->name('invoices.create');
Route::get('/invoices/edit{id}', [InvoicesController::class, 'edit'])->name('invoices.edit');
Route::post('/invoices/save', [InvoicesController::class, 'store'])->name('invoices.store');
Route::put('/invoices/change{id}', [InvoicesController::class, 'update'])->name('invoices.update');
Route::delete('/invoices/delete{id}', [InvoicesController::class, 'delete'])->name('invoices.delete');
