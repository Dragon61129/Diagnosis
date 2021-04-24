<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Diagnosis;

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

Route::get('/', [Diagnosis::class, 'index'])->name("home");
Route::get('deleteData/{id}', [Diagnosis::class, 'deleteData'])->name("deleteData");
Route::get('updateData/{id}', [Diagnosis::class, 'showData'])->name("updateData");
Route::post('updateData', [Diagnosis::class, 'updateData'])->name("updateData.post");
Route::get('newData', function(){
    return view('DiagnosisNew');
});
Route::post('newData', [Diagnosis::class, 'addNewData'])->name("newData.post");
