<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ResultComponent;
use App\Http\Livewire\StudyComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomeComponent::class);
Route::get('/result', ResultComponent::class);
Route::get('/study', StudyComponent::class);

/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 */

//  For Regular User or Patient
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});


//  For Admin Access
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});