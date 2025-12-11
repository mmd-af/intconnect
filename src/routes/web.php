<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\EventShow;

Route::get('/', function () {
    return view('components.layouts.app');
});

Route::get('/event/{slug}', EventShow::class)->name('event.show');