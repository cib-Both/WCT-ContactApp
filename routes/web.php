<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Services\Data;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contacts', function(){
//     $data = Data::$contacts_data;
//     $companies_data = Data::$companies_data;
//     return view('contacts.index', compact('data', 'companies_data'));
// })->name('contacts.index');

// Route::apiResource('companies', CompanyController::class);
Route::resource('contacts', ContactController::class);
Route::resource('companies', CompanyController::class);

?>