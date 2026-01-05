<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [AuthController::class, 'index']);

route::get('/login', [AuthController::class, 'login']);

route::get('/about', [AuthController::class, 'about']);

route::get('/news', [AuthController::class, 'news']);

Route::get('/about', function () {
    $data = ['laptop', 'Laptop', 'Keyboard'];
    return view('about', compact('data'));
});
// Basic POST route 
Route::get('/contact', function () {
    return 'Contact from submitted!';
});

// Method 1: Array 
// Route::get('/user/{name}', function ($nama) {
//     return view('user', ['nama' => $nama]);
// });

// Method 2: with() method
Route::get('/user/{name}', function ($name) {
    return view('user')->with('name', $name);
});

// Folder structure: resources/view/admin/users.blade.php
Route::get('/admin/user', function () {
    return view('admin.users');
});

Route::get('/galery', function () {
    return view('galery');
});

// Formulir pendaftaran

Route::get('/form', [UserController::class, 'index']);
Route::post('/kirim', [UserController::class, 'proses_tambah']);

// Route Student
Route::resource('student', StudentController::class);