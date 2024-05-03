<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SclassController;

Route::get('/schedules',[ScheduleController::class,'index'])->name('schedules.index');
Route::get('/teams',[TeamController::class,'index'])->name('teams.index');
Route::get('/sclasses',[SclassController::class,'index'])->name('sclasses.index');