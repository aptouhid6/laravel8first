<?php
use App\Http\Controllers\PntController;
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
    return view('welcome');
});
// Route::get('pnt', function () {
//      return view('peoplentechView');
// });
Route::get('/pnt',[PntController::class, 'index']);

// Route::get('pnt/about', function () {
//     return view('about');
// });
Route::get('/pnt/about',[PntController::class, 'about']);

Route::get('/pnt/about/form',[PntController::class, 'form'])->name('about.form');
Route::post('/preview',[PntController::class, 'preview'])->name('preview');