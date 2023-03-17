<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\Category\PutRequest; 
use App\Http\Requests\Category\StoreRequest; 
use App\Models\Category;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;







class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories= Category::paginate(2);
        return view('dashboard.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $category= new Category();
        echo view('dashboard.category.create', compact('category'));
      
    }

    public function store(StoreRequest $request)
    {
      Category::create($request->validated());
      return to_route("category.index")->with('status',"Registro creado.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        echo view('dashboard.category.show',compact('category'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        echo view('dashboard.category.edit',compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, category $category)
    {
   
        $category->update($request->validated());
        //$request->session()->flash('status','Registro actualizado');
        return to_route("category.index")->with('status','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        
        $category->delete();
        return to_route("category.index")->with('status','Registro eliminado');
       
    }
}
