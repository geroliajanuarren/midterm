<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Player1;

Route::get('/', [Player1::class, 'welcome']);
Route::post('/add', [Player1::class, 'store']);