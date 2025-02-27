<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("posts", [PostController::class, "index"]);
Route::post("posts", [PostController::class, "store"]);
Route::get("posts/{post}", [PostController::class, "show"]);
Route::delete("posts/{post}", [PostController::class, "destroy"]);
