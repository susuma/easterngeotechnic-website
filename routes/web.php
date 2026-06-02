<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome'); });


Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/equipments', 'pages.equipments')->name('equipments');
Route::view('/certifications', 'pages.certifications')->name('certifications');
Route::view('/contact', 'pages.contact')->name('contact');
