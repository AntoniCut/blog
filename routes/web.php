<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


// Get,       pinchamos en un enlace y redirige a otra página.
//  Post,     enviar informacion de un formulario.  
//  Put,      peticion de tipo post para actualizar registros.
//  Patch,    peticion de tipo post para actualizar registros.
//  Delete,   peticion de tipo post para eliminar registros.


//  *****  Rutas  *****
Route::get('/', [HomeController::class]);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

/*
Route::get('/posts/post-1', function(){
    return "Aquí se mostrara el post 1";
});

Route::get('/posts/post-2', function(){
    return "Aquí se mostrara el post 2";
});

Route::get('/posts/post-3', function(){
    return "Aquí se mostrara el post 3";
});
*/

/*
Route::get('/posts/{post}/{category}', function($post, $category){
    return "Aquí se mostrara el post {$post} de la categoria {$category}";
});
*/

/*
Route::get('/posts/{post}/{category?}', function($post, $category =  null){
    if($category)  return "Aquí se mostrara el post {$post} de la categoria {$category}";
    else  return "Aquí se mostrara el post {$post}";
});
*/









