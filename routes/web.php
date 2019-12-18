<?php

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
    return view('index');
});

Route::get('task/', 'Tasks@index');
Route::get('task/{id}', 'Tasks@detail')->where('id', '[0-9]+');


/*
Route::get('task/', function () {
    $tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('task', compact('tasks'));
});

Route::get('task/{id}', function ($id) {
    return view('task');
})->where('id', '[0-9]+');
*/

