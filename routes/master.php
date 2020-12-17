<?php

use Illuminate\Support\Facades\Route;

Route::name('master.')->group(function () {
    Route::get('/', function() {
        return view('master.index');
    })->name('home');

    Route::get('/about', function() {
        return view('master.about');
    })->name('about');

    Route::get('/services', function() {
        return view('master.services');
    })->name('services');

    Route::prefix('/portfolio')->group(function () {
        Route::get('/', function() {
            return view('master.portfolio');
        })->name('portfolio');

        Route::get('/single-project', function() {
            return view('master.single-project');
        })->name('project');
    });

    Route::get('/contact', function() {
        return view('master.contact');
    })->name('contact');

    Route::get('/blank', 'Controller@blank')->name('blank');
});
