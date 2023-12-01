<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
            // ('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.categories.create', [
        //     'categories' => Category::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return redirect('/dashboard/categories')->with('success', 'Category telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return view('dashboard.categories.show',[
        //     'category' => $category
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // return view('dashboard.categories.edit', [
        //     'category' => $category,
        //     'categories' => Category::all()
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Category::destroy($category->id);
        // return redirect('/dashboard/categories')->with('success', 'Post telah dihapus!');
    }
}
