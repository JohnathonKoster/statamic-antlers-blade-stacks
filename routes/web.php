<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


Route::get('blade-route', function () {
    return view('blade_template_blade_layout');
});