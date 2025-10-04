<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::controller(WebsiteController::class)->name('website.')->group(function (){
    Route::get('/','index')->name('index');
    
});
