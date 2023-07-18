<?php

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//All Job Listings Route
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

//Single Job Listing Route
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing'=> Listing::find($id),
    ]);
});
