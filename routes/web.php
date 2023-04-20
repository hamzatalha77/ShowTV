<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TelfazyController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\EpisodeAnimeController;
use App\Http\Controllers\SeasonAnimeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;


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
    return redirect(route('telfazy.index'));
});

Route::get('/register', function () {
    return redirect(route('telfazy.index'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('users',UserController::class);
Route::resource('portfolios',PortfolioController::class);
Route::resource('movies',MovieController::class);
Route::resource('animes',AnimeController::class);
Route::resource('anime_episodes',EpisodeAnimeController::class);
Route::resource('anime_seasons',SeasonAnimeController::class);
Route::resource('messages',MessageController::class);

Route::get('addseasonanime/{id}',[SeasonAnimeController::class,'addserieanime'])->name('addserieanime');

Route::get('addepisodeanime/{id}',[EpisodeAnimeController::class,'addepisodeanime'])->name('addepisodeanime');
Route::get('allepisodeanime/{id}',[EpisodeAnimeController::class,'allepisodeanime'])->name('allepisodeanime');
Route::get('allseasonanime/{id}',[SeasonAnimeController::class,'index2'])->name('allseasonanime');


Route::get('changeStatusAnime',[AnimeController::class,'changeStatusAnime']);

Route::get('allanimes',[AnimeController::class,'allanimes'])->name('allanimes');

Route::get('searchanime',[AnimeController::class,'searchanime'])->name('searchanime');


Route::get('changeTopAnime',[AnimeController::class,'changeTopAnime']);
Route::get('changeTopMovie',[MovieController::class,'changeTopMovie']);
Route::get('changeTopSerie',[SerieController::class,'changeTopSerie']);

Route::get('disabel',[MovieController::class,'disabel'])->name('disabel');
Route::get('enable',[MovieController::class,'enable'])->name('enable');

Route::get('disabelserie',[SerieController::class,'disabel'])->name('disabelserie');
Route::get('enableserie',[SerieController::class,'enable'])->name('enableserie');

Route::get('disabelanime',[AnimeController::class,'disabel'])->name('disabelanime');
Route::get('enableanime',[AnimeController::class,'enable'])->name('enableanime');





Route::get('changeStatusAnimeEpisode',[EpisodeAnimeController::class,'changeStatusAnimeEpisode']);
Route::get('changeStatusAnimeSeason',[SeasonAnimeController::class,'changeStatusAnimeSeason']);
Route::get('changeStatus',[MovieController::class,'changeStatus']);
//Route::get('showcategory',[MovieController::class,'showcategory'])->name('showcategorymovie');
//Route::get('categories/{category:id}/movies',[MovieController::class,'showcategory'])->name('showcategory');
Route::get('details/{id}',[TelfazyController::class,'details'])->name('details');
Route::resource('/series',SerieController::class);
Route::get('addseason/{id}',[SerieController::class,'addseason'])->name('addseason');
Route::post('addserie',[SerieController::class,'addserie'])->name('addserie');
//Route::get('/searchmovie',[SerieController::class,'searchmovie']);

Route::post('newseason/{id}',[SerieController::class,'newseason'])->name('newseasons');
Route::get('showseasons/{id}',[SerieController::class,'showseasons'])->name('showseasons');
Route::get('editseason/{id}',[SerieController::class,'editseason'])->name('editseason');
Route::put('updateseason/{id}',[SerieController::class,'updateseason'])->name('updateseason');
Route::get('editserie/{id}',[SerieController::class,'editserie'])->name('editserie');
Route::put('updateserie/{id}',[SerieController::class,'updateserie'])->name('updateserie');
Route::get('editepisode/{id}',[SerieController::class,'editepisode'])->name('editepisode');
Route::put('updateepisode/{id}',[SerieController::class,'updateepisode'])->name('updateepisode');

Route::get('addepisodes/{id}',[SerieController::class,'addepisodes'])->name('addepisodes');
Route::post('addepisode/{id}',[SerieController::class,'addepisode'])->name('addepisode');
Route::get('showepisodes/{id}',[SerieController::class,'showepisodes'])->name('showepisodes');
Route::delete('destroy2/{id}',[SerieController::class,'destroy2'])->name('destroy2');
Route::delete('destroy1/{id}',[SerieController::class,'destroy1'])->name('destroy1');
Route::get('changeStatusSerie',[SerieController::class,'changeStatusSerie']);
Route::get('changeStatusSeason',[SerieController::class,'changeStatusSeason']);
Route::get('changeStatusEpisode',[SerieController::class,'changeStatusEpisode']);

Route::resource('telfazy',TelfazyController::class);
Route::get('allshows',[TelfazyController::class,'show'])->name('allshows');
Route::get('showseries/{id}',[TelfazyController::class,'showseries'])->name('showseries');
Route::get('showseasons1/{id}',[TelfazyController::class,'showseasons'])->name('showseasons1');
Route::get('showepisodes1/{id}',[TelfazyController::class,'showepisodes'])->name('showepisodes1');
Route::get('category/{id}',[TelfazyController::class,'category'])->name('category');
Route::get('genre/{id}',[TelfazyController::class,'genre'])->name('genre');

Route::get('showep/{id}',[TelfazyController::class,'showep'])->name('showep');

Route::get('search',[TelfazyController::class,'search'])->name('search');
Route::get('mytv',[TelfazyController::class,'index'])->name('mytv');
//Route::get('autocomplete',[TelfazyController::class,'autocomplete'])->name('autocomplete');
Route::get('movie{id}',[TelfazyController::class,'directtomovie'])->name('directtomovie');
Route::get('navbar',[TelfazyController::class,'navbar'])->name('navbar');
Route::get('listmovies',[TelfazyController::class,'listmovies'])->name('listmovies');
Route::get('listseries',[TelfazyController::class,'listseries'])->name('listseries');

Route::get('showserie/{id}',[TelfazyController::class,'showserie'])->name('showserie');
Route::get('showepisodetelfazy/{id}',[TelfazyController::class,'showepisodetelfazy'])->name('showepisodetelfazy');
Route::get('episode/{id}',[SerieController::class,'showepisode'])->name('theep');
Route::get('telfazyepisode/{id}',[TelfazyController::class,'episodetelfazy'])->name('episodetelfazy');
Route::get('myepisode/{id}',[TelfazyController::class,'myepisode'])->name('myepisode');
Route::get('searchbytype/{class}',[TelfazyController::class,'searchbytype'])->name('searchbytype');
Route::get('looking',[TelfazyController::class,'looking'])->name('looking');
Route::get('searchbytypeserie/{serieclasse}',[TelfazyController::class,'searchbytypeserie'])->name('searchbytypeserie');
Route::get('lookingserie',[TelfazyController::class,'lookingserie'])->name('lookingserie');

Route::get('showanime/{id}',[TelfazyController::class,'showanime'])->name('showanime');
Route::get('showepisodeanimetelfazy/{id}',[TelfazyController::class,'showepisodeanimetelfazy'])->name('showepisodeanimetelfazy');

Route::get('download/{id}',[TelfazyController::class,'download'])->name('download');

Route::get('topmovies',[TelfazyController::class,'topmovies'])->name('topmovies');
Route::get('topanimes',[TelfazyController::class,'topanimes'])->name('topanimes');
Route::get('topseries',[TelfazyController::class,'topseries'])->name('topseries');
Route::get('newmovies',[TelfazyController::class,'newmovies'])->name('newmovies');
Route::get('newseries',[TelfazyController::class,'newseries'])->name('newseries');
Route::get('newanimes',[TelfazyController::class,'newanimes'])->name('newanimes');
Route::get('newanimemovies',[TelfazyController::class,'newanimemovies'])->name('newanimemovies');

Route::get('updatevisitor/{id}',[TelfazyController::class,'updatevisitor'])->name('updatevisitor');
