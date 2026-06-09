<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); });

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/equipments', 'pages.equipments')->name('equipments');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/inquiries', InquiryController::class)->middleware('throttle:3,10')->name('inquiries.store');
