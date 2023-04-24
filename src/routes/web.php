<?php
namespace alirezaabdolmaleki\about\routes;
use Illuminate\Support\Facades\Route;

Route::get('about', function () {
    return "made by alireza abdolmaleki";
});
