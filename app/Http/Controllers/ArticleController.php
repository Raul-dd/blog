<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostrar los articulos en el admin
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                        ->simplePaginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Obtener categorias publicas
        $categories = Category::select(['id', 'name'])
                                ->where('status', '1')
                                ->get();

        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        //
        $request->merge([
            'user_id' => Auth::user()->id
        ]);

        //Guardar la solicitud en una variabel
        $article = $request->all();

        //Validar si hay un archivo en el request
        if($request->hasFile('image')){
            $article['image'] = $request->file('image')->store('articles');
        }

        Article::create($article);

        return redirect()->action(([ArticleController::class, 'index']))
                            ->with('success-create', 'Articulo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //$this->authorize('published', $article);
        Gate::authorize('published', $article);

        $comments = $article->comments()->simplePaginate(5);

        return view('subscriber.articles.show', compact('article', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //Obtener categorias publicas
        $categories = Category::select(['id', 'name'])->where('status', '1')->get();

        return view('admin.articles.edit', compact('categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        //si el usuario sube una nueva imagen
        if($request->hasFile('image')){
            //Eliminar imagen anterior
            File::delete(public_path('storage/' . $article->image));
            //Asigna la nueva imagen
            $article['image'] = $request->file('image')->store('articles');
        }

        //Actualizar datos
        $article->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'introduction' => $request->introduction,
            'body' => $request->body,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        return redirect()->action(([ArticleController::class, 'index']))
                            ->with('success-update', 'Articulo modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //Eliminar imagen del articulo
        if($article->image){
            FIle::delete(public_path('storage/' . $article->image));
        }
        //Eliminar articulo
        $article->delete();
        return redirect()->action(([ArticleController::class, 'index']))
                            ->with('success-delete', 'Articulo eliminado con exito');

    }
}
