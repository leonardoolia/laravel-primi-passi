<?php

use Illuminate\Support\Facades\Route;

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
$name = ['name' => 'Leonardo', 'surname' => 'Olia'];
    return view('home', $name);
})->name('home');


Route::get('/job', function () {
$job = ['job' => 'Web Developer'];
    return view('details.job', $job);
})->name('job');

Route::get('/studies', function () {
$studies = ['highschool' => 'Foreign languages', 'courses' => 'Full Stack Web Developer course'];
    return view('details.studies', $studies);
})->name('studies');


