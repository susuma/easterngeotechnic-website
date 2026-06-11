<?php

use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TwoFactorChallengeController;
use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/equipments', 'pages.equipments')->name('equipments');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/inquiries', InquiryController::class)->middleware('throttle:3,10')->name('inquiries.store');

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::middleware('guest:admin')->group(function (): void {
        Route::get('/login', [AuthController::class, 'create'])->name('login');
        Route::post('/login', [AuthController::class, 'store'])->name('login.store');
        Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
        Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->name('password.reset');
        Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');
        Route::get('/two-factor-challenge', [TwoFactorChallengeController::class, 'create'])->name('two-factor.challenge');
        Route::post('/two-factor-challenge', [TwoFactorChallengeController::class, 'store'])->name('two-factor.verify');
    });

    Route::middleware('auth:admin')->group(function (): void {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/analytics', AnalyticsController::class)->name('analytics');
        Route::get('/inquiries/export', [AdminInquiryController::class, 'export'])->name('inquiries.export');
        Route::resource('/inquiries', AdminInquiryController::class)->only(['index', 'show', 'update', 'destroy']);
        Route::get('/activity', ActivityLogController::class)->name('activity');
        Route::get('/security', [SecurityController::class, 'edit'])->name('security.edit');
        Route::put('/security/profile', [SecurityController::class, 'profile'])->name('security.profile');
        Route::post('/security/two-factor', [SecurityController::class, 'confirm'])->name('security.two-factor.confirm');
        Route::delete('/security/two-factor', [SecurityController::class, 'disable'])->name('security.two-factor.disable');
        Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

        Route::middleware('admin.owner')->group(function (): void {
            Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
            Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
            Route::resource('/administrators', AdminController::class)->only(['index', 'store', 'update', 'destroy']);
        });
    });
});
