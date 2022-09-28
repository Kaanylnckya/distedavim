<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TreatmentController;
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
    return view('welcome');
});

//DOCTOR

Route::get('/doctors', [DoctorController::class, 'index'])->name('list.doctor');
Route::get('/add/doctors', [DoctorController::class, 'addDoctor'])->name('add.doctor');
Route::post('/store/doctor', [DoctorController::class, 'storeDoctor'])->name('store.doctor');
Route::get('/detail/{id}', [DoctorController::class, 'detail'])->name('detail.doctor');
Route::get('/delete/doctor/{id}', [DoctorController::class, 'deleteDoctor'])->name('delete.doctor');

//TREATMENT

Route::get('/treatments', [TreatmentController::class, 'index'])->name('list.treatment');
Route::get('/add/treatment', [TreatmentController::class, 'addTreatment'])->name('add.treatment');
Route::post('/store/treatment', [TreatmentController::class, 'storeTreatment'])->name('store.treatment');
Route::get('/delete/treatment/{id}', [TreatmentController::class, 'deleteTreatment'])->name('delete.treatment');
