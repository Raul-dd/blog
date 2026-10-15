<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class DashboardController extends Controller
{

    public function index()
    {
        #Obtener todos los articulos publicos 1
        $articles = Article::where('status', '1')->orderBy('id', 'desc')->simplePaginate(10);

        $navbar = Category::where([
            ['status', 1],
            ['is_featured', 1],
        ])->paginate(3);

        return view('dashboard.index', compact('articles', 'navbar'));
    }
    #Obtener todas las categorias
    public function all(){
        $categories = Category::where('status', '1')->simplePaginate(20);
        $navbar = Category::where([
            ['status', 1],
            ['is_featured', 1],
        ])->paginate(3);

        return view('dashboard.all-categories', compact('categories', 'navbar'));
    }
}
