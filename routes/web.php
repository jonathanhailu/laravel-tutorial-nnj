<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "Naruto","skill" => 65, "age" => 16, "id" => 1],
        ["name" => "Sasuke", "skill" => 75, "age" => 17, "id" => 2],
        ["name" => "Sakura", "skill" => 85, "age" => 16, "id" => 3],
        ["name" => "Kakashi", "skill" => 95, "age" => 30, "id" => 4],
        ["name" => "Tobi", "skill" => 55, "age" => 20, "id" => 5]
    ];

    return view('ninjas.index' , ["greeting" => "Hello" , "ninjas" => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
  // do something with the id
  // e.g. fetch a record from the db

  return view('ninjas.show', ["greeting" => "Hello", 'id' => $id]);
});