<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

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

Route::get('/', function ($planet = null) {
    echo $planet == 'name';
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ]
    ];
    return view('welcome', ['planets' => $planets]);
});

Route::get('/planets/{name}', [PlanetController::class, 'show']);

Route::get('/planets', [PlanetController::class, 'index']);
