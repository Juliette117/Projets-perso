<?php


use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which#ff5100#ff5100#ff5100#ff5100#ff5100
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
    // return view('welcome');
// });

//Affiche homepage
Route::get('/', [MainController::class, 'home']);

//Affiche page liste des films
Route::get('/articles', [MainController::class, 'index'])->name('articles');

//Affiche page Liste des series (in progress)
Route::get('/articlespixel', [MainController::class, 'articlesseries'])->name('articlespixel');

//Affiche page Watchlist 
Route::get('/watchlistelky', [MainController::class, 'watchlistelky'])->name('watchlistelky');

//Affiche article 
Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');

Route::get('/articleserie', [MainController::class, 'articleserieshow'])->name('articleserie');

//Commentaire
Route::post('/articles/{article:id}/comments', [CommentController::class,'store'])->name('comments.store');



Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




// Route::prefix('admin')->middleware('admin')->group(function(){
    // //Affiche page admin
    // Route::get('/articles', [ArticleController::class, 'index'])->name('admin');

    // //Formulaire pour créer un article
    // Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');

    // Route::post('/articles/store', [ArticleController::class, 'store'])->name('article.store');

    // //Create (Read) Update Delete
    // //Éditer l'article
    // Route::get('/articles/{article:id}/edit', [ArticleController::class, 'edit'])->name('article.edit');

    // //Modifier l'article
    // Route::put('/articles/{article:id}/update', [ArticleController::class, 'update'])->name('article.update');

    // //Supprimer article
    // Route::delete('/articles/{article:id}/delete', [ArticleController::class, 'delete'])->name('article.delete');
// });




