<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AppelaprojetController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('', function () {
    return view('pages.Accueil');
});
/*Route::get('/rejoindre-le-reseaux', function () {
    return view('pages.form-Rejoindre-Les-Reseaux');
})->name('rejoindre-le-reseaux');*/
Route::get('/',[HomeController::class,'home'])->name('Home');

Route::get('/ppel-aprojet',[HomeController::class,'appelaprojet'])->name('Appel-aprojet');
Route::get('/rejoindre-lereseaux',[HomeController::class,'rejoindreReseaux'])->name('Rejoindre-lereseaux');

//pour traiter le formulaire et envoyer le contenue du form par mail
Route::post('/Appel-aprojet',[AppelaprojetController::class,'store'])->name('store.Add');

//pour traiter le formulaire et envoyer le contenue du form par mail
Route::post('/contactenvoi',[HomeController::class,'contact'])->name('contact.envoi');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
