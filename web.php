<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('about');
});


//This is first way of send key
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about',['name' => $name]);
});


//This is second way of send key value
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about') -> with ('name', $name);
});


//This is third way of send key
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about',compact('name'));
});





