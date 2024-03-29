<?php

use Src\Route;

Route::add('GET', '/main', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_building', [Controller\Site::class, 'addBuilding'])->middleware('auth', 'employee');
Route::add(['GET', 'POST'], '/add_room', [Controller\Site::class, 'addRoom'])->middleware('auth', 'employee');
Route::add('GET', '/get_name', [Controller\Site::class, 'getName'])->middleware('auth', 'employee');
Route::add('GET', '/get_number', [Controller\Site::class, 'getNumber'])->middleware('auth', 'employee');
Route::add('GET', '/get_square', [Controller\Site::class, 'getSquare'])->middleware('auth');
Route::add('GET', '/get_seats', [Controller\Site::class, 'getSeats'])->middleware('auth');
Route::add('GET', '/get_all_seats', [Controller\Site::class, 'getAllSeats'])->middleware('auth');
Route::add('GET', '/search_building', [Controller\Site::class, 'searchBuilding'])->middleware('auth');
Route::add('GET', '/error', [Controller\Site::class, 'errorRole']);