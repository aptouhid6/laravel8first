<?php
use App\Http\Controllers\PntController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
Route::get('/show',[PntController::class, 'show'])->name('show');

Route::get('author/index',[AuthorController::class, 'index'])->name('author.index');
Route::get('author/create',[AuthorController::class, 'create'])->name('author.create');
Route::post('author/store',[AuthorController::class, 'store'])->name('author.store');
Route::get('author/edit/{id}',[AuthorController::class, 'edit'])->name('author.edit');
Route::put('author/update/{id}',[AuthorController::class, 'update'])->name('author.update');
Route::delete('author/delete/{id}',[AuthorController::class, 'destroy'])->name('author.destroy');

Route::get('books',[BookController::class, 'index'])->name('book.index');
Route::get('book/create',[BookController::class, 'create'])->name('book.create');
Route::post('book/store',[BookController::class, 'store'])->name('book.store');
Route::get('book/edit/{id}',[BookController::class, 'edit'])->name('book.edit');
Route::put('book/edit/{id}',[BookController::class, 'update'])->name('book.update');
Route::delete('book/{id}',[BookController::class, 'delete'])->name('book.delete');