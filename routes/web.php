<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SclassController;

Route::get('/schedules',[ScheduleController::class,'index'])->name('schedules.index');
Route::post('/ajax/schedules/{type?}',[ScheduleController::class,'ajaxSchedules'])->name('schedules.ajaxSchedules');
Route::post('/ajax/scheduleFavorite/{id}/{type}',[ScheduleController::class,'ajaxScheduleFavorite'])->name('schedules.ajaxScheduleFavorite');
Route::get('/teams',[TeamController::class,'index'])->name('teams.index');
Route::get('/sclasses',[SclassController::class,'index'])->name('sclasses.index');
Route::get('/sclasses/{id}', [SclassController::class, 'show'])->name('sclasses.show');
