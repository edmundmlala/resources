<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
 
Route::get('/user', [UserController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contactus', [PagesController::class, 'index']);
Route::get('/books', [PagesController::class, 'books']);
Route::get('/grade/{id}', [PagesController::class, 'grade']);
Route::get('/subjects/{id}', [PagesController::class, 'subjects'])->name("subjects");
Route::get('/homework/{id}', [PagesController::class, 'homework'])->name("homework");
Route::get('/syllabus/{id}', [PagesController::class, 'syllabus'])->name("syllabus");
Route::get('/outline/{id}', [PagesController::class, 'outline'])->name("outline");
Route::get('/books/{id}', [PagesController::class, 'books'])->name("books");
Route::get('/cambridgeHigh', [PagesController::class, 'cambridgeHigh']);
Route::get('/cambridgePrimary', [PagesController::class, 'cambridgePrimary']);
Route::get('/cambridgePathway', [PagesController::class, 'cambridgePathway']);
Route::get('/juneExams', [PagesController::class, 'exams']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teachers/homework', 'TeachersController@homework');
Route::get('/teachers/outline', 'TeachersController@outline');
Route::get('/teachers/syllabus', 'TeachersController@syllabus');
Route::get('/teachers/books', 'TeachersController@books');
Route::get('/teachers/handouts', 'TeachersController@handouts');
Route::get('/teachers/recommendations', 'TeachersController@recommendations');
