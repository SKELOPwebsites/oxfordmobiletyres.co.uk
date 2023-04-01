<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

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

    $areas = ['Abingdon', 'Bicester', 'Chinnor', 'Didcot', 'Great Missenden', 'Henley-on-Thames', 'High Wycombe', 'Kidlington', 'Maidenhead', 'Marlow', 'Oxford', 'Princes Risborough', 'Wheatley', 'Witney'];

    $coverage = [];

    foreach($areas as $area) {
        $temp = [
            'name' => $area,
            'slug' => Str::slug($area)
        ];
        array_push($coverage, $temp);
    }

    return Inertia::render('Home', [
        'coverage' => $coverage
    ]);
});
Route::get('/mobile-tyre-fitting/{area}', function ($area) {
    $areas = ['Abingdon', 'Bicester', 'Chinnor', 'Didcot', 'Great Missenden', 'Henley-on-Thames', 'High Wycombe', 'Kidlington', 'Maidenhead', 'Marlow', 'Oxford', 'Princes Risborough', 'Wheatley', 'Witney'];
    $slugged = array_map(function ($area) {
        return Str::slug($area);
    }, $areas);

    if(!in_array($area, $slugged)) {
        abort(404);
    }

    return Inertia::render('Location', [
        'location' => $areas[array_search($area, $slugged)]
    ]);
});

Route::get('/mobile-tyre-fitting', function () {
    return Inertia::render('MobileTyreFitting');
});
Route::get('/mobile-tyre-repair', function () {
    return Inertia::render('MobileTyreRepair');
});
Route::get('/van-mobile-tyre-fitting', function () {
    return Inertia::render('VanMobileTyreFitting');
});
Route::get('/branded-tyres', function () {
    return Inertia::render('BrandedTyres');
});
Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});

Route::get('/contact', function (Request $request) {
    return Inertia::render('ContactUs', [
        'success' => $request->session()->get('success')
    ]);
});
Route::post('/contact', [ContactController::class, 'store']);
