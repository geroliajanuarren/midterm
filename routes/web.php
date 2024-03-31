<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Player1;

Route::get('/', [Player1::class, 'welcome']);

Route::post('/add', [Player1::class, 'store']);

Route::post('/update_records', [Player1::class, 'update_records']);

Route::get('/edit/{id}', [Player1::class, 'edit_form']);

Route::get('/delete/{id}', [Player1::class, 'delete']);
