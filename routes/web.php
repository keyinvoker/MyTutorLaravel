<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::fallback(function () {
	return '
	<div class="d-flex justify-content-center align-items-center">
		<center>
			<br>
			<h1 style="color:purple;">
				YAAAAH.. :(
			</h1>
			<h2 style="color:violet;">
				Sadly, page not found, mate.
				<br>
				I wish you luck on your next journey.
				<br><br>
				This is the way.
			</h2>
		</center>
	</div>
	';
});

// WELCOME/LANDING
Route::get('/', [HomeController::class, 'index'])->name('welcome');

// HOME
Route::get('/home', [HomeController::class, 'home'])->name('home');

// PROFILE
Route::get('/profile', [UserController::class, 'getProfileForm'])->name('profile');

// SUBJECT
Route::get('/subject/{id}', [SubjectController::class, 'getDetails'])->name('subject.details');
Route::get('/edit/{id}', [SubjectController::class, 'getEditingForm'])->name('subject.editForm');
Route::post('/edit/{id}', [SubjectController::class, 'editSubject'])->name('subject.edit');
Route::post('/delete/{id}', [SubjectController::class, 'deleteSubject'])->name('subject.delete');
Route::get('/insert', [SubjectController::class, 'getInsertForm'])->name('subject.insertForm');
Route::post('/insert', [SubjectController::class, 'insertSubject'])->name('subject.insert');