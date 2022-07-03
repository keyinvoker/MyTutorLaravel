<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::fallback(function () {
	return '<center><br>
			<h1 style="color:darkred;">YAAAAH!!!</h1>
			<h2 style="color:red;">Sadly, page not found, mate.<br>
				Better luck next time!</h2>
			</center>';
});

Route::get('/', function () {
	return view('welcome');
});
