<?php

namespace App\Http\Controllers;

use App\Models\Contenidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContenidosController extends Controller
{
    public function index()

    {
        $posts = Contenidos::get();
        return view ('Post', ['posts' => $posts]); 
        
        
    }
    

    public function show(Contenidos $Post)
    
    {

        return view('posts.show', ['Post' => $Post]);

    }
}
