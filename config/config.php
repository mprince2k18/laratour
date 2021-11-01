<?php

return [
    'root_path' => '/tour',

    'layout' => 'layouts.app',

    'script_path' => asset('laratour/js/script.js'),
    
    'css_path' => asset('laratour/css/style.css'),

    'dark_mode' => env('LARATOUR_DARK_MODE', 'false'),
];