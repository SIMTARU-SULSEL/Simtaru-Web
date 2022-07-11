<?php

use App\Http\Controllers\mapsController;
use App\Http\Controllers\pendaftaranController;
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

// Route::get('/', function () {
//     return view('Main.Page.maps');
// });

// Route::resource('/crud', App\Http\Controllers\CrudController::class);
Route::get('/tata-ruang', [mapsController::class, 'index']);
Route::get('/tata-ruang/detail', [mapsController::class, 'show']);
Route::get('/pendaftaran', [pendaftaranController::class, 'index']);
Route::post('/pendaftaran', [pendaftaranController::class, 'store']);
// Access Admin Page
// Route::get('/', function () {
//     return view('CMS.Page.index');
// });

// Route::get('/login', function () {
//     return view('CMS.Page.login');
// });
// Route::get('/insert', function () {
//     $stuRef = app('firebase.firestore')->database()->collection('Tanggapan')->newDocument();
//     $stuRef->set([
//         'id' => 'seven',
//         'judul' => 'tes',
//         'nama' => 'tess',
//         'pesan' => 'tesss'
//     ]);
// });
