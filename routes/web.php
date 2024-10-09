<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\AdminController;

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
//--------------------------------main-----------------------------------------//
Route::redirect('/', '/welcome');

Route::get('/netflix', [MediaController::class, 'getLastAddedMedia'])->name('lastAddedMedia');

Route::get('/welcome', function () {
    return view('netflix.prototipPaginaPrincipal');
})->name('unregistredMain');
//---------------------------------------------------------------------------//


//------------------------------login&register---------------------------------//
Route::get('/login', function () {
    return view('netflix.login');
});

Route::post('/login/userLogin', [UsersController::class, 'userLogin']);

Route::get('/register', function () {
    return view('netflix.register');
});

Route::post('/register/userCreate', [UsersController::class, 'userCreate']);

Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
//---------------------------------------------------------------------------//


//---------------------------------profile------------------------------------//
Route::get('/profile', [UsersController::class, 'showProfile']);

Route::put('/profile/{id}', [UsersController::class, 'update'])->name('profile.update');
//---------------------------------------------------------------------------//


//---------------------------------media-------------------------------------//

Route::post('/deleteMedia', [MediaController::class, 'deleteMedia'])->name('deleteMedia');

Route::post('/media', [MediaController::class, 'createMedia'])->name('createMedia');

Route::get('/media/{id}', [MediaController::class, 'showMedia'])->name('showMedia');

Route::get('/mediaFilter', [MediaController::class, 'mediaFilter'])->name('mediaFilter');

Route::get('/filtrar', [MediaController::class, 'filter'])->name('media.filter');

//---------------------------------------------------------------------------//


//---------------------------------movies-------------------------------------//
Route::get('/movies', [MediaController::class, 'showMoviesList']);

Route::get('/movie/{id}', [MediaController::class, 'showMovie'])->name('showMovie');

//---------------------------------------------------------------------------//


//---------------------------------series-------------------------------------//
Route::get('/series', [MediaController::class, 'showSeriesList']);

Route::get('/serie/{id}', [MediaController::class, 'showSerie'])->name('showSerie');

//---------------------------------------------------------------------------//


//---------------------------------episodes-----------------------------------//
Route::get('/series/episodes', function () {
    return view('netflix.episodes');
});

Route::get('/showEpisodeForm/{id}', [EpisodeController::class, 'showEpisodeForm'])->name('showEpisodeForm');

Route::get('/serie/{id}/{season}', [EpisodeController::class, 'showSeasons'])->name('showSeasons');

Route::get('/serie/{id}/{season}/{episode}', [EpisodeController::class, 'showEpisode'])->name('showEpisode');

Route::post('/createEpisode', [EpisodeController::class, 'createEpisode'])->name('createEpisode');

Route::delete('/season/{id}/delete', [MediaController::class, 'deleteSeason'])->name('delete_season');
//---------------------------------------------------------------------------//


//---------------------------------search------------------------------------//
Route::get('/searchResult', function () {
    return view('netflix.searchResult');
});
Route::get('/search', [MediaController::class, 'search'])->name('search.media');

Route::get('/busqueda', [MediaController::class, 'showMediaList']);
//---------------------------------------------------------------------------//


//--------------------------------favorites---------------------------------//
Route::get('/favorites', [FavoritesController::class, 'getFavorites']);
Route::get('/remove/{id_user}/{id_media}/{type}', [FavoritesController::class, 'removeFromFavorites'])->name('remove_favorites');

Route::get('/add/{id_user}/{id_media}/{type}', [FavoritesController::class, 'addRemoveFavorites'])->name('addRemove_favorites');
//---------------------------------------------------------------------------//


//--------------------------------admin---------------------------------//
Route::get('/mediaManagement', [AdminController::class, 'showMediaList']);
Route::get('/userManagement', [AdminController::class,'showUserList']);
Route::get('/showMediaForm/{id}', [AdminController::class, 'showMediaForm'])->name('showMediaForm');
Route::post('/editMedia/{id}', [AdminController::class, 'editMedia'])->name('editMedia');
Route::get('/removeMedia/{id}', [AdminController::class, 'removeMedia'])->name('removeMedia');
Route::get('/addMedia', function () {
    return view('netflix.createMedia');
});
Route::post('/createMedia', [AdminController::class, 'createMedia'])->name('createMedia');
Route::get('/addUser', function () {
    return view('netflix.createUser');
});
Route::post('/createUser', [AdminController::class, 'createUser'])->name('createUser');
Route::post('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
Route::get('/showUserForm/{id}', [AdminController::class, 'showUserForm'])->name('showUserForm');
Route::get('/removeUser/{id}', [AdminController::class, 'removeUser'])->name('removeUser');

//---------------------------------------------------------------------------//
