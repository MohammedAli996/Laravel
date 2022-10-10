<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
class PlanetenController extends Controller
{
    public $planets = [
        [
            'name' => 'Mars',
        ],
        [
            'name' => 'Venus',
        ],
        [
            'name' => 'Earth',
        ]
    ];
    public function index() {
        return view('welcome')->with('planets', $planets);
    }
}
?>

