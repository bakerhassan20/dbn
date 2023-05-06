<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Jops\JoinUsController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Project\CategoryController;
use App\Http\Controllers\Jops\CooperativeTController;


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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('pages\frontend\home\home');
        });
        Route::get('home', function () {
            return view('pages\frontend\home\home');
        });
        Route::get('contact-us', function () {
            return view('pages.frontend.contact.contact-us');
        })->name('contact-us');

        Route::get('join-us', function () {
            return view('pages.frontend.career.join-us');
        })->name('join-us');

        Route::get('cooperative-training', function () {
            return view('pages.frontend.career.cooperative-training');
        })->name('cooperative-training');


        Route::resource('project/categories', CategoryController::class)->names([
            'index' => 'project.categories',
            'store' => 'project.categories.add'
        ]);

        Route::resource('projects', ProjectController::class)->names([
            'index' => 'projects.list',
            'create' => 'projects.add',
            'store' => 'project.categories.save'
        ]);
        Route::resource('join', JoinUsController::class)->names([
            'index' => 'join.list',
            'create' => 'join.add',
            'store' => 'join.save'
        ]);
        Route::resource('cooperative', CooperativeTController::class)->names([
            'index' => 'cooperative.list',
            'create' => 'cooperative.add',
            'store' => 'cooperative.save'

        ]);
        Route::resource('contact', ContactController::class)->names([
            'index' => 'contact.list',
            'create' => 'contact.add',
            'store' => 'contact.save'

        ]);
        Route::get('test', function () {
            return view('pages\backend\dashoard');
        });

    }
);
