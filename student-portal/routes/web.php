<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Student Pages
Route::get('/students', function () {
    return view('student.index');
})->name('students.index');

Route::get('/students/create', function () {
    return view('student.create');
})->name('students.create');

Route::get('/students/show', function () {
    return view('student.show');
})->name('students.show');

Route::get('/students/edit', function () {
    return view('student.edit');
})->name('students.edit');