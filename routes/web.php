<?php

use App\Http\Controllers\Admin\AxiosCallController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('alreadyLoggedIn')->group(function (){
    Route::get('admin/login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('validate_login', [CustomAuthController::class, 'validate_login'])->name('sample.validate_login');
});
Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('validate_registration', [CustomAuthController::class, 'validate_registration'])->name('sample.validate_registration');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::middleware('isLoggedIn')->group(function (){

    Route::get('admin/logout', [CustomAuthController::class, 'logout'])->name('logout');
    Route::get('admin/dashboard', [DashboardController::class, 'DashboardIndex']);

    Route::get('admin/user-list', [UserController::class, 'UserIndex']);
    Route::get('admin/user-create', [UserController::class,'UserCreate']);
    Route::post('admin/user-entry', [UserController::class, 'UserEntry']);
    Route::get('admin/user-edit/{id}', [UserController::class, 'UserEdit']);
    Route::post('admin/user-update/{id}', [UserController::class, 'UserUpdate']);


    Route::get('admin/company-list', [CompanyController::class, 'CompanyIndex']);
    Route::get('admin/company-create', [CompanyController::class, 'CompanyCreate']);
    Route::post('admin/company-entry', [CompanyController::class, 'CompanyEntry']);
    Route::get('admin/company-edit/{id}', [CompanyController::class, 'CompanyEdit']);
    Route::post('admin/company-update/{id}', [CompanyController::class, 'CompanyUpdate']);

});



//Site Route Start
Route::get('/', [SiteController::class, 'HomePage']);
Route::get('/search', [SiteController::class, 'SearchPage']);








