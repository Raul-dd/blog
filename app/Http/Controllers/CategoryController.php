<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //MOstrar las categorias en el admin
        $categories = Category::orderBy('id', 'desc')->simplePaginate(8);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = $request->all();

        //validar si hay un archivo
        if($request->hasFile('image')){
            $category['image'] = $request->file('image')->store('categories');
        }

        //Guardar informacion
        Category::create($category);

        return redirect()->action([CategoryController::class, 'index'])
            ->with('success-create', 'Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //SI el usuario sube una imagen
        if($request->hasFile('image')){
            //ELiminar imagen anterior
            File::delete(public_path('storage/' . $category->image));
            //Asignar nueva imagen
            $category['image'] = $request->file['image']->store('categories');
        }

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'is_featured' => $request->is_featured,
        ]);

        return redirect()->action([CategoryController::class, 'index'], compact('category'))
            ->with('success-update', 'Categoria actualizada con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //ELiminar imagen de la categorias
        if($category->hasFile('image')){
            //ELiminar imagen anterior
            File::delete(public_path('storage/' . $category->image));
            //Asignar nueva imagen
        }

        $category->delete();

         return redirect()->action([CategoryController::class, 'index'], compact('category'))
            ->with('success-delete', 'Categoria eliminada con exito');
    }

    //FIltrar articulos por categorias
    public function detail(Category $category){

        Gate::authorize('published', $category);

        $articles = Article::where([
            ['category_id', $category->id],
            ['status', '1']
        ])->orderBy('id', 'desc')->simplePaginate(5);

        $navbar = Category::where([
            ['status', '1'],
            ['is_featured', '1'],
        ])->paginate(3);

        return view('subscriber.categories.detail', compact('articles','category', 'navbar'));
    }

}
