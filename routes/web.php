<?php

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
    \App\Models\Deployment::factory()
        ->times(1000)
        ->sequence(function ($sequence) {
            return [
                'created_at' => now()->subHour($sequence->index)
            ];
        })
        ->create();

});
