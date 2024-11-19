<?php

use App\Livewire\Cars;
use App\Livewire\CarsForm;
use App\Livewire\CarsOwners;
use App\Livewire\CollectionPoint;
use App\Livewire\ColletionPointForm;
use App\Livewire\Delivery;
use App\Livewire\Garages;
use App\Livewire\GaragesForm;
use App\Livewire\Occurencies;
use App\Livewire\OccurencieShow;
use App\Livewire\OccurenciesList;
use App\Livewire\Stores;
use App\Livewire\StoresForm;
use App\Livewire\TrackCar;
use App\Livewire\TrackDelivery;
use App\Livewire\Warehouses;
use App\Livewire\WarehousesForm;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['prefix' => 'stores'], function() {
    Route::get('/', Stores::class)->name('stores.index');
    Route::get('/create', StoresForm::class)->name('stores.create');
})->middleware(['auth']);

Route::group(['prefix' => 'garages'], function() {
    Route::get('/', Garages::class)->name('garages.index');
    Route::get('/create', GaragesForm::class)->name('garages.create');
})->middleware(['auth']);

Route::group(['prefix' => 'collection-point'], function() {
    Route::get('/', CollectionPoint::class)->name('collection-point.index');
    Route::get('/create', ColletionPointForm::class)->name('collection-point.create');
})->middleware(['auth']);

Route::group(['prefix' => 'warehouses'], function() {
    Route::get('/', Warehouses::class)->name('warehouses.index');
    Route::get('/create', WarehousesForm::class)->name('warehouses.create');
})->middleware(['auth']);

Route::group(['prefix' => 'cars'], function() {
    Route::get('/', Cars::class)->name('cars.index');
    Route::get('/create', CarsForm::class)->name('cars.create');
    Route::get('/track/{id}', TrackCar::class)->name('cars.track');
})->middleware(['auth']);

Route::group(['prefix' => 'delivery'], function() {
    Route::get('/', Delivery::class)->name('delivery.index');
    Route::get('/track/{id}', TrackDelivery::class)->name('delivery.track');
})->middleware(['auth']);

Route::group(['prefix' => 'occurencies'], function() {
    Route::get('/', Occurencies::class)->name('occurencies.index');
    Route::get('/show/{id}', OccurencieShow::class)->name('occurencies.show');
})->middleware(['auth']);

Route::get('car-owners', CarsOwners::class)->middleware(['auth'])->name('car-owners.index');

require __DIR__.'/auth.php';
