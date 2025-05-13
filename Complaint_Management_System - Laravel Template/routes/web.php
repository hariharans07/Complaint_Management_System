<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cmsController;


Route::get('/', function () {
    return view('admin');
});
Route::get('/admin',[cmsController::class, 'admin'])->name('admin');
Route::get('/eo',[cmsController::class, 'eo'])->name('eo');
Route::get('/faculty',[cmsController::class, 'faculty'])->name('faculty');
Route::get('/hod',[cmsController::class, 'hod'])->name('hod');
Route::get('/manager',[cmsController::class, 'manager'])->name('manager');
Route::get('/managerDash',[cmsController::class, 'managerDash'])->name('managerDash');
Route::get('/principal',[cmsController::class, 'principal'])->name('principal');
Route::get('/work',[cmsController::class, 'work'])->name('work');
Route::get('/workDash',[cmsController::class, 'workDash'])->name('workDash');
Route::get('/worker',[cmsController::class, 'worker'])->name('worker');