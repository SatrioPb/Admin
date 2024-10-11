<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AyhsController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Departement;
use App\Models\Payment;
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
    return redirect()->route('dashboard.index');
});

Route::get('Article/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('Article/articles/{id}/editarticle', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('Article/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('Article/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('Ayhs/ayhs', [AyhsController::class, 'index'])->name('ayhs.index');
Route::get('Ayhs/ayhs/{id}/editayhs', [AyhsController::class, 'edit'])->name('ayhs.edit');
Route::put('Ayhs/ayhs/{id}', [AyhsController::class, 'update'])->name('ayhs.update');
Route::delete('Ayhs/ayhs/{id}', [AyhsController::class, 'destroy'])->name('ayhs.destroy');


Route::get('Event/event', [EventController::class, 'index'])->name('event.index');
Route::get('Event/event/{id}/editevent', [EventController::class, 'edit'])->name('event.edit');
Route::put('Event/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('Event/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('Books/book', [BooksController::class, 'index'])->name('books.index');
Route::get('Books/book/{id}/editbook', [BooksController::class, 'edit'])->name('books.edit');
Route::put('Books/book/{id}', [BooksController::class, 'update'])->name('books.update');
Route::delete('Books/book/{id}', [BooksController::class, 'destroy'])->name('books.destroy');


Route::get('Departement/departement', [DepartementController::class, 'index'])->name('departement.index');
Route::get('Departement/departement/{id}/editdepartement', [DepartementController::class, 'edit'])->name('departement.edit');
Route::put('Departement/departement/{id}', [DepartementController::class, 'update'])->name('departement.update');
Route::delete('Departement/departement/{id}', [DepartementController::class, 'destroy'])->name('departement.destroy');



Route::get('user/users', [UserController::class, 'index'])->name('users.index');
Route::get('user/users/filter', [UserController::class, 'filter'])->name('user.filter'); // Ubah rute filter
Route::get('user/users/{id}/edituser', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('user/users/{id}/viewuser', [UserController::class, 'view'])->name('user.view');





Route::get('Payment/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('Payment/paymentsuccess', [PaymentController::class, 'success'])->name('payment.filter');
Route::get('Payment/paymentpending', [PaymentController::class, 'pending'])->name('payment.pending');


Route::get('Post/post', [PostController::class, 'index'])->name('post.index');


Route::get('Bank/bank', [BankController::class, 'index'])->name('bank.index');
Route::get('Bank/bank/{id}/editbank', [BankController::class, 'edit'])->name('bank.edit');
Route::put('Bank/bank/{id}', [BankController::class, 'update'])->name('bank.update');
Route::delete('Bank/bank/{id}', [BankController::class, 'destroy'])->name('bank.destroy');
