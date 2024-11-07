<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;


// Home
Route::get("/", [HomeController::class ,"index"]);
Route::get("/about", [HomeController::class ,"about"]);
Route::get("/team", [HomeController::class ,"team"]);
Route::get("/testimonials", [HomeController::class ,"testimonials"]);
Route::get("/contact", [HomeController::class ,"contact"]);
Route::get("/portfolio", [HomeController::class ,"portfolio"]);
Route::get("/services", [HomeController::class ,"services"]);

// Auth
Route::get("/login", [AuthController::class ,"login"])->name('login');
Route::post("/login", [AuthController::class ,"authenticated"]);
Route::get("/logout", [AuthController::class ,"logout"]);

// Dashboard
Route::get('/dashboard', [DashboardController::class ,'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('testimonials', TestimonialController::class)->middleware('auth');
Route::resource('portfolios', PortfolioController::class)->middleware('auth');