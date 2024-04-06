<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function index(){
        return 'Aquí se mostraran todos los posts';
    }

    public function create(){

        return "Aquí se mostrara un formulario para crear un post";
    }

    public function show($post){
        return "Aquí se mostrara el post {$post}";
    }

}

