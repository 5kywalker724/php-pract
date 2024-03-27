<?php

use Src\Route;

Route::add('GET', '/main', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/add_building', [Controller\Site::class, 'addBuilding']);
Route::add('GET', '/add_room', [Controller\Site::class, 'addRoom']);
Route::add('GET', '/get_name', [Controller\Site::class, 'getName']);
Route::add('GET', '/get_number', [Controller\Site::class, 'getNumber']);
Route::add('GET', '/get_square', [Controller\Site::class, 'getSquare']);
Route::add('GET', '/get_seats', [Controller\Site::class, 'getSeats']);
Route::add('GET', '/get_all_seats', [Controller\Site::class, 'getAllSeats']);
Route::add('GET', '/error', [Controller\Site::class, 'errorRole']);