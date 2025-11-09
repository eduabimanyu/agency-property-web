<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeroController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/{property:slug}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/categories/{category:slug}', [PropertyController::class, 'category'])->name('categories.show');

Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/{project:slug}/download-brochure', [ProjectController::class, 'downloadBrochure'])->name('projects.download-brochure');

Route::post('/brochure-request', [PropertyController::class, 'brochureRequest'])->name('brochure.request');
Route::post('/contact', [PropertyController::class, 'contact'])->name('contact');
Route::get('/properties/{property:slug}/download-brochure', [PropertyController::class, 'downloadBrochure'])->name('properties.download-brochure');

// Hero routes
Route::resource('heroes', HeroController::class);
