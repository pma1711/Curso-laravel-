<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\post\PutRequest;
use App\Http\Requests\post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Isset_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::paginate(2);
        return view('dashboard.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        
        $categories = Category::pluck('id', 'title');
       $post= new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
      Post::create($request->validated());
      return to_route("post.index")->with('status',"Registro creado.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        //
        return view('dashboard.post.show',compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        $categories = Category::pluck('id', 'title');

        return view('dashboard.post.edit',compact('categories', 'post'));
        
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post): RedirectResponse
    {
        $data= $request->validated();
        if(Isset($data["image"])){


           $data["image"] =$filename = time().".".$data["image"]->extension();
            $request->image->move(public_path("image"), $filename);
        }
        $post->update($data);
        //$request->session()->flash('status','Registro actualizado');
        return to_route("post.index")->with('status','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        
        $post->delete();
        return to_route("post.index")->with('status','Registro eliminado');
       
    }
}
