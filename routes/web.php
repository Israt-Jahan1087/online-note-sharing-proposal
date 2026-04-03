<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {

    if(auth()->user()->role == 'admin'){
        return redirect('/admin/dashboard');
    }

    return redirect('/user/dashboard');

})->middleware(['auth'])->name('dashboard');

Route::delete('/notes/{id}', [NoteController::class,'destroy'])
->name('notes.destroy');

Route::get('/admin/dashboard',[AdminController::class,'dashboard']);

Route::get('/user/dashboard',[UserController::class,'dashboard'])->middleware('auth');
Route::get('/notes', [NoteController::class, 'allNotes'])->name('notes.all');
Route::post('/upload',[NoteController::class,'store']);
Route::delete('/admin/users/{id}',[AdminController::class,'destroy'])->name('users.destroy');
Route::get('/admin/users', [AdminController::class,'index'])->name('admin.users');
Route::get('/search',[NoteController::class,'search']);

Route::get('/admin/notes', [NoteController::class,'adminNotes'])->name('admin.notes');
Route::resource('categories',CategoryController::class);
Route::get('/user/download/{id}', [NoteController::class, 'download'])->name('user.download');
Route::get('/notes/download/{id}',[NoteController::class,'download'])
->name('notes.download');
Route::get('/upload',[NoteController::class,'create'])->middleware('auth');
Route::get('/user/allnotes', [NoteController::class, 'allNotes'])->name('user.allnotes');
Route::get('/admin/notes/reject/{id}',[NoteController::class,'reject'])->name('notes.reject');
Route::post('/notes/store',[NoteController::class,'store'])->name('notes.store');


Route::get('/admin/approve-note/{id}', [AdminController::class,'approve'])->name('admin.approve');

Route::get('/admin/reject-note/{id}', [AdminController::class,'reject'])->name('admin.reject');









require __DIR__.'/auth.php';