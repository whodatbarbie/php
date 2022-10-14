<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Barbare Muzashvili';
});

Route::get('/age', function () {
    return '18';
});

Route::get('/hobby', function () {
    return 'Reading books';
});

Route::get('/favanimal', function () {
    return 'cat';
});

Route::get('/cat', function () {
    return 'meow';
});



Route::delete('/delete',  function()
{
    return response()->json(["message" => "წარმატებით წაიშალა"]);
});

Route::post('/post', function()
{
    return response()->json(["message" => "წარმატებით განახლდა"]);
});

Route::put('/put',  function()
{
    return response()->json(["message" => "წარმატებით დაემატა"]);
});

