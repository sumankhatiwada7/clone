<?php

namespace App\Http\Controllers;
use App\Http\Requests\createpost;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $posts=post::orderBy('created_at','desc')->simplepaginate(5);;
        $categories = category::all();
    
        return view('post.index',['posts'=>$posts],['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return(view('post.createpost',['categories' => $categories]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createpost $request)
{
    $data = $request->validated();

    $image = $data['image'];
    unset($data['image']);

    $imagePath = $image->store('posts', 'public');
    $data['image'] = $imagePath;
    $data['slug'] = Str::slug($data['title']);

    $data['user_id'] = auth()->id();

    Post::create($data);
   


return redirect()->route('dashboard', ['page' => 1])->with('success', 'Post created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
